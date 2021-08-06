<?php

namespace App\Http\Livewire\Web\Product;

use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class SingleViewProductComponent extends Component
{

    public $count = 1;
    public $product_id_show;

    public function store($product_id, $product_name, $product_qty, $product_price){

        FacadesCart::add($product_id, $product_name, $product_qty, $product_price)
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
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('carrito-updated', ['info' => $info, 'color' => $color]);
        $this->count = 1;
    }



    public function increment()
    {

        $this->count++;
    }

    public function decrement($contador)
    {
        if($contador == 1){
            $this->count = 1;
        }else {
            $this->count--;
        }

    }


    public function render()
    {
        $product = Product::find($this->product_id_show);

        return view('livewire.web.product.single-view-product-component', compact('product'));
    }
}
