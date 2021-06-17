<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /* MANEJADOR DE RUTAS COMPUESTAS | MENU ACTIVO | ARRAY DE MENU LATERAL | BREADCRUMBS  */
    public function render($pageName = 'home')
    {
        $activeMenu = $this->activeMenu($pageName);


        return view('admin/'. $pageName, [
            'side_menu' => $this->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'page_name' => $pageName,
            'ruta' => 'listar',
            'theme' => $this->omega(),
            'layout' => 'content',
            'titulo' => $this->sideMenu(),
            'userauth' => Auth::user(),

        ]);

    }
    /* MANEJADOR DE MENU ACTIVO | SUB MENUS HASTA 3 NIVELES */
    public function activeMenu($pageName)
    {
        $firstPageName = '';
        $secondPageName = '';
        $thirdPageName = '';

        foreach ($this->sideMenu() as $menu) {
            if ($menu !== 'devider' && $menu['page_name'] == $pageName && empty($firstPageName)) {
                $firstPageName = $menu['page_name'];
            }

            if (isset($menu['sub_menu'])) {
                foreach ($menu['sub_menu'] as $subMenu) {
                    if ($subMenu['page_name'] == $pageName && empty($secondPageName) && $subMenu['page_name'] != 'dashboard') {
                        $firstPageName = $menu['page_name'];
                        $secondPageName = $subMenu['page_name'];
                    }

                    if (isset($subMenu['sub_menu'])) {
                        foreach ($subMenu['sub_menu'] as $lastSubmenu) {
                            if ($lastSubmenu['page_name'] == $pageName) {
                                $firstPageName = $menu['page_name'];
                                $secondPageName = $subMenu['page_name'];
                                $thirdPageName = $lastSubmenu['page_name'];
                            }
                        }
                    }
                }
            }
        }


        return [
            'first_page_name' => $firstPageName,
            'second_page_name' => $secondPageName,
            'third_page_name' => $thirdPageName

        ];
    }

    /**
     * LISTA DE RUTAS DEL MENU LATERAL | ICONOS | NIVELES | TITULO |
     * NOMBRE DE LA URL {{ PAGE_NAME }}
     * ---------------------------------
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sideMenu()
    {
        return [
            'home' => [
                'icon' => 'home',
                'menuPrincipal' => 'si',
                'page_name' => 'home',
                'ruta' => 'listar',
                'title' => 'Home Dash',
                'can' => 'dash.home'
            ],

            'roles' => [
                'icon' => 'eye',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'roles',
                'title' => 'Roles',
                'can' => 'dash.roles.index'
            ],

            'users' => [
                'icon' => 'users',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'users',
                'title' => 'Usuarios',
                'can' => 'dash.users.index'
            ],

            'compras' => [
                'icon' => 'package',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'compras',
                'title' => 'Compras',
                'can' => 'dash.compras.index'

            ],

            'ventas' => [
                'icon' => 'dollar-sign',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'ventas',
                'title' => 'Ventas',
                'can' => 'dash.ventas.index'

            ],

            'tienda' => [
                'icon' => 'shopping-cart',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'tienda',
                'title' => 'Crear Tienda',
                'can' => 'dash.tienda.index'
            ],

            'products' => [
                'icon' => 'tag',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'products',
                'title' => 'Productos',
                'can' => 'dash.products.index'

            ],

            'categories' => [
                'icon' => 'layers',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'categories',
                'title' => 'Categorias',
                'can' => 'dash.categories.index'

            ],
            'tags' => [
                'icon' => 'bookmark',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'tags',
                'title' => 'Etiquetas',
                'can' => 'dash.tags.index'

            ]

        ];
    }

    public function omega(){

        $themeColor = 'light';

        return $themeColor;

    }
}
