<?php

namespace App\Http\Livewire\Admin\Report;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class VendedorRepoComponent extends Component
{
    public function render()
    {
        //VENTAS
        $cons_ventas_product = OrderItem::select(DB::raw("SUM(quantity) as cantidad"))
        ->whereYear('order_items.created_at', date('Y'))
        ->where(['order_items.status' => 'delivered', 'tienda_id' => auth()->user()->tienda->id ])
        ->pluck('cantidad');

        if ($cons_ventas_product[0] == NULL) {
            $rep_ventas_productos = 0;
        }else {
            $rep_ventas_productos = $cons_ventas_product[0];
        }

        //PEDIDOS
        $cons_pedidos = Order::whereYear('orders.created_at', date('Y'))
        ->where(['orders.status' => 'deliver', 'user_id' => auth()->user()->id])
        ->orWhere(['orders.status' => 'process'])
        ->count();

        //PRODUCTOS
        $cons_product = Product::where(['status' => '2', 'tienda_id' => auth()->user()->tienda->id])->count();

        return view('livewire.admin.report.vendedor-repo-component',
            compact('rep_ventas_productos', 'cons_pedidos', 'cons_product')
        );
    }
}
