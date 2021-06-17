<?php

namespace App\Http\Livewire\Web\Tienda;

use App\Models\Tienda;
use Livewire\Component;
use Livewire\WithPagination;

class TiendasComponent extends Component
{
      /* PAGINACION REACTIVA */
      use WithPagination;
      /* VARIABLES SORT BY  */
      public $sortBy='id';
      public $sortDirection = 'asc';
      public $perPage = 5;
      public $search = '';

    public function render()
    {

        $tiendas = Tienda::query()
            ->where(['status' => 2])
            ->search($this->search)
            ->orderBy($this->sortBy, $this->sortDirection)
            ->paginate($this->perPage);


        return view('livewire.web.tienda.tiendas-component', compact('tiendas'));
    }

     /* ACTUALIZANDO DATA EN LA BUSQUEDA */
     public function updatingSearch()
     {
         $this->resetPage();
     }
}
