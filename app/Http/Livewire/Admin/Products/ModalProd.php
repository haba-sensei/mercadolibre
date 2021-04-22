<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class ModalProd extends Component
{


    public function render()
    {
        return view('livewire.admin.products.modal-prod');
    }

    public function delete($id)
    {
        if($id){
            Product::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }

}
