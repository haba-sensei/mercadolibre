<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        ['user_id' =>  auth()->user()->id]

        if(){
            
        }

        $products =  Product::query()
        ->where()
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);



        $autorizacion =  User::query()
        ->where(['user_id' => 1]);

        return view('livewire.admin.products.tabla-component',
        compact('products', 'autorizacion'));
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
