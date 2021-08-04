<?php

namespace App\Http\Livewire\Admin\Graficos;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class VentasAnualesComponent extends Component
{
    protected $listeners = [
        'getassets' => 'passtobrowser'
    ];

    public function passtobrowser(){


        $subtotal_order_dolares = Order::select(DB::raw("SUM(subtotal * tasa_cambio) as subtotal"))
        ->join('transactions', 'orders.id', '=', 'transactions.order_id')
        ->whereYear('orders.created_at', date('Y'))
        ->where(['mode' => 'paypal', 'transactions.status' => 'approved'])
        ->groupBy(DB::raw("Month(orders.created_at)"))
        ->pluck('subtotal');

        $subtotal_order_pesos = Order::select(DB::raw("SUM(subtotal) as subtotal"))
        ->join('transactions', 'orders.id', '=', 'transactions.order_id')
        ->whereYear('orders.created_at', date('Y'))
        ->where(['mode' => 'card', 'transactions.status' => 'approved'])
        ->groupBy(DB::raw("Month(orders.created_at)"))
        ->pluck('subtotal');

        $month_order = Order::select(DB::raw("Month(created_at) as month"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('month');

        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);

        foreach ($month_order as $index => $meses) {

            if(isset($subtotal_order_dolares[$index])){
                $valor_dolar = $subtotal_order_dolares[$index];
            }else {
                $valor_dolar = 0;
            }

            if(isset($subtotal_order_pesos[$index])){
                $valor_peso = $subtotal_order_pesos[$index];
            }else {
                $valor_peso = 0;
            }

            $datas[$meses-1] = floatval($valor_dolar + $valor_peso );
        }

        $array[] = array(
            $datas[0],//enero
            $datas[1],//feb
            $datas[2],//marz
            $datas[3],//abril
            $datas[4],//mayo
            $datas[5],//junio
            $datas[6],//julio
            $datas[7],//agosto
            $datas[8],//sep
            $datas[9],//oct
            $datas[10],//nov
            $datas[11]//dic
            );




        $this->dispatchBrowserEvent('changeassets', ['assets'=> $array]);
    }


    public function render()
    {
        return view('livewire.admin.graficos.ventas-anuales-component');
    }
}
