<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /* METODO PROTECTED */
    protected $HomeController;

    /* {{ METODO CONSTRUCTOR | DATA MENU LATERAL }} */
    public function __construct(HomeController $HomeController)
    {
        $this->HomeController = $HomeController;


    }

    public function getAll($id){

        $post = Post::with('image', 'category', 'tags')
                     ->where('status', 2)
                     ->where('user_id', $id)
                     ->get();

        return response()->json(array('last_page' => 6, 'data'=>$post ));

    }


    /* {{ METODO INDEX | DATA MENU LATERAL }} */
    public function index()
    {
        $posts = Post::all();
        $pageName= 'posts';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.posts.index',[
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
        ], compact('posts') );
    }

    /* {{ METODO CREATE | DATA MENU LATERAL }} */
    public function create()
    {
        $pageName= 'posts';
        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.posts.create', [
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

    /* {{ METODO STORE | CREATE POST | VALIDACION | MENSAJE }} */
    public function store(Request $request)
    {
        //
    }

    /* {{ METODO SHOW | DATA MENU LATERAL | INSTANCIA POST }} */
    public function show(Post $post)
    {
        $pageName= 'posts';
        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.posts.show', [
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

    /* {{ METODO EDIT | DATA MENU LATERAL | INSTANCIA POST }} */
    public function edit(Post $post)
    {
        //
    }

    /* {{ METODO DE UPDATE | VALIDACION | MENSAJE | REDIRECCION  }} */
    public function update(Request $request, Post $post)
    {
        //
    }

    /* {{ METODO DESTROY | REDIRECCION }} */
    public function destroy(Post $post)
    {
        //
    }
}
