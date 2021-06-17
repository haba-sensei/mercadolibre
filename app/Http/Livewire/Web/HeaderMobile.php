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
        $background = "#42707c";
        $mobilbackground = "#42707c";
        $mobilcolor = "#000";

        return view('livewire.web.header-mobile', compact(
            'color',
            'background',
            'mobilbackground',
            'mobilcolor'
        ));
    }
}
