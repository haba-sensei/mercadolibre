<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class ModalProd extends Component
{


    public function render()
    {
        return view('admin.products.index');
    }

    public function delete($id)
    {
        if($id){
            // Product::where('id', $id)->delete();
            return view('admin.products.index');
        }
    }

}
