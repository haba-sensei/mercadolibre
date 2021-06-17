<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\HomeController;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ComprasController extends Controller
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

    public function show(Order $order)
    {
        $pageName= 'compras';
        $order_search = $order->get();
        $response_status_transition = Http::get(env('WOMPI_SANDBOX_TRANSITION_SEARCH').$order_search[0]->transaction->transaction_id);

        Transaction::whereId($order_search[0]->transaction->id)->update([
            'status' => $response_status_transition->json()['data']['status']
        ]);

        $order = $order->get();

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
