<?php

namespace App\Http\Livewire\Web;

use App\Models\Category;
use Livewire\Component;

class MenuMobile extends Component
{
    public function render()
    {
        $color = "#f8f9fa";
        $background = "#1c3faa";
        $mobilbackground = "#fcb800";
        $mobilcolor = "#000";
        $categories = Category::all();

        return view('livewire.web.menu-mobile', compact(
            'color',
            'background',
            'mobilbackground',
            'mobilcolor',
            'categories'
        ));
    }
}
