<?php

namespace App\Http\Livewire\Admin\Membresia;

use App\Models\Tienda;
use Livewire\Component;
use Livewire\WithPagination;

class HistorialMembresiasComponent extends Component
{
    use WithPagination;
    /* VARIABLES SORT BY  */
    public $sortBy='name';
    public $sortDirection = 'asc';
    public $perPage = 2; 
    public $search = '';

    public function render()
    {
        $tiendas =  Tienda::query()
        ->search($this->search)
        ->where(['status' => '2'])
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);


        return view('livewire.admin.membresia.historial-membresias-component', compact('tiendas'));
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
