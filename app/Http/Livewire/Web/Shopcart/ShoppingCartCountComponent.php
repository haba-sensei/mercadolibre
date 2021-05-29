<?php

namespace App\Http\Livewire\Web\Shopcart;

use Livewire\Component;

class ShoppingCartCountComponent extends Component
{

    protected $listeners = [
        'updateMobileCart' => 'render'
    ];


    public function render()
    {
        return view('livewire.web.shopcart.shopping-cart-count-component');
    }
}
