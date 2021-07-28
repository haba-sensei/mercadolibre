<?php

namespace App\Http\Livewire\Admin\Membresia;

use App\Models\Coupon;
use App\Services\PaypalService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Illuminate\Support\Str;

class PasarelaPagoComponent extends Component
{

    public $card_no;
    public $card_holder;
    public $card_exp_month;
    public $card_exp_year;
    public $card_cvc;
    public $card_check_term;

    public $paymentmode;
    public $thankyou;

    public $activePaypal;
    public $apiContext;
    public $paypalService;

    public $have_coupon;
    public $coupon_code;
    public $discount_COP;
    public $discount_USD;
    public $subtotalDesuento_COP;
    public $subtotalDesuento_USD;

    public function placeMembership()
    {

        $this->validate([
        'paymentmode' => 'required'
        ]);

        $data = file_get_contents('https://www.datos.gov.co/resource/32sa-8pi3.json?$limit=1&$order=vigenciahasta%20DESC');
        $tasa_data  = json_decode($data);
        $tasa_cambio = $tasa_data[0]->valor;

        $planes = DB::table('planes')->where('id', '1')->first();

        $precio_COP = $planes->yearly_price;
        $precio_USD = number_format($planes->yearly_price / $tasa_cambio, 2);

        session()->put('membresia_payment', [
            'subtotal' => $precio_COP,
            'subtotal_dolar' => $precio_USD
        ]);


        if($this->paymentmode == "card")
        {
            $wompiConfig = Config::get('wompi');

            Validator::extend('without_spaces', function($attr, $value){
                return preg_match('/^\S*$/u', $value);
            });

            $this->validate([
            'card_no' => 'required|numeric|without_spaces',
            'card_holder' => 'required',
            'card_exp_month' => 'required|numeric|without_spaces',
            'card_exp_year' => 'required|numeric|without_spaces',
            'card_cvc' => 'required|numeric|without_spaces',
            'card_check_term' => 'required'
            ]);


            $response_token_store_pre_firmado = Http::get($wompiConfig['MERCHANTS'].$wompiConfig['PUBLIC_ID']);

            $response_card_token = Http::withToken($wompiConfig['PUBLIC_ID'])
                ->post($wompiConfig['TOKEN_CART'],
                    [
                        "number" => $this->card_no,
                        "cvc" => $this->card_cvc,
                        "exp_month" => $this->card_exp_month,
                        "exp_year" => $this->card_exp_year,
                        "card_holder" => $this->card_holder
                    ]);


            if(isset($response_card_token->json()['error']) == false){

                    $subtotal_format_cop = sprintf('%.2f', str_replace(',', '', session()->get('membresia_payment')['subtotal'] ));

                    if (session()->has('coupon'))
                    {
                        if(session('coupon')['type'] == 'fixed')
                        {
                            $descuento =  sprintf('%.2f',  str_replace(',', '', session('coupon')['value'] ) );
                            $razon_descuento = "$".$descuento;
                        }
                        else
                        {
                            $descuento =  ($subtotal_format_cop * session('coupon')['value']) / 100;
                            $razon_descuento = session('coupon')['value']."%";
                        }

                        $subtotal = str_replace(',', '', $subtotal_format_cop - $descuento);
                    }
                    else
                    {
                        $subtotal = str_replace(',', '', $subtotal_format_cop);
                    }

                    $membresia_id = Auth::user()->tienda->id;
                    $reference_id = Str::random(20);
                    $price_membresia = $subtotal;
                    $paymentmode= 'card';
                    $bono = 'libre';


                    $inicio_membresia = Carbon::parse(Auth::user()->tienda->membresia->started_at);
                    $fin_membresia = Carbon::parse(Auth::user()->tienda->membresia->finish_at);


                    $date_diff=$inicio_membresia->diffInDays($fin_membresia);

                    $dias_contables = $date_diff + 365;

                    $actual_membresia_init = Carbon::now()->format('Y-m-d');
                    $actual_membresia_fin = $fin_membresia->addDays($dias_contables)->format('Y-m-d');


                    DB::table('membresias')
                        ->where('tienda_id', Auth::user()->tienda->id)
                        ->update([
                            'plan_id' => 1,
                            'started_at' => $actual_membresia_init,
                            'finish_at' => $actual_membresia_fin
                        ]);


                    if (session()->has('coupon'))
                    {
                        Coupon::where('code', session('coupon')['code'])->update([
                        'status' => 2
                        ]);

                    session()->forget('coupon');
                    }



                $precio_cents = bcmul($subtotal, 100);

                $response_transation = Http::withToken($wompiConfig['PRIVATE_ID'])
                    ->post($wompiConfig['TRANSITION'], [
                            "acceptance_token"  => $response_token_store_pre_firmado->json()['data']['presigned_acceptance']['acceptance_token'],
                            "amount_in_cents" => (int)$precio_cents,
                            "currency" => "COP",
                            "customer_email" => Auth::user()->email,
                            "reference" =>  $reference_id,
                            "payment_method" => array(
                                "type" => "CARD",
                                "token" => $response_card_token->json()['data']['id'],
                                "installments" => 1
                            )
                    ]);



                $response_status_transition = Http::get($wompiConfig['TRANSITION_SEARCH'].$response_transation->json()['data']['id']);

                DB::table('membresias_pagos')->insert(
                    [
                        'reference_id' => $reference_id,
                        'membresia_id' => $membresia_id,
                        'price_membresia' => $price_membresia,
                        'mode' => $paymentmode,
                        'bono' => $bono,
                        'transaction_id' => $response_transation->json()['data']['id'],
                        'status' => $response_status_transition->json()['data']['status'],
                        'tasa_cambio' => $tasa_cambio,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);


                $this->resetCard();
            }else {


                switch ($response_card_token->json()['error']['type']) {
                    case 'INVALID_ACCESS_TOKEN':
                       $info = "La llave proporcionada no corresponde a este ambiente.";
                    break;
                    case 'NOT_FOUND_ERROR':
                       $info = "La entidad solicitada no existe";
                    break;
                    case 'INPUT_VALIDATION_ERROR':
                        $info = "Datos de la tarjeta Invalidos";
                    break;

                }


                session()->flash('info', $info);
            }


        }elseif($this->paymentmode == "paypal"){

            $subtotal_format_usd = sprintf('%.2f', str_replace(',', '', session()->get('membresia_payment')['subtotal_dolar'] ));

            if (session()->has('coupon'))
            {
                if(session('coupon')['type'] == 'fixed')
                {
                    $descuento =  sprintf('%.2f',  str_replace(',', '', session('coupon')['value'] / $tasa_cambio) );
                    $razon_descuento = "$".$descuento;
                }
                else
                {
                    $descuento =  ($subtotal_format_usd * session('coupon')['value']) / 100;
                    $razon_descuento = session('coupon')['value']."%";
                }

                $subtotal = str_replace(',', '', $subtotal_format_usd - $descuento);
            }
            else
            {
                $subtotal = str_replace(',', '', $subtotal_format_usd);
            }

            $reference_id = Str::random(20);


            // $order->save();

            if (session()->has('coupon'))
            {
                Coupon::where('code', session('coupon')['code'])->update([
                    'status' => 2
                ]);

                session()->forget('coupon');
            }



            // $order_search = Order::where(['reference_id' =>  $reference_id])->pluck('id');


            // $response = new PaypalService();
            // $resultado = $response->createOrder($order_search[0]);

            // $PaypalID = json_decode(json_encode($resultado->result), FALSE)->id;
            // $PaypalStatus = json_decode(json_encode($resultado->result), FALSE)->status;

            // if($resultado->statusCode !== 201) {
            //     abort(500);
            // }

            // switch ($PaypalStatus) {
            //     case 'CREATED':
            //     case 'SAVED':
            //     case 'APPROVED':
            //     case 'PAYER_ACTION_REQUIRED':
            //         $status = "pending";
            //         break;

            //     case 'VOIDED':
            //         $status = "declined";
            //         break;

            //     case 'COMPLETED':
            //         $status = "approved";
            //         break;

            // }

            // $object = json_decode(json_encode($resultado->result), FALSE);

            // foreach ($object->links as $link) {
            //     if($link->rel == 'approve') {
            //         return redirect($link->href);

            //     }
            // }



        }

    }

    // public function cancelPage()
    // {
    //     return redirect()->route('web.shopcart.index');
    // }

    // public function getExpressCheckoutSuccess(Request $request, $orderId)
    // {
    //     $order = Order::find($orderId);


    //     $response = new PaypalService();
    //     $resultado = $response->captureOrder($order->transaction->transaction_id);
    //     $response_result = json_decode(json_encode($resultado->result))->status;

    //     if ($response_result == "COMPLETED") {

    //         $order->transaction->where(['order_id' =>  $order->id])->update([
    //             'status' => 'approved'
    //          ]);

    //          $this->resetCard();

    //          return redirect()->route('web.checkout.thankyou');
    //     }




    // }

    public function resetCard()
    {
        $this->thankyou = 1;
        session()->forget('membresia_payment');
    }

    public function verifyForCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        else if($this->thankyou) {

            session()->flash('info', 'Membresia realizada con exito');

            return redirect()->route('admin.membresia.index');

        }
    }

    // public function applyCouponCode()
    // {
    //     $subtotal_format = sprintf('%.2f', str_replace(',', '', FacadesCart::subtotal() ));
    //     $coupon = Coupon::where('code', $this->coupon_code)
    //                     ->where('cart_value', '<=', $subtotal_format)
    //                     ->where('status', '=', 1)
    //                     ->first();
    //     //

    //     if (!$coupon) {
    //         session()->flash('coupon_message', 'Cupon Invalido');
    //         return;
    //     }

    //     session()->put('coupon', [
    //         'code' => $coupon->code,
    //         'type' => $coupon->type,
    //         'value' => $coupon->value,
    //         'cart_value' => $coupon->cart_value
    //     ]);



    // }

    // public function calculateDiscount()
    // {
    //     if(session()->has('coupon'))
    //     {
    //         $data = file_get_contents('https://www.datos.gov.co/resource/32sa-8pi3.json?$limit=1&$order=vigenciahasta%20DESC');
    //         $tasa_data  = json_decode($data);
    //         $tasa_cambio = $tasa_data[0]->valor;
    //         $subtotal_format = sprintf('%.2f', str_replace(',', '', FacadesCart::subtotal() ));

    //         if (session('coupon')['type'] == 'fixed')
    //         {
    //             $this->discount_COP = session('coupon')['value'];
    //             $this->discount_USD = session('coupon')['value'] / $tasa_cambio;
    //         }
    //         else
    //         {

    //             $this->discount_COP = ($subtotal_format * session('coupon')['value']) / 100;
    //             $this->discount_USD = sprintf('%.2f', ( ( $subtotal_format / $tasa_cambio ) * session('coupon')['value'] ) / 100);
    //         }
    //             $this->subtotalDesuento_COP =  number_format($subtotal_format - $this->discount_COP, 2);
    //             $this->subtotalDesuento_USD =  number_format(($subtotal_format / $tasa_cambio)   - $this->discount_USD, 2);
    //     }
    // }

    public function render()
    {
        // if (session()->has('coupon')) {
        //     if(sprintf('%.2f', str_replace(',', '', FacadesCart::subtotal() )) < session('coupon')['cart_value'])
        //     {
        //          session()->forget('coupon');
        //     }else
        //     {
        //         $this->calculateDiscount();
        //     }
        // }



          $this->verifyForCheckout();

        return view('livewire.admin.membresia.pasarela-pago-component');
    }
}
