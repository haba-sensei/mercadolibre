<?php

namespace App\Http\Livewire\Admin\Report;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CompradorRepoComponent extends Component
{
    public function render()
    {
        //PEDIDOS
        $cons_pedidos = Order::whereYear('orders.created_at', date('Y'))
        ->where(['orders.status' => 'deliver', 'user_id' => auth()->user()->id])
        ->orWhere(['orders.status' => 'process'])
        ->count();

        //VENTAS
        $cons_ventas_product = OrderItem::select(DB::raw("SUM(quantity) as cantidad"))
        ->join('orders', 'order_items.order_id', '=', 'orders.id')
        ->whereYear('order_items.created_at', date('Y'))
        ->where([
            'order_items.status' => 'delivered',
            'orders.user_id' => auth()->user()->id
         ])
        ->pluck('cantidad');

        if ($cons_ventas_product[0] == NULL) {
            $rep_ventas_productos = 0;
        }else {
            $rep_ventas_productos = $cons_ventas_product[0];
        }


        return view('livewire.admin.report.comprador-repo-component', compact('cons_pedidos' ,'rep_ventas_productos'));
    }
}
