<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
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
        $tags = Tag::all();
        $pageName= 'tags';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.tags.index',[
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'listar',
            'page_name' => $pageName,
            'theme' => 'light',
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu()
        ], compact('tags') ); 
        
    }

    /* {{ METODO CREATE | DATA MENU LATERAL }} */  
    public function create()
    {
        $pageName = 'tags';
        $colors = [
            'red' => 'Color Rojo',
            'yellow' => 'Color Amarillo',
            'blue' => 'Color Azul',
            'indigo' => 'Color Indigo',
            'purple' => 'Color Morado',
            'pink' => 'Color Rosado'
        ];
 
        $activeMenu = $this->HomeController->activeMenu($pageName);
  
        return view('admin.tags.create',[
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'agregar',
            'page_name' => $pageName,
            'theme' => 'light',
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu()
        ], compact('colors') ); 
    }

    /* {{ METODO STORE | CREATE TAG | VALIDACION | MENSAJE }} */  
    public function store(Request $request)
    {
       /* validacion de formulario */
       $request->validate([
        'name' => 'required',
        'slug' => 'required|unique:tags',
        'color' => 'required'
       ]);

       $tag =Tag::create($request->all());

        return redirect()->route('admin.tags.edit', compact('tag'))->with(['info' => 'La etiqueta se creó con éxito', 'color' => '#63b716']);
    }

    /* {{ METODO SHOW | DATA MENU LATERAL | INSTANCIA TAG }} */  
    public function show(Tag $tag)
    {
        $pageName= 'tags';
 
         $activeMenu = $this->HomeController->activeMenu($pageName);
   
         return view('admin.tags.show',[
             'side_menu' => $this->HomeController->sideMenu(),
             'first_page_name' => $activeMenu['first_page_name'],
             'second_page_name' => $activeMenu['second_page_name'],
             'third_page_name' => $activeMenu['third_page_name'],
             'ruta' => 'listar',
             'page_name' => $pageName,
             'theme' => 'light',
             'layout' => 'content',
             'titulo' => $this->HomeController->sideMenu()
         ], compact('tag') ); 
    }

    /* {{ METODO EDIT | DATA MENU LATERAL | INSTANCIA TAG }} */  
    public function edit(Tag $tag)
    {
        $pageName= 'tags';
        /* array colors para el partials include de form en la vista edit */
        $colors = [
            'red' => 'Color Rojo',
            'yellow' => 'Color Amarillo',
            'blue' => 'Color Azul',
            'indigo' => 'Color Indigo',
            'purple' => 'Color Morado',
            'pink' => 'Color Rosado'
        ];

         $activeMenu = $this->HomeController->activeMenu($pageName);
   
         return view('admin.tags.edit',[
             'side_menu' => $this->HomeController->sideMenu(),
             'first_page_name' => $activeMenu['first_page_name'],
             'second_page_name' => $activeMenu['second_page_name'],
             'third_page_name' => $activeMenu['third_page_name'],
             'ruta' => 'editar',
             'page_name' => $pageName,
             'theme' => 'light',
             'layout' => 'content',
             'titulo' => $this->HomeController->sideMenu()
         ], compact('tag', 'colors') );
    }

    /* {{ METODO DE UPDATE | VALIDACION | MENSAJE | REDIRECCION  }} */   
    public function update(Request $request, Tag $tag)
    {
         /* validacion de formulario ignorando actualizar del slug por ID */
         $request->validate([
            'name' => 'required',
            'slug' => "required|unique:tags,slug,$tag->id",
            'color' => "required"
        ]);
        
         /* update */
        $tag->update($request->all()); 
        
        /* redirect a la vista edit */
        return redirect()->route('admin.tags.edit', $tag)->with(['info' => 'La etiqueta se actualizo con éxito', 'color' => '#1c3faa']); 
    }

    /* {{ METODO DESTROY | REDIRECCION }} */ 
    public function destroy(Tag $tag)
    {
       /* delete id instancia tag */
       $tag->delete();

       /* retorno a la vista tag index */
        return redirect()->route('admin.tags.index')
                         ->with([
                             'info' => 'La etiqueta se elimino con éxito',
                             'color' => '#f44336'
                         ]);
    }
}
