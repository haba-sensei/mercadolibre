<?php

namespace App\Http\Livewire\Web\Checkout;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CheckoutComponent extends Component
{
    public $name;
    public $phone;
    public $address;
    public $city;
    public $postal;

    public $card_no;
    public $card_holder;
    public $card_exp_month;
    public $card_exp_year;
    public $card_cvc;
    public $card_check_term;

    public $paymentmode;
    public $thankyou;

    public function placeOrder()
    {
        $this->validate([
        'name' => 'required',
        'phone' => 'required|numeric',
        'address' => 'required',
        'city' => 'required',
        'postal' => 'required',
        'paymentmode' => 'required'
        ]);

        $reference_id = Str::random(20);

        $order = new Order();
        $order->reference_id = $reference_id;
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->name = $this->name;
        $order->phone = $this->phone;
        $order->address = $this->address;
        $order->city = $this->city;
        $order->postal = $this->postal;
        $order->status = 'ordered';
        $order->save();

        foreach (FacadesCart::content() as $item)
        {
        $orderItem = new OrderItem();
        $orderItem->product_id = $item->id;
        $orderItem->tienda_id = $item->model->tienda->id;
        $orderItem->order_id = $order->id;
        $orderItem->price = $item->price;
        $orderItem->quantity = $item->qty;
        $orderItem->status = 'pending';

        $product = Product::whereId($item->id)->pluck('stock');
        $nuevo_stock = $product[0] - $item->qty;

        Product::whereId($item->id)->update([
            'stock' => $nuevo_stock
        ]);

        $orderItem->save();
        }

        if($this->paymentmode == "card")
        {
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

            $response_token_store_pre_firmado = Http::get(env('WOMPI_SANDBOX_MERCHANTS').env('WOMPI_SANDBOX_PUBLIC_ID'));

            $response_card_token = Http::withToken(env('WOMPI_SANDBOX_PUBLIC_ID'))
                ->post(env('WOMPI_SANDBOX_TOKEN_CARD'),
                    [
                        "number" => $this->card_no,
                        "cvc" => $this->card_cvc,
                        "exp_month" => $this->card_exp_month,
                        "exp_year" => $this->card_exp_year,
                        "card_holder" => $this->card_holder
                    ]);

            $precio_format = str_replace('.', '', session()->get('checkout')['subtotal']);
            $precio_cents = bcmul($precio_format, 100);

            $response_transation = Http::withToken(env('WOMPI_SANDBOX_PRIVATE_ID'))
                ->post(env('WOMPI_SANDBOX_TRANSITION'), [
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



            $response_status_transition = Http::get(env('WOMPI_SANDBOX_TRANSITION_SEARCH').$response_transation->json()['data']['id']);

            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->order_id = $order->id;
            $transaction->transaction_id = $response_transation->json()['data']['id'];
            $transaction->mode = 'CARD';
            $transaction->status = $response_status_transition->json()['data']['status'];
            $transaction->save();

            $this->resetCard();
        }

    }

    public function resetCard()
    {
        $this->thankyou = 1;
        FacadesCart::destroy();
        session()->forget('checkout');
    }


    public function verifyForCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        else if($this->thankyou) {
            return redirect()->route('web.checkout.thankyou');
        }
        else if(!session()->get('checkout')) {
            return redirect()->route('web.shopcart.index');
        }
    }

    public function render()
    {
        $this->verifyForCheckout();

        return view('livewire.web.checkout.checkout-component');
    }

}
