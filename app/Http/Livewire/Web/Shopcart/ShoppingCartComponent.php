<?php

namespace App\Http\Livewire\Web\Shopcart;

use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class ShoppingCartComponent extends Component
{

    public function increseQty($rowId, $rowProdId)
    {
        $product = FacadesCart::get($rowId);
        $search = Product::find($rowProdId);

        if($product->qty < $search->stock){

            $qty = $product->qty + 1;
            FacadesCart::update($rowId, $qty);

        }else {
            session()->flash('info', 'El Producto ya no tiene Stock' );
        }


    }

    public function decreseQty($rowId)
    {
        $product = FacadesCart::get($rowId);
        $qty = $product->qty - 1;
        FacadesCart::update($rowId, $qty);
    }

    public function destroy($rowId)
    {
        FacadesCart::remove($rowId);
        session()->flash('info', 'El Producto se removio con éxito' );
        // $this->dispatchBrowserEvent('carrito-updated');
        $this->emit('updateMiniCart');
    }


    public function render()
    {
        return view('livewire.web.shopcart.shopping-cart-component');
    }
}
