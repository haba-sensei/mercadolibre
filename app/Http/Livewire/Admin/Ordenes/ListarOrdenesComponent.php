<?php

namespace App\Http\Livewire\Admin\Ordenes;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ListarOrdenesComponent extends Component
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
        $compras =  Order::query()
                    ->where(['user_id' => Auth::user()->id])
                    ->search($this->search)
                    ->orderBy($this->sortBy, $this->sortDirection)
                    ->paginate($this->perPage);
        

        return view('livewire.admin.ordenes.listar-ordenes-component', compact('compras'));
    }

     /* ACTUALIZANDO DATA EN LA BUSQUEDA */
     public function updatingSearch()
     {
         $this->resetPage();
     }
}
