<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;


class TablaComponent extends Component
{
    /* PAGINACION REACTIVA */
    use WithPagination;
    /* VARIABLES SORT BY  */
    public $sortBy='name';
    public $sortDirection = 'asc';
    public $perPage = 5;
    public $search = '';

    /* RENDER COMPONENT TABLA  */ 
    public function render()
    {
        $categories =  Category::query()
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);
        
        return view('livewire.admin.categories.tabla-component',
        compact('categories'));
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
