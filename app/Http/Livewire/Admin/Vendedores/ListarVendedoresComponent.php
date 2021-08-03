<?php

namespace App\Http\Livewire\Admin\Vendedores;

use App\Models\Membresia;
use App\Models\Tienda;
use Livewire\Component;
use Livewire\WithPagination;

class ListarVendedoresComponent extends Component
{
    /* PAGINACION REACTIVA */
    use WithPagination;
    /* VARIABLES SORT BY  */
    public $sortBy='name';
    public $sortDirection = 'asc';
    public $perPage = 2;
    public $search;


    public function render()
    {
        $vendedores =  Tienda::query()
        ->where(['status' => 2])
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->join('membresias', 'tiendas.id', '=', 'membresias.tienda_id')
        ->join('planes', 'planes.id', '=', 'membresias.plan_id')
        ->paginate($this->perPage);




        return view('livewire.admin.vendedores.listar-vendedores-component', compact('vendedores'));
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
