<?php

namespace App\Http\Livewire\Admin\Perfil;

use App\Models\User;
use Livewire\Component;

class CambiarPasswordComponent extends Component
{
    public function render()
    {
        $info_pass_personal = User::find(auth()->user()->id);

        return view('livewire.admin.perfil.cambiar-password-component', compact('info_pass_personal'));
    }
}
