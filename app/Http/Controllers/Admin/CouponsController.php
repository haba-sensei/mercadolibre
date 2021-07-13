<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CouponsController extends Controller
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
        $pageName = 'coupons';
        $activeMenu = $this->HomeController->activeMenu($pageName);

        $coupons = Coupon::all();

        return view('admin.coupons.index', [
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'listar',
            'page_name' => $pageName,
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user(),
        ], compact('coupons'));
    }

    /* {{ METODO CREATE | DATA MENU LATERAL }} */
    public function create()
    {
        $pageName = 'coupons';
        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.coupons.create', [
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'ruta' => 'agregar',
            'page_name' => $pageName,
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user(),
        ]);
    }

    /* {{ METODO STORE | CREATE COUPONS | VALIDACION | MENSAJE }} */
    public function store(Request $request)
    {
        /* validacion de formulario */
        $request->validate([
            'type' => 'required',
            'value' => 'required',
            'cart_value' => 'required',
        ]);

        $code = Str::random(8);

        Coupon::create([
            'code' => $code,
            'type' => $request->type,
            'value' => $request->value,
            'cart_value' => $request->cart_value,
            'status' => 1
        ]);

        return redirect()->route('admin.coupons.index')->with(['info' => 'El cupon se creó con éxito', 'color' => '#63b716']);

    }

    /* {{ METODO SHOW | VISTA WEB | INSTANCIA COUPONS }} */
    public function show($id)
    {
        //
    }

    /* {{ METODO EDIT | DATA MENU LATERAL | INSTANCIA COUPONS }} */
    public function edit(Coupon $coupon)
    {
        /* variable nombre pagina */
        $pageName = 'coupons';
        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.coupons.edit', [
            'side_menu' => $this->HomeController->sideMenu(),
            'first_page_name' => $activeMenu['first_page_name'],
            'second_page_name' => $activeMenu['second_page_name'],
            'third_page_name' => $activeMenu['third_page_name'],
            'page_name' => $pageName,
            'ruta' => 'editar',
            'theme' => $this->HomeController->omega(),
            'layout' => 'content',
            'titulo' => $this->HomeController->sideMenu(),
            'userauth' => Auth::user(),

        ], compact('coupon'));
    }

    /* {{ METODO DE UPDATE | VALIDACION | MENSAJE | REDIRECCION  }} */
    public function update(Request $request, Coupon $coupon)
    {
        /* validacion de formulario */
        $request->validate([
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
        ]);

        /* update */
        $coupon->update([
            'type' => $request->type,
            'value' => $request->value,
            'cart_value' => $request->cart_value,
        ]);

        /* redirect a la vista edit */
        return redirect()->route('admin.coupons.edit', $coupon)->with(['info' => 'El cupon se actualizo con éxito', 'color' => '#1c3faa']);
    }

    /* {{ METODO DESTROY | REDIRECCION }} */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();

        /* retorno a la vista category index */
        return redirect()->route('admin.coupons.index')
            ->with([
                'info' => 'El cupon se elimino con éxito',
                'color' => '#f44336',
            ]);
    }
}
