<?php

namespace App\Http\Livewire\Admin\Ventas;

use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;

class TablaProductosComponent extends Component
{
    public $order;
    public $status;
    public $order_items_id;
    public $info;
    public $color;

    public function status($status, $order_items_id)
    {
        $this->status = $status;
        $this->order_items_id = $order_items_id;

        $orderItem = OrderItem::find($order_items_id);

        $orderItem->update([
            'status' => $status
        ]);

         $list_status = $orderItem->pluck('status')->toArray();

         $count_lista_status = count($list_status);

         $count_lista_enviados = (array_count_values($list_status));



            if(isset($count_lista_enviados['delivered']) && $count_lista_enviados['delivered'] == $count_lista_status){

                $orderItem->order->update([
                    'status' => 'deliver'
                ]);

            }elseif(isset($count_lista_enviados['canceled']) && $count_lista_enviados['canceled'] == $count_lista_status){

                $orderItem->order->update([
                    'status' => 'canceled'
                ]);

            }elseif(isset($count_lista_enviados['pending']) && $count_lista_enviados['pending'] == $count_lista_status){

                $orderItem->order->update([
                    'status' => 'ordered'
                ]);

            }elseif(isset($count_lista_enviados['aproved']) && $count_lista_enviados['aproved'] == $count_lista_status){

                $orderItem->order->update([
                    'status' => 'process'
                ]);

            }
            else {
                $orderItem->order->update([
                    'status' => 'process'
                ]);

            }






        $info = 'El Producto se actualizo con éxito';

        $color = '#1c3faa';

        $this->dispatchBrowserEvent('ventas_status', ['info' => $info, 'color' => $color]);


    }

    public function render()
    {

        return view('livewire.admin.ventas.tabla-productos-component');
    }

}
