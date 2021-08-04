<?php

namespace App\Http\Livewire\Admin\Report;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Tienda;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class AdminRepoComponent extends Component
{
    public function render()
    {
        //VENTAS
        $cons_ventas_product = OrderItem::select(DB::raw("SUM(quantity) as cantidad"))
        ->whereYear('order_items.created_at', date('Y'))
        ->where(['order_items.status' => 'delivered'])
        ->pluck('cantidad');

        if ($cons_ventas_product[0] == NULL) {
            $rep_ventas_productos = 0;
        }else {
            $rep_ventas_productos = $cons_ventas_product[0];
        }

        //PEDIDOS
        $cons_pedidos = Order::whereYear('orders.created_at', date('Y'))
        ->where(['orders.status' => 'deliver'])
        ->orWhere(['orders.status' => 'process'])
        ->count();

        //PRODUCTOS
        $cons_product = Product::where(['status' => '2'])->count();

        //VENDEDORES
        $cons_vendedores = Tienda::where(['status' => '2'])->count();

        //COMPRADORES
        $cons_compradores = Role::where('name', 'Comprador')->first()->users()->count();

        //SOLICITUDES
        $cons_solicitudes = Tienda::where(['status' => '1'])->count();


        return view('livewire.admin.report.admin-repo-component',
            compact('rep_ventas_productos', 'cons_pedidos', 'cons_product', 'cons_vendedores', 'cons_compradores', 'cons_solicitudes')
        );
    }
}
