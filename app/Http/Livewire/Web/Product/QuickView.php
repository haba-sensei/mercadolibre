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
    public $tiendaName;
    public $tiendaSlug;
    public $image;
    public $extract;
    public $amount;
    public $category;
    public $tags;
    public $count = 1;

    protected $listeners = [
        'getModelId'
    ];

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

    public function getModelId($modelId){
        $this->modelId = $modelId;

        $model = Product::with(['tags', 'tienda'])->get()->find($this->modelId);

        $this->name = $model->name;
        $this->slug = $model->slug;
        $this->tiendaName = $model->tienda->name;
        $this->tiendaSlug = $model->tienda->slug;
        $this->image = $model->image;
        $this->extract = $model->extract;
        $this->amount = $model->amount;
        $this->category = $model->category;
        $this->tags = $model->tags;

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
        return view('livewire.web.product.quick-view');
    }
}
