<?php

namespace App\Http\Livewire\Web\Product;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class SidebarProduct extends Component
{
    public function render()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('livewire.web.product.sidebar-product', compact('categories', 'tags'));
    }
}
