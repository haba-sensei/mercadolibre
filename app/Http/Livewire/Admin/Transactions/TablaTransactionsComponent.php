<?php

namespace App\Http\Livewire\Admin\Transactions;

use App\Models\Pagos;
use Livewire\Component;
use Livewire\WithPagination;

class TablaTransactionsComponent extends Component
{
    /* PAGINACION REACTIVA */
    use WithPagination;
    /* VARIABLES SORT BY  */
    public $sortBy='fecha_at';
    public $sortDirection = 'asc';
    public $perPage = 5;
    public $search = '';


    public function render()
    {
        $pagos =  Pagos::query()
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);


        return view('livewire.admin.transactions.tabla-transactions-component', compact('pagos'));
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
