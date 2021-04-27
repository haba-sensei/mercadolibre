<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
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
        $role = Role::all();

        $pageName= 'roles';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.roles.index',[
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
        ], compact('role'));
    }

    public function create()
    {
        $permissions = Permission::all();
        $pageName= 'roles';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.roles.create',[
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
        ], compact('permissions'));
    }


    public function store(Role $role)
    {
        $pageName= 'roles';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.roles.store',[
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
        ], compact('role'));
    }


    public function show(Role $role)
    {
        $pageName= 'roles';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.roles.show',[
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
        ], compact('role'));
    }


    public function edit(Role $role)
    {
        $pageName= 'roles';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.roles.edit',[
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'editar',
            'page_name' => $pageName,
            'theme' => 'light',
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()
        ], compact('role'));
    }


    public function update(Request $request, Role $role)
    {
        $pageName= 'roles';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.roles.update',[
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'actualizar',
            'page_name' => $pageName,
            'theme' => 'light',
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()
        ], compact('role'));
    }


    public function destroy(Role $role)
    {

    }
}
