<?php

namespace App\Http\Livewire\Admin\Vendedores;

use App\Models\Tienda;
use Livewire\Component;

class ListarVendedoresComponent extends Component
{
    public function render()
    {
        $vendedores =  Tienda::where(['status' => 2])->get();

        return view('livewire.admin.vendedores.listar-vendedores-component', compact('vendedores'));
    }
}
