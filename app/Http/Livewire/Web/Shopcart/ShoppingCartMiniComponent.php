<?php

namespace App\Http\Livewire\Web\Shopcart;

use Livewire\Component;

class ShoppingCartMiniComponent extends Component
{

    protected $listeners = [
        'updateMiniCart' => 'render'
    ];


    public function render()
    {
       
        return view('livewire.web.shopcart.shopping-cart-mini-component');
    }
}
