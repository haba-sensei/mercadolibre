<?php

namespace App\Http\Livewire\Web\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class TableProduct extends Component
{

    /* PAGINACION REACTIVA */
    use WithPagination;
    /* VARIABLES SORT BY  */
    public $sortBy='id';
    public $sortDirection = 'asc';
    public $perPage = 16;
    public $search = '';
    public $selectedItem;

    public function store($product_id, $product_name, $product_price){

        FacadesCart::add($product_id, $product_name, 1, $product_price)
        ->associate('App\Models\Product');

        session()->flash('info', 'El Producto se agrego con éxito' );
        $this->dispatchBrowserEvent('carrito-updated');
        $this->emit('updateMiniCart');
        // return redirect()->route('web.shopcart.index');

    }



    public function selectItem($itemId){
        $this->selectedItem = $itemId;
        $this->emit('getModelId', $this->selectedItem);
        $this->dispatchBrowserEvent('openModal');

    }


    public function render()
    {
        $products = Product::query()
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);

        return view('livewire.web.product.table-product', compact('products'));
    }
}
