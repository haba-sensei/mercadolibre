<?php

namespace App\Http\Livewire\Web\Home;

use App\Models\Category;
use App\Models\OrderCategory;
use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
class ListaPorCategoria extends Component
{
    public $selectedItem;

    public function store($product_id, $product_name, $product_price){

        FacadesCart::add($product_id, $product_name, 1, $product_price)
        ->associate('App\Models\Product');

        foreach(FacadesCart::content() as $item) {

            $search = Product::find($product_id);

                if($item->qty <= $search->stock){

                    $info = "PRODUCTO AGREGADO AL CARRITO";
                    $color = "#1c3faa";

                }else {

                    $qty = $search->stock;
                    FacadesCart::update($item->rowId, $qty);
                    $info = "PRODUCTO SIN STOCK";
                    $color = "#FF0000";
                }

        }

        $this->emit('updateMiniCart');
        $this->emit('updateMobileCart');
        $this->dispatchBrowserEvent('carrito-updated', ['info' => $info, 'color' => $color]);


    }

    public function selectItem($itemId){

        $this->selectedItem = $itemId;
        $this->emit('getModelId', $this->selectedItem);
        $this->dispatchBrowserEvent('openModal');

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
