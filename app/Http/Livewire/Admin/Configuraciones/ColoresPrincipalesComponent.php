<?php

namespace App\Http\Livewire\Admin\Configuraciones;

use App\Models\ConfigData;
use Livewire\Component;

class ColoresPrincipalesComponent extends Component
{
    public function render()
    {
        $config_color = ConfigData::find(1);
        return view('livewire.admin.configuraciones.colores-principales-component', compact('config_color'));
    }
}
