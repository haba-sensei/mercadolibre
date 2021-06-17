<?php

namespace App\Http\Livewire\Web\Product;

use App\Models\Product;
use App\Models\Tienda;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;

class TableProduct extends Component
{
    protected $listeners = [
        'searching'
     ];
 
    /* PAGINACION REACTIVA */
    use WithPagination;
    /* VARIABLES SORT BY  */
    public $sortBy='id';
    public $sortDirection = 'asc';
    public $perPage = 16;
    public $search = '';
    public $selectedItem;
    public $category;

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



    public function render( )
    {
        $category = $this->category;

        $products = Product::where(['status' => 2])
                            ->search($category ? $category[0]->id : $this->search )
                            ->orderBy($this->sortBy, $this->sortDirection)
                            ->paginate($this->perPage);

        return view('livewire.web.product.table-product', compact('products'));
    }
}
