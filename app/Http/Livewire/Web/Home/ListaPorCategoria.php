<?php

namespace App\Http\Livewire\Web\Home;

use App\Models\Category;
use App\Models\OrderCategory;
use App\Models\Product;
use Livewire\Component;

class ListaPorCategoria extends Component
{
    public function render()
    {
        $orderCatId = OrderCategory::pluck('catID');
        $categoriasF = Category::all()->random(4);
        $productosF = Product::whereIn('category_id', $orderCatId)->with(['category'])->get();

        return view('livewire.web.home.lista-por-categoria', [
            'productosF' => $productosF,
            'categoriasF' => $categoriasF,
            'orderCatId' => $orderCatId
        ]);
    }
}
