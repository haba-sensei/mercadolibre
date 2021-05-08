<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
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

    /* RENDER COMPONENT TABLA  */
    public function render()
    {
        $products =  Product::query()
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);

        return view('livewire.admin.products.tabla-component',
        compact('products'));
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
