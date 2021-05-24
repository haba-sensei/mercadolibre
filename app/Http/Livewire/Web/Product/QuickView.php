<?php

namespace App\Http\Livewire\Web\Product;

use App\Models\Product;
use Livewire\Component;
use Cart;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class QuickView extends Component
{
    public $modelId;
    public $name;
    public $slug;
    public $image;
    public $extract;
    public $amount;
    public $category;
    public $tags;

    protected $listeners = [
        'getModelId'
    ];

    public function store($product_id, $product_name, $product_price){

        FacadesCart::add($product_id, $product_name, 1, $product_price)
        ->associate('App\Models\Product');

        return redirect()->route('web.shopcart.index')
        ->with([
            'info' => 'El Producto se agrego con éxito',
            'color' => '#63b716'
        ]);

    }

    public function getModelId($modelId){
        $this->modelId = $modelId;

        $model = Product::with('tags')->get()->find($this->modelId);

        $this->name = $model->name;
        $this->slug = $model->slug;
        $this->image = $model->image;
        $this->extract = $model->extract;
        $this->amount = $model->amount;
        $this->category = $model->category;
        $this->tags = $model->tags;
    }



    public function render()
    {
        return view('livewire.web.product.quick-view');
    }
}
