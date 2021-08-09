<?php

namespace App\Http\Livewire\Admin\Perfil;

use App\Models\User;
use Livewire\Component;

class MiPerfilComponent extends Component
{
    public $perfil_info = "info_personal";


    public function render()
    {
        $user_perfil = User::find(auth()->user()->id);
        
        return view('livewire.admin.perfil.mi-perfil-component', compact('user_perfil') );
    }
}
