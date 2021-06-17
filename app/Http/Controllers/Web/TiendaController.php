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
        return view('web.tienda.index');
    }

    public function show(Tienda $tienda)
    {
       return view('web.tienda.show', compact('tienda'));
    }
}
