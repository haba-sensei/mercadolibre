<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\ImageManagerStatic as ImagenCompress;

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
            'theme' => $this->HomeController->omega(),
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
            'theme' => $this->HomeController->omega(),
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
            'slug' => 'required|unique:categories',
            'file' => 'required|image|max:2048'
         ]);
            $filename =  Str::random(32).".".File::extension($request->file('file')->getClientOriginalName());
            $url = "category/".$filename;
            $product_url =  public_path('storage/category/'.$filename);

            ImagenCompress::make($request->file('file'))
            ->resize(1170, 245)
            ->save($product_url);
        /* creacion de datos */

            $categories = Category::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'cat_img' => $url
            ]);



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
             'theme' => $this->HomeController->omega(),
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
            'theme' => $this->HomeController->omega(),
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
            'slug' => "required|unique:categories,slug,$category->id",
            'file' => 'image|max:2048'
        ]);

         /* update */
        $category->update($request->all());

        if($request->file('file')){
            $filename =  Str::random(32).".".File::extension($request->file('file')->getClientOriginalName());
            $url = "category/".$filename;
            $product_url =  public_path('storage/category/'.$filename);

            ImagenCompress::make($request->file('file'))
            ->resize(1170, 245)
            ->save($product_url);

            if($category->cat_img){
                Storage::disk('public_upload')->delete($category->cat_img);

                $category->cat_img = $url;
                $category->save();

            }
        }

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
