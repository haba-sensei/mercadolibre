<?php

namespace App\Http\Livewire\Admin\Configuraciones;

use App\Models\User;
use Livewire\Component;

class ConfiguracionesComponent extends Component
{
    public $config_info = "titulo_config";

    public function render()
    {
        $user_perfil = User::find(auth()->user()->id);

        return view('livewire.admin.configuraciones.configuraciones-component', compact('user_perfil'));
    }


 
}
