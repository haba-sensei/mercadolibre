<?php

namespace App\Http\Livewire\Admin\Membresia;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ResumenMembresiaComponent extends Component
{
    public function render()
    {

        $date = Carbon::parse(Auth::user()->tienda->membresia->finish_at)->locale('es');


        $dia_cad = $date->format('d');
        $mes_cad = $date->getTranslatedMonthName('m');
        $year_cad = $date->format('Y');

        $tienda_name = Auth::user()->tienda->name;
        $tienda_pic = Auth::user()->tienda->url_perfil;
        $user_name = Auth::user()->name;
        $tienda_mail = Auth::user()->tienda->email;
        $tienda_phone = Auth::user()->tienda->phone;



        return view('livewire.admin.membresia.resumen-membresia-component',
                compact(
                    'dia_cad',
                    'mes_cad',
                    'year_cad',
                    'tienda_name',
                    'tienda_pic',
                    'user_name',
                    'tienda_mail',
                    'tienda_phone'
                ));
    }
}
