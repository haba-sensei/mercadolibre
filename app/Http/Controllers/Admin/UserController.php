<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
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
        $pageName= 'users';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.users.index',[
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
        ]);


    }


    public function edit(User $user)
    {
        /* aca llamo a todos los roles */

        $roles = Role::all();

        $pageName= 'users';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        /* retorno | menu lateral | compact category */
        return view('admin.users.edit', [
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'page_name' => $pageName,
            'ruta' => 'roles y permisos',
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()
        ], compact('user', 'roles'));
    }


    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);


        return redirect()->route('admin.users.edit', $user)->with(['info' => 'El rol se actualizo con éxito', 'color' => '#1c3faa']);

    }



}
