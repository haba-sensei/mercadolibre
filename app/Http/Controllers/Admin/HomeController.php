<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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
            'theme' => 'light',
            'layout' => 'content',
            'titulo' => $this->sideMenu()
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

    // 'posts' => [
    //     'icon' => 'file-text',
    //     'menuPrincipal' => 'si',
    //     'ruta' => 'listar',
    //     'page_name' => 'posts',
    //     'title' => 'Post'
       
    // ],
    {
        return [
            'home' => [
                'icon' => 'home',
                'menuPrincipal' => 'si',
                'page_name' => 'home',
                'ruta' => 'listar',
                'title' => 'Home'
                 
            ],
            'posts' => [
                'icon' => 'file-text',
                'page_name' => 'posts',
                'title' => 'Posts',
                'sub_menu' => [
                    'index' => [
                        'icon' => 'list',
                        'page_name' => 'posts',
                        'menuPrincipal' => 'si',
                        'ruta' => 'listar',
                        'title' => 'Listar Posts',
                        
                    ],
                    'create' => [
                        'icon' => 'inbox',
                        'page_name' => 'posts/show',
                        'menuPrincipal' => 'si',
                        'ruta' => 'listar',
                        'title' => 'Crear Post',
                    ],
                     
                ]
            ],
            
            'categories' => [
                'icon' => 'layers',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'categories',
                'title' => 'Categorias'
               
            ],
            'tags' => [
                'icon' => 'bookmark',
                'menuPrincipal' => 'si',
                'ruta' => 'listar',
                'page_name' => 'tags',
                'title' => 'Etiquetas'
               
            ]
            
        ];
    }
} 
