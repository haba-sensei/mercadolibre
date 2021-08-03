<?php

namespace App\Http\Livewire\Admin\Tienda;

use App\Models\Tienda;
use Livewire\Component;

class CrearTiendaComponent extends Component
{
    public function render()
    {
         $tienda =  Tienda::where(['user_id' => auth()->user()->id])->first();
 
        return view('livewire.admin.tienda.crear-tienda-component', compact('tienda'));
    }
}
