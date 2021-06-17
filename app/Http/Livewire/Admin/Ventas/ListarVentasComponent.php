<?php

namespace App\Http\Livewire\Admin\Ventas;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ListarVentasComponent extends Component
{

     /* PAGINACION REACTIVA */
     use WithPagination;
     /* VARIABLES SORT BY  */
     public $sortBy='id';
     public $sortDirection = 'asc';
     public $perPage = 4;
     public $search = '';




    public function render()
    {

        if(Auth::user()->id == 1){

            $ventas = Order::query()
                        ->search($this->search)
                        ->orderBy($this->sortBy, $this->sortDirection)
                        ->paginate($this->perPage);

        }else {

            $exist_item = OrderItem::query()
            ->where(['tienda_id' => Auth::user()->tienda->id])
            ->get();

            if($exist_item->count() > 0){

                for ($i=0; $i < $exist_item->count(); $i++) {
                    $search_id[] = $exist_item[$i]->order_id;
                }

                $ventas = Order::query()
                        ->whereIn('id', $search_id)
                        ->search($this->search)
                        ->orderBy($this->sortBy, $this->sortDirection)
                        ->paginate($this->perPage);

            }else {
                $ventas = null;
            }




        }

        return view('livewire.admin.ventas.listar-ventas-component', compact('ventas'));
    }

     /* ACTUALIZANDO DATA EN LA BUSQUEDA */
     public function updatingSearch()
     {
         $this->resetPage();
     }
}
