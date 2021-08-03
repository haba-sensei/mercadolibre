<?php

namespace App\Http\Livewire\Admin\Membresia;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class HistorialPagoMembresiaComponent extends Component
{
    use WithPagination;
    /* VARIABLES SORT BY  */
    public $sortBy='id';
    public $sortDirection = 'asc';
    public $perPage = 2; 

    public function render()
    {

        $historiales = DB::table('membresias_pagos')
        ->where('membresia_id', Auth::user()->tienda->id)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);


        return view('livewire.admin.membresia.historial-pago-membresia-component', compact('historiales'));
    }

    /* SORT BY $campo */
    public function sortBy($campo)
    {
        if ($this->sortDirection == 'asc'){
            $this->sortDirection = 'desc';
        }else{
            $this->sortDirection= 'asc';
        }

        return $this->sortBy = $campo;
    }

    /* ACTUALIZANDO DATA EN LA BUSQUEDA */
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
