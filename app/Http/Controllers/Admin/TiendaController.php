<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tienda;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Membresia;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\ImageManagerStatic as ImagenCompress;

class TiendaController extends Controller
{
     /* METODO PROTECTED */
     protected $HomeController;

     /* {{ METODO CONSTRUCTOR | DATA MENU LATERAL }} */
     public function __construct(HomeController $HomeController)
     {
         $this->HomeController = $HomeController;
     }

     /* {{ METODO INDEX | DATA MENU LATERAL }} */
     public function index()
     {
         $pageName= 'tienda';
         $activeMenu = $this->HomeController->activeMenu($pageName);

         return view('admin.tienda.index',[
             'side_menu' => $this->HomeController->sideMenu(),
             'first_page_name' => $activeMenu['first_page_name'],
             'second_page_name' => $activeMenu['second_page_name'],
             'third_page_name' => $activeMenu['third_page_name'],
             'ruta' => 'listar',
             'page_name' => $pageName,
             'theme' => $this->HomeController->omega(),
             'layout' => 'content',
             'titulo' => $this->HomeController->sideMenu(),
             'userauth' => Auth::user()
         ] );
     }

     /* {{ METODO STORE | CREATE TIENDA | VALIDACION | MENSAJE }} */
    public function store(Request $request)
    {

        $filename =  Str::random(32).".".File::extension($request->file('file')->getClientOriginalName());
        $url = "tiendas/".$filename;
        $tienda_url =  public_path('storage/tiendas/'.$filename);

        ImagenCompress::make($request->file('file'))
        ->resize(300, 300)
        ->save($tienda_url);
        /* creacion de datos */

        Tienda::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'resumen' => $request->resumen,
            'email' => $request->email,
            'phone' => $request->phone,
            'url_perfil' => $url,
            'status' => 1,
            'user_id' => auth()->user()->id
        ]);

       /* retorno a la vista tienda index */
       return redirect()->route('admin.tienda.index')
       ->with([
           'info' => 'La tienda fue solicitada con éxito',
           'color' => '#63b716'
       ]);

    }

    public function update(Tienda $tienda){

        $tienda->update([
            'status' => 2
        ]);

        $fecha_gratuito = date('Y-m-d', strtotime(date('Y-m-d')."+ 1 year" ));
        $fecha_inicio = date('Y-m-d');

        Membresia::create([
            'tienda_id' => $tienda->id,
            'plan_id' => 2,
            'started_at' => $fecha_inicio ,
            'finish_at' => $fecha_gratuito
        ]);

        $owner = User::find($tienda->user_id);
        $owner->removeRole('Comprador');
        $owner->assignRole('Vendedor');


        return redirect()->route('dash')
        ->with([
            'info' => 'la Tienda se Aprobó con éxito',
            'color' => '#63b716'
        ]);
    }
}
