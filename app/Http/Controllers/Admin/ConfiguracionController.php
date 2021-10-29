<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConfigData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\ImageManagerStatic as ImagenCompress;

class ConfiguracionController extends Controller
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
        $pageName = 'configuracion';
        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.configuracion.index', [
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
        ]);
    }

    public function update(Request $request, $id)
    {

        switch ($request->modulo) {
            case 'titulo':
                ConfigData::findorfail($id)->update([
                    'titulo' => $request->titulo
                ]);
                break;

            case 'icono_favicon':
                if($request->file('icono')){

                    $filename =  Str::random(32).".".File::extension($request->file('icono')->getClientOriginalName());
                    $url = $filename;
                    $icono_url =  public_path('storage/'.$filename);

                    ImagenCompress::make($request->file('icono'))
                    ->resize(278, 356)
                    ->save($icono_url);

                    $config_icono = ConfigData::where(['id' => $id])->get();

                    if($config_icono[0]->icono){
                        Storage::disk('public_upload')->delete($config_icono[0]->icono);
                    }

                    $config_icono[0]->icono = $url;
                    $config_icono[0]->save();
                }


                if($request->file('favicon')){

                    $filename =  Str::random(32).".".File::extension($request->file('favicon')->getClientOriginalName());
                    $url = $filename;
                    $favicon_url =  public_path('storage/'.$filename);

                    ImagenCompress::make($request->file('favicon'))
                    ->resize(278, 356)
                    ->save($favicon_url);

                    $config_favicon = ConfigData::where(['id' => $id])->get();

                    if($config_favicon[0]->favicon){
                        Storage::disk('public_upload')->delete($config_favicon[0]->favicon);
                    }

                    $config_favicon[0]->favicon = $url;
                    $config_favicon[0]->save();
                }

                break;

            case 'color':
                ConfigData::findorfail($id)->update([
                    'color' => $request->color
                ]);
                break;

            case 'contacto':
                ConfigData::findorfail($id)->update([
                    'mapa' => $request->mapa,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'youtube' => $request->youtube,
                    'num_contacto' => $request->num_contacto
                ]);
                break;
        }

        return redirect()->route('admin.configuracion.index')->with(['info' => 'Actualizado con exito', 'color' => '#1c3faa']);

    }

}
