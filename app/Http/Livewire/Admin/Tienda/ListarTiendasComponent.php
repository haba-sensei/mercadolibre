<?php

namespace App\Http\Livewire\Admin\Tienda;

use App\Models\Tienda;
use Livewire\Component;

class ListarTiendasComponent extends Component
{
    public function render()
    {
        $solicitudes =  Tienda::where(['status' => 1])->get();

        return view('livewire.admin.tienda.listar-tiendas-component', compact('solicitudes'));
    }
}
