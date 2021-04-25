<?php

namespace App\Http\Livewire\Admin\Users;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    /* PAGINACION REACTIVA */
    use WithPagination;
    /* VARIABLES SORT BY  */
    public $sortBy='name';
    public $sortDirection = 'asc';
    public $perPage = 5;
    public $search;

    public function render()
    {
        $users =  User::query()
        ->search($this->search)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);

        return view('livewire.admin.users.users-index',
        compact('users'));
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
