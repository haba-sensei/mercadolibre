<?php

namespace App\Http\Livewire\Web\Home;

use App\Models\Category;
use App\Models\OrderCategory;
use App\Models\Product;
use Livewire\Component;
use Cart;
class ListaPorCategoria extends Component
{


    public $selectedItem;

    public function selectItem($itemId){

        $this->selectedItem = $itemId;
        $this->emit('getModelId', $this->selectedItem);
        $this->dispatchBrowserEvent('openModal');

    }

    public function store($product_id, $product_name, $product_price){

        Cart::add($product_id, $product_name, 1, $product_price)
        ->associate('App\Models\Product');

        return redirect()->route('web.shopcart.index')
        ->with([
            'info' => 'El Producto se agrego con éxito',
            'color' => '#63b716'
        ]);

    }

    public function render()
    {
        $orderCatId = OrderCategory::pluck('catID');
        $categoriasF = Category::all();
        $productosF = Product::whereIn('category_id', $orderCatId)->with(['category'])->get();

        return view('livewire.web.home.lista-por-categoria', [
            'productosF' => $productosF,
            'categoriasF' => $categoriasF,
            'orderCatId' => $orderCatId
        ]);
    }
}
