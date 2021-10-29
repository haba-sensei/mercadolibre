<?php

namespace App\Http\Livewire\Admin\Configuraciones;

use App\Models\ConfigData;
use Livewire\Component;

class IconoFaviconComponent extends Component
{
    public $config_info;

    public function render()
    {
        $config_icono_fav = ConfigData::find(1);
 
        return view('livewire.admin.configuraciones.icono-favicon-component', compact('config_icono_fav'));
    }


}
