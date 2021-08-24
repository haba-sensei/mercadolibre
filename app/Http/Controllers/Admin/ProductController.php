<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Flutter;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\ImageManagerStatic as ImagenCompress;

class ProductController extends Controller
{

    /* METODO PROTECTED */
    protected $HomeController;

    /* {{ METODO CONSTRUCTOR | DATA MENU LATERAL }} */
    public function __construct(HomeController $HomeController)
    {
        $this->HomeController = $HomeController;


    }

    /* {{ METODO PARA FLUTTER API }} */
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



         if(isset(auth()->user()->tienda->id)){
            $tokenFlutter = Flutter::find(1)->access_token;
            $products = Product::where(['user_id' => auth()->user()->id])->get();
            $pageName= 'products';

            Cache::has('product') ? Cache::put('product', $products) : '';

             $activeMenu = $this->HomeController->activeMenu($pageName);
            return view('admin.products.index',[
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
            ], compact('products', 'tokenFlutter'));

         }else {

            return redirect()->route('admin.tienda.index')->with(['info' => 'Usted no posee una tienda activa debe registrar una tienda', 'color' => '#1c3faa']);

        }



     }

     /* {{ METODO CREATE | DATA MENU LATERAL }} */
     public function create()
     {
        /* METODO PLUCK UTILIZADO PARA CAMBIAR EL FORMATO DEL OBJETO A ESTA ESTRUCTURA

        {
            '1' => 'valor'
        }

        atributo o key => valor

        */
        $categories = Category::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');
        $tags_charged = [];


         $pageName= 'products';
         $activeMenu = $this->HomeController->activeMenu($pageName);

         return view('admin.products.create', [
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

         ], compact('categories', 'tags', 'tags_charged'));
     }

     /* {{ METODO STORE | CREATE PRODUCT | VALIDACION | MENSAJE }} */
      // Storage::put('products', $request->file('file'), 'public_upload');
    //   public function store(StoreProductsRequest $request)
     public function store(StoreProductsRequest $request)
     {
         $product = Product::create( $request->all() );

        //  $url = Storage::disk('public_upload')->put('products', $request->file('file'));

        $filename =  Str::random(32).".".File::extension($request->file('file')->getClientOriginalName());
        $url = "products/".$filename;
        $product_url =  public_path('storage/products/'.$filename);


        ImagenCompress::make($request->file('file'))
        ->resize(600, 600)
        ->save($product_url);

        $product->image()->create([
        'url' => $url
        ]);

        if ($request->hasFile('bulkfiles')){

            foreach ($request->file('bulkfiles') as $file) {

                $filename_bulk =  Str::random(32).".".File::extension($file->getClientOriginalName());
                $path = 'gallery/';
                $bulk_url = public_path('storage/gallery/'.$filename_bulk);

                ImagenCompress::make(file_get_contents($file))
                ->resize(600, 600)
                ->save($bulk_url);

                $product->gallery()->create([
                'url' => $path.$filename_bulk
                ]);

            }

        }

        if($request->tag_id){
            $product->tags()->attach($request->tag_id);
        }

        /* retorno a la vista category index */
        return redirect()->route('admin.products.edit', $product)
        ->with([
            'info' => 'El Producto se creo con éxito',
            'color' => '#63b716'
        ]);

     }

     /* {{ METODO SHOW | VISTA WEB | INSTANCIA PRODUCT }} */
     public function show(Product $product)
     {
        return view('web.products.show', compact('product'));
     }

     /* {{ METODO SHOW | VISTA WEB | INSTANCIA PRODUCT }} */
     public function showAll()
     {
        $products = Product::where(['status' => 2])->get();
        return view('web.products.showAll', compact('products'));
     }

     /* {{ METODO SHOW | VISTA WEB | INSTANCIA PRODUCT }} */
     public function showCat(Category $category)
     {
        $category = Category::find($category);
        return view('web.products.showCat', compact('category'));
     }

     /* {{ METODO SHOW | VISTA WEB | INSTANCIA PRODUCT }} */
     public function showTag(Tag $tag)
     {
         $tag = Tag::find($tag);
         return view('web.products.showTag', compact('tag'));
     }

     /* {{ METODO EDIT | DATA MENU LATERAL | INSTANCIA PRODUCT }} */
     public function edit(Product $product)
     {
        $categories = Category::pluck('name', 'id');

        $tags = Tag::pluck('name', 'id');

        $tags_charged = DB::table('product_tag')
                     ->where('product_id', $product->id)
                     ->pluck('tag_id');


        Cache::has('product') ? Cache::put('product', $product) : '';

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
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()

        ], compact('product', 'categories', 'tags', 'tags_charged'));
     }

     /* {{ METODO DE UPDATE | VALIDACION | MENSAJE | REDIRECCION  }} */
     public function update(UpdateProductRequest $request, Product $product)
     {


        /* update */
        $product->update($request->all());

        if($request->file('file')){
            $filename =  Str::random(32).".".File::extension($request->file('file')->getClientOriginalName());
            $url = "products/".$filename;
            $product_url =  public_path('storage/products/'.$filename);

            ImagenCompress::make($request->file('file'))
            ->resize(600, 600)
            ->save($product_url);

            if($product->image){
                Storage::disk('public_upload')->delete($product->image->url);

                $product->image->update([
                    'url' => $url
                ]);
            }else {
                $product->image()->create([
                    'url' => $url
                ]);
            }
        }

        $id_bulkfiles = [];

        foreach ($product->gallery as $key) {

            $id_bulkfiles[] = "$key->id";

            if($request->bulkfilesOld == NULL){

                $product->gallery()->findOrFail($key->id)->delete();

                Storage::disk('public_upload')->delete($key->url);

            }else {
                $imagen_diff = array_diff($id_bulkfiles, $request->bulkfilesOld);

                $imagen_id_elim = array_values($imagen_diff);

                foreach ($imagen_id_elim as $key2) {

                    if($key2 == $key->id){

                            $product->gallery()->findOrFail($key->id)->delete();

                            Storage::disk('public_upload')->delete($key->url);

                    }

                }
            }



        }

        if ($request->hasFile('bulkfiles')){

            foreach ($request->file('bulkfiles') as $fileUp) {

                $filename_bulk_up =  Str::random(32).".".File::extension($fileUp->getClientOriginalName());
                $pathUp = 'gallery/';
                $bulk_urlUp = public_path('storage/gallery/'.$filename_bulk_up);

                ImagenCompress::make(file_get_contents($fileUp))
                ->resize(600, 600)
                ->save($bulk_urlUp);
                $img_path_up =  $pathUp. $filename_bulk_up;

                $product->gallery()->create([
                'url' => $img_path_up
                ]);


            }

        }
        /* sincronizacion de etiquetas evitando el duplicado */
        if($request->tag_id){
            $product->tags()->sync($request->tag_id);
        }
        /* retorno a la vista category index */
        return redirect()->route('admin.products.edit', $product)
        ->with([
            'info' => 'El Producto se actualizo con éxito',
            'color' => '#63b716'
        ]);

     }

     /* {{ METODO DESTROY | REDIRECCION }} */
     public function destroy(Product $product)
     {
        /* delete id instancia product */
        $product->delete();
        $product->image()->findOrFail($product->image->id)->delete();
        Storage::disk('public_upload')->delete($product->image->url);

        foreach ($product->gallery as $item) {
           $product->gallery()->findOrFail($item->id)->delete();
           Storage::disk('public_upload')->delete($item->url);
        }

        /* retorno a la vista product index */
        return redirect()->route('admin.products.index')
                        ->with([
                            'eliminar' => 'ok'
                        ]);
     }
}
