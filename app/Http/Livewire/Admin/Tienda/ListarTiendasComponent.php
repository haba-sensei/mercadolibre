<?php

namespace App\Http\Livewire\Admin\Tienda;

use App\Models\Tienda;
use Livewire\Component;
use Livewire\WithPagination;

class ListarTiendasComponent extends Component
{
     /* PAGINACION REACTIVA */
     use WithPagination;
     /* VARIABLES SORT BY  */
     public $sortBy='name';
     public $sortDirection = 'asc';
     public $perPage = 2;
     public $search = '';

    public function render()
    {
        $solicitudes =  Tienda::query()
        ->search($this->search)
        ->where(['status' => 1])
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);



        return view('livewire.admin.tienda.listar-tiendas-component', compact('solicitudes'));
    }

     /* SORT BY $campo */
     public function sortBy($campo)
     {
         if ($this->sortDirection == 'asc'){
             $this->sortDirection = 'desc';
         }else{
             $this->sortDirection= 'asc';
         }

         return $this->sortBy = $campo;
     }

     /* ACTUALIZANDO DATA EN LA BUSQUEDA */
     public function updatingSearch()
     {
         $this->resetPage();
     }
}
