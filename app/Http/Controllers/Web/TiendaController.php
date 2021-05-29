<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tienda;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index()
    {
        $tiendas = Tienda::where(['status' => 2])->get();

        return view('web.tienda.index', compact('tiendas'));
    }

    public function show(Tienda $tienda)
    {
       return view('web.tienda.show', compact('tienda'));
    }
}
