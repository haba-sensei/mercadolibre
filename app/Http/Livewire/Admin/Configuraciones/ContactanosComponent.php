<?php

namespace App\Http\Livewire\Admin\Configuraciones;

use App\Models\ConfigData;
use Livewire\Component;

class ContactanosComponent extends Component
{
    public function render()
    {
        $config_contactanos = ConfigData::find(1);
        return view('livewire.admin.configuraciones.contactanos-component', compact('config_contactanos'));
    }
}
