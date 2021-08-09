<?php

namespace App\Http\Livewire\Admin\Soporte;

use App\Models\User;
use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class ChatSoporteComponent extends Component
{
    /* PAGINACION REACTIVA */
    use WithPagination;
    public $message;
	public $allmessages;
	public $sender;
    public $search = '';
    public $perPage = 20;

    public function render()
    {
        $users=User::query()
        ->search($this->search)
        ->paginate($this->perPage);

    	$sender=$this->sender;
    	$this->allmessages;


        return view('livewire.admin.soporte.chat-soporte-component', compact('users','sender'));
    }

    public function mountdata()
    {
        if(isset($this->sender->id))
        {
              $this->allmessages=Message::where('user_id',auth()->id())->where('receiver_id',$this->sender->id)->orWhere('user_id',$this->sender->id)->where('receiver_id',auth()->id())->orderBy('id','asc')->get();

               $not_seen= Message::where('user_id',$this->sender->id)->where('receiver_id',auth()->id());
               $not_seen->update(['is_seen'=> true]);
        }

    }
    public function resetForm()
    {
    	$this->message='';
    }

    public function SendMessage()
    {
    	$data=new Message;
    	$data->message=$this->message;
    	$data->user_id=auth()->id();
    	$data->receiver_id=$this->sender->id;
    	$data->save();

    	$this->resetForm();


    }


    public function getUser($userId)
    {

       $user=User::find($userId);
       $this->sender=$user;
       $this->allmessages=Message::where('user_id',auth()->id())->where('receiver_id',$userId)->orWhere('user_id',$userId)->where('receiver_id',auth()->id())->orderBy('id','asc')->get();
    }

     /* ACTUALIZANDO DATA EN LA BUSQUEDA */
     public function updatingSearch()
     {
         $this->resetPage();
     }

}
