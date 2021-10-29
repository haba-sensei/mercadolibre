<?php

namespace App\Http\Livewire\Admin\Configuraciones;

use App\Models\ConfigData;
use Livewire\Component;
use Illuminate\Http\Request;

class TituloComponent extends Component
{
    public function render()
    {
        $info_titulo = ConfigData::find(1);

        return view('livewire.admin.configuraciones.titulo-component', compact('info_titulo'));
    }


}
