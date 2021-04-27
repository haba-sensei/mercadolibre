<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class TablaComponent extends Component
{
     /* PAGINACION REACTIVA */
     use WithPagination;
     /* VARIABLES SORT BY  */
     public $sortBy='id';
     public $sortDirection = 'asc';
     public $perPage = 3;
     public $search;


    public function render()
    {
        $role =  Role::query()
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);

        return view('livewire.admin.role.tabla-component',
        compact('role'));
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
