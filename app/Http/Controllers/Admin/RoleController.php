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
            'theme' => $this->HomeController->omega(),
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
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()
        ], compact('permissions'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|not_in:Alpha'

        ]);

        $role = Role::create($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.edit', $role)
        ->with([
            'info' => 'El Rol se creo con éxito',
            'color' => '#63b716'
        ]);
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
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()
        ], compact('role'));
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all();
        $pageName= 'roles';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.roles.edit',[
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'editar',
            'page_name' => $pageName,
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user()
        ], compact('role', 'permissions'));
    }


    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|not_in:Alpha',
        ]);

        $role->update($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.edit', $role)
        ->with([
            'info' => 'El Rol se actualizo con éxito',
            'color' => '#1c3faa'
        ]);
    }


    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('admin.roles.index', $role)
        ->with([
            'info' => 'El Rol se elimino con éxito',
            'color' => '#f44336'
        ]);
    }
}
