<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Services\PaypalService;
use App\Http\Controllers\Admin\HomeController;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;

class ComprasController extends Controller
{
      /* METODO PROTECTED */
    protected $HomeController;
    private $client;
    /* {{ METODO CONSTRUCTOR | DATA MENU LATERAL }} */
    public function __construct(HomeController $HomeController)
    {
        $this->HomeController = $HomeController;
        $paypalConfig = Config::get('paypal');

        $environment = new SandboxEnvironment($paypalConfig['client_id'], $paypalConfig['secret']);
        $this->client = new PayPalHttpClient($environment);
    }


    public function index()
    {
        $pageName= 'compras';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.compras.index',[
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'listar',
            'page_name' => $pageName,
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()
        ] );
    }

    public function show($reference_id)
    {
        $pageName= 'compras';
        $order_search = Order::where(['reference_id' => $reference_id])->get();

        switch ($order_search[0]->transaction->mode) {
            case 'card':

                $response_status_transition = Http::get(env('WOMPI_SANDBOX_TRANSITION_SEARCH').$order_search[0]->transaction->transaction_id);

                Transaction::whereId($order_search[0]->transaction->id)->update([
                    'status' => $response_status_transition->json()['data']['status']
                ]);

                break;
            case 'paypal':

                $response = new PaypalService();
                $request = new OrdersGetRequest($order_search[0]->transaction->transaction_id);
                $execution = $this->client->execute($request);
                $PaypalStatus = json_decode(json_encode($execution->result), FALSE)->status;

                switch ($PaypalStatus) {
                    case 'CREATED':
                    case 'SAVED':
                    case 'APPROVED':
                    case 'PAYER_ACTION_REQUIRED':
                        $status = "pending";
                        break;

                    case 'VOIDED':
                        $status = "declined";
                        break;

                    case 'COMPLETED':
                        $status = "approved";
                        break;

                }

                Transaction::whereId($order_search[0]->transaction->id)->update([
                    'status' => $status
                ]);

                 

                break;

        }



        $order = Order::where(['reference_id' => $reference_id])->get();

        foreach ($order_search[0]->orderItems as $item) {

          switch ($item->status) {
              case 'pending':
                $status = "ordered";
              break;

              case 'delivered':
                $status = "deliver";
              break;

              case 'aproved':
                $status = "process";
              break;

              case 'canceled':
                $status = "canceled";
              break;
          }
        }

        $orderUpdate = Order::find($order_search[0]->id);

        $orderUpdate->update([
            'status' => $status
        ]);



        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.compras.show',[
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'listar',
            'page_name' => $pageName,
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()
        ], compact('order', 'status') );
    }



}
