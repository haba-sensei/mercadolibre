<?php

namespace App\Http\Livewire\Web;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class HeaderDesk extends Component
{

    public function render()
    {
        $color = "#f8f9fa";
        $background = "#42707c"; 
        $categories = Category::all();

        return view('livewire.web.header-desk', compact(
            'color',
            'background',
            'categories'
        ));
    }
}
