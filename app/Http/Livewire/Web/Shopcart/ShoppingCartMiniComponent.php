<?php

namespace App\Http\Livewire\Web\Shopcart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Support\Facades\Auth;

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

    public function checkout()
    {
        if(Auth::check())
        {
            return redirect()->route('web.checkout.index');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function render()
    {

        return view('livewire.web.shopcart.shopping-cart-mini-component');
    }
}
