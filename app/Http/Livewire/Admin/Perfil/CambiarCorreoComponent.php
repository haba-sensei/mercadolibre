<?php

namespace App\Http\Livewire\Admin\Perfil;

use App\Models\User;
use Livewire\Component;

class CambiarCorreoComponent extends Component
{
    public function render()
    {
        $info_mail_personal = User::find(auth()->user()->id);

        return view('livewire.admin.perfil.cambiar-correo-component', compact('info_mail_personal'));
    }
}
