<?php

namespace App\Http\Livewire\Admin\Perfil;

use App\Models\User;
use Livewire\Component;

class InfoPersonalComponent extends Component
{
    public function render()
    {
        $info_personal = User::find(auth()->user()->id);

        return view('livewire.admin.perfil.info-personal-component', compact('info_personal'));
    }
}
