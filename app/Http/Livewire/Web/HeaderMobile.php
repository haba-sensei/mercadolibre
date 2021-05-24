<?php

namespace App\Http\Livewire\Web;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class HeaderMobile extends Component
{
    public function render()
    {

        $color = "#f8f9fa";
        $background = "#1c3faa";
        $mobilbackground = "#fcb800";
        $mobilcolor = "#000";

        return view('livewire.web.header-mobile', compact(
            'color',
            'background',
            'mobilbackground',
            'mobilcolor'
        ));
    }
}
