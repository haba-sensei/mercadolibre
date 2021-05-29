<?php

namespace App\Http\Livewire\Web\Shopcart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class ShoppingCartMiniComponent extends Component
{

    protected $listeners = [
        'updateMiniCart' => 'render'
    ];

    public function destroy($rowId)
    {
        FacadesCart::remove($rowId);
        session()->flash('info', 'El Producto se removio con éxito' );
        // $this->dispatchBrowserEvent('carrito-updated');
        $this->emit('updateMiniCart');
    }

    public function render()
    {
        
        return view('livewire.web.shopcart.shopping-cart-mini-component');
    }
}
