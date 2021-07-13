<?php

namespace App\Http\Livewire\Admin\Coupons;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;

class TablaComponent extends Component
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
        $coupons =  Coupon::query()
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);

        return view('livewire.admin.coupons.tabla-component',
        compact('coupons'));
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
