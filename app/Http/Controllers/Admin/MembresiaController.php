<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tienda;
use Carbon\Carbon;
use Carbon\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembresiaController extends Controller
{
    /* METODO PROTECTED */
    protected $HomeController;

    /* {{ METODO CONSTRUCTOR | DATA MENU LATERAL }} */

    public function __construct(HomeController $HomeController)
    {
        $this->HomeController = $HomeController;
    }

    public function index()
    {
        $pageName= 'membresia';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.membresia.index',[
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tienda)
    {
        $pageName= 'membresia';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        $tienda_filtrada = Tienda::where(['slug' => $tienda])->first();

        $date = Carbon::parse($tienda_filtrada->membresia->finish_at)->locale('es');

        $dia_cad = $date->format('d');
        $mes_cad = $date->getTranslatedMonthName('m');
        $year_cad = $date->format('Y');

        $tienda_name = $tienda_filtrada->name;
        $tienda_pic = $tienda_filtrada->url_perfil;
        $user_name = $tienda_filtrada->user->name;
        $tienda_mail = $tienda_filtrada->email;
        $tienda_phone = $tienda_filtrada->phone;
        $membresias_activas = $tienda_filtrada->pagos;

        return view('admin.membresia.show',[
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
        ],compact(
            'dia_cad',
            'mes_cad',
            'year_cad',
            'tienda_name',
            'tienda_pic',
            'user_name',
            'tienda_mail',
            'tienda_phone',
            'membresias_activas'

        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
