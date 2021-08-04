<?php

namespace App\Http\Livewire\Admin\Graficos;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MejorVendedorComponent extends Component
{

    protected $listeners = [
        'getbestsellers' => 'bestsellers'
    ];

    public function bestsellers(){

        $sum_order_items = OrderItem::select(DB::raw("SUM(quantity) as cantidad, tiendas.name"))
        ->join('tiendas', 'order_items.tienda_id', '=', 'tiendas.id')
        ->whereYear('order_items.created_at', date('Y'))
        ->where(['order_items.status' => 'delivered'])
        ->groupBy(DB::raw("tienda_id"))
        ->orderBy('cantidad', 'desc')
        ->pluck('cantidad', 'name')
        ->take(5);

        if(count($sum_order_items) == 0){
            $vendedor = ["Sin Ventas"];
            $data = [100];
        }else {
            foreach ($sum_order_items as $index => $cantidad) {
                $vendedor[] = ucfirst($index);
                $data[] = intval($cantidad);
            }
        }




       $this->dispatchBrowserEvent('changebestsellers', ['data'=> $data, 'vendedores' => $vendedor]);
    }


    public function render()
    {
        return view('livewire.admin.graficos.mejor-vendedor-component');
    }
}
