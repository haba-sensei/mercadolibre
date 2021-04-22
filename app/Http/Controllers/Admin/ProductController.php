<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Flutter;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    /* METODO PROTECTED */
    protected $HomeController;

    /* {{ METODO CONSTRUCTOR | DATA MENU LATERAL }} */
    public function __construct(HomeController $HomeController)
    {
        $this->HomeController = $HomeController;


    }

    public function getAll($id){

        $product = Product::with('image', 'category', 'tags')
                     ->where('status', 2)
                     ->where('user_id', $id)
                     ->get();

        return response()->json(array('last_page' => 6, 'data'=>$product ));

    }

     /* {{ METODO INDEX | DATA MENU LATERAL }} */
     public function index(Request $request)
     {

        $tokenFlutter = Flutter::find(1)->access_token;
        $products = Product::all();
        $pageName= 'products';

         $activeMenu = $this->HomeController->activeMenu($pageName);

         return view('admin.products.index',[
             'side_menu' => $this->HomeController->sideMenu(),
             'first_page_name' => $activeMenu['first_page_name'],
             'second_page_name' => $activeMenu['second_page_name'],
             'third_page_name' => $activeMenu['third_page_name'],
             'ruta' => 'listar',
             'page_name' => $pageName,
             'theme' => 'light',
             'layout' => 'content',
             'titulo' => $this->HomeController->sideMenu()
         ], compact('products', 'tokenFlutter'));
     }

     /* {{ METODO CREATE | DATA MENU LATERAL }} */
     public function create()
     {
         $pageName= 'products';
         $activeMenu = $this->HomeController->activeMenu($pageName);

         return view('admin.products.create', [
             'side_menu' => $this->HomeController->sideMenu(),
             'first_page_name' => $activeMenu['first_page_name'],
             'second_page_name' => $activeMenu['second_page_name'],
             'third_page_name' => $activeMenu['third_page_name'],
             'ruta' => 'agregar',
             'page_name' => $pageName,
             'theme' => 'light',
             'layout' => 'content',
             'titulo' => $this->HomeController->sideMenu()

         ]);
     }

     /* {{ METODO STORE | CREATE POST | VALIDACION | MENSAJE }} */
     public function store(Request $request)
     {
         //
     }

     /* {{ METODO SHOW | DATA MENU LATERAL | INSTANCIA POST }} */
     public function show(Product $product)
     {
         $pageName= 'products';
         $activeMenu = $this->HomeController->activeMenu($pageName);

         return view('admin.products.show', [
             'side_menu' => $this->HomeController->sideMenu(),
             'first_page_name' => $activeMenu['first_page_name'],
             'second_page_name' => $activeMenu['second_page_name'],
             'third_page_name' => $activeMenu['third_page_name'],
             'ruta' => 'agregar',
             'page_name' => $pageName,
             'theme' => 'light',
             'layout' => 'content',
             'titulo' => $this->HomeController->sideMenu()

         ]);
     }

     /* {{ METODO EDIT | DATA MENU LATERAL | INSTANCIA POST }} */
     public function edit(Product $product)
     {
         /* variable nombre pagina */
        $pageName= 'products';

        /* menu lateral activo */
        $activeMenu = $this->HomeController->activeMenu($pageName);

        /* retorno | menu lateral | compact category */
        return view('admin.products.edit', [
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'page_name' => $pageName,
            'ruta' => 'editar',
            'theme' => 'light',
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu()

        ], compact('product'));
     }

     /* {{ METODO DE UPDATE | VALIDACION | MENSAJE | REDIRECCION  }} */
     public function update(Request $request, Product $product)
     {
         //
     }

     /* {{ METODO DESTROY | REDIRECCION }} */
     public function destroy(Product $product)
     {
          /* delete id instancia category */
          $product->delete();

          /* retorno a la vista category index */
           return redirect()->route('admin.products.index')
                            ->with([
                                'info' => 'El Producto se elimino con éxito',
                                'color' => '#f44336'
                            ]);
     }
}
