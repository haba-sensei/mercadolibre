<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\ImageManagerStatic as ImagenCompress;

class MitiendaController extends Controller
{
    /* METODO PROTECTED */
    protected $HomeController;

    /* {{ METODO CONSTRUCTOR | DATA MENU LATERAL }} */
    public function __construct(HomeController $HomeController)
    {
        $this->HomeController = $HomeController;
    }

    public function index()
    {
        if(isset(auth()->user()->tienda->id)){
            $pageName= 'mitienda';
            $activeMenu = $this->HomeController->activeMenu($pageName);
            $mitienda = Tienda::find(auth()->user()->tienda->id);

            return view('admin.mitienda.index',[
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
            ], compact('mitienda') );
        }else {

            return redirect()->route('admin.tienda.index')->with(['info' => 'Usted no posee una tienda activa debe registrar una tienda', 'color' => '#1c3faa']);

        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tienda $mitienda)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tiendas,slug,$mitienda->id",
            'email' => "required|unique:tiendas,email,$mitienda->id",
            'phone' => 'required',
            'resumen' => 'required'
        ]);

           /* update */
           $mitienda->update($request->all());

           if($request->file('file')){
               $filename =  Str::random(32).".".File::extension($request->file('file')->getClientOriginalName());
               $url = "tiendas/".$filename;
               $mitienda_url =  public_path('storage/tiendas/'.$filename);

               ImagenCompress::make($request->file('file'))
               ->resize(600, 600)
               ->save($mitienda_url);

               if($mitienda->url_perfil){
                   Storage::disk('public_upload')->delete($mitienda->url_perfil);

                   $mitienda->url_perfil = $url;
                   $mitienda->save();

               }
           }
           /* redirect a la vista edit */
           return redirect()->route('admin.mitienda.index')->with(['info' => 'La tienda se actualizo con éxito', 'color' => '#1c3faa']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
