<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class VentasController extends Controller
{

    /* METODO PROTECTED */
    protected $HomeController;

    /* {{ METODO CONSTRUCTOR | DATA MENU LATERAL }} */
    public function __construct(HomeController $HomeController)
    {
        $this->HomeController = $HomeController;
    }


    public function index()
    {
        $pageName= 'ventas';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.ventas.index',[
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


    public function show(Order $order)
    {
        $pageName= 'ventas';
        $order_search = $order->get();
        $response_status_transition = Http::get(env('WOMPI_SANDBOX_TRANSITION_SEARCH').$order_search[0]->transaction->transaction_id);

        Transaction::whereId($order_search[0]->transaction->id)->update([
            'status' => $response_status_transition->json()['data']['status']
        ]);

        $order = $order->get();
        $varPriceItem1 = 0;
        $varPriceItem = 0;

        foreach ($order[0]->orderItems as $item) {

            if(Auth::user()->id == 1){
                $varPriceItem1 = $item->price * $item->quantity;
                $varPriceItem = $varPriceItem1 + $varPriceItem;
                $auth = "aproved";
            }else {

                if ($item->tienda_id == Auth::user()->tienda->id ) {

                    $varPriceItem1 = $item->price * $item->quantity;
                    $varPriceItem = $varPriceItem1 + $varPriceItem;
                    $auth = "aproved";
                }

            }




        }

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.ventas.show',[
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
        ], compact('order', 'varPriceItem', 'auth') );
    }


}
