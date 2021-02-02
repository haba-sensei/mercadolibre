<?php

namespace App\Http\Livewire\Admin\Tags;

use App\Models\Tag;
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
        $tags =  Tag::query()
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);
        
        return view('livewire.admin.tags.tabla-component',
        compact('tags'));
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
