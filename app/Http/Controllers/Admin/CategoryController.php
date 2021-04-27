<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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
        $pageName= 'categories';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.categories.index',[
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'listar',
            'page_name' => $pageName,
            'theme' => 'light',
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()
        ] );

    }

    /* {{ METODO CREATE | DATA MENU LATERAL }} */
    public function create()
    {
        $pageName= 'categories';
        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.categories.create', [
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'agregar',
            'page_name' => $pageName,
            'theme' => 'light',
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()

        ]);
    }

    /* {{ METODO STORE | CREATE CATEGORY | VALIDACION | MENSAJE }} */
    public function store(Request $request)
    {
        /* validacion de formulario */
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
         ]);

        /* creacion de datos */
         $categories = Category::create($request->all());

         return redirect()->route('admin.categories.edit', $categories)->with(['info' => 'La categoria se creó con éxito', 'color' => '#63b716']);

    }

    /* {{ METODO SHOW | DATA MENU LATERAL | INSTANCIA CATEGORY }} */
    public function show(Category $category)
    {
        $pageName= 'categories';

         $activeMenu = $this->HomeController->activeMenu($pageName);

         return view('admin.categories.show',[
             'side_menu' => $this->HomeController->sideMenu(),
             'first_page_name' => $activeMenu['first_page_name'],
             'second_page_name' => $activeMenu['second_page_name'],
             'third_page_name' => $activeMenu['third_page_name'],
             'ruta' => 'listar',
             'page_name' => $pageName,
             'theme' => 'light',
             'layout' => 'content',
             'titulo' => $this->HomeController->sideMenu(),
             'userauth' => Auth::user()
         ], compact('tag') );
    }

    /* {{ METODO EDIT | DATA MENU LATERAL | INSTANCIA CATEGORY }} */
    public function edit(Category $category)
    {
        /* variable nombre pagina */
        $pageName= 'categories';

        /* menu lateral activo */
        $activeMenu = $this->HomeController->activeMenu($pageName);

        /* retorno | menu lateral | compact category */
        return view('admin.categories.edit', [
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'page_name' => $pageName,
            'ruta' => 'editar',
            'theme' => 'light',
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()

        ], compact('category'));
    }

    /* {{ METODO DE UPDATE | VALIDACION | MENSAJE | REDIRECCION  }} */
    public function update(Request $request, Category $category)
    {
         /* validacion de formulario ignorando actualizar del slug por ID */
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categories,slug,$category->id"
        ]);

         /* update */
        $category->update($request->all());

        /* redirect a la vista edit */
        return redirect()->route('admin.categories.edit', $category)->with(['info' => 'La categoria se actualizo con éxito', 'color' => '#1c3faa']);
    }

    /* {{ METODO DESTROY | REDIRECCION }} */
    public function destroy(Category $category)
    {
        /* delete id instancia category */
         $category->delete();

        /* retorno a la vista category index */
         return redirect()->route('admin.categories.index')
                          ->with([
                              'info' => 'La categoria se elimino con éxito',
                              'color' => '#f44336'
                          ]);
    }
}
