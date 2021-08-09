<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Perfiles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\ImageManagerStatic as ImagenCompress;

class PerfilController extends Controller
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
        $pageName= 'perfil';

        $activeMenu = $this->HomeController->activeMenu($pageName);

        return view('admin.perfil.index',[
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
    public function show($id)
    {
        //
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
          /* validacion de formulario ignorando actualizar del slug por ID */


        if ($request->name) {

          $request->validate([
                'name' => 'required|string',
                'telefono' => 'required|numeric',
                'pais' => 'required|string',
                'estado' => 'required|string',
                'ciudad' => 'required|string',
                'direccion' => 'required|string',
                'file' => 'image|max:2048'
            ]);

            User::findorfail($id)->update([
                'name' => $request->name
            ]);

            Perfiles::where(['user_id' => $id])->update([
                'telefono' => $request->telefono,
                'pais' => $request->pais,
                'estado' => $request->estado,
                'ciudad' => $request->ciudad,
                'direccion' => $request->direccion
            ]);

            if( $request->file('file') ){

                $filename =  Str::random(32).".".File::extension($request->file('file')->getClientOriginalName());
                $url = "users/".$filename;
                $user_url =  public_path('storage/users/'.$filename);

                ImagenCompress::make($request->file('file'))
                ->resize(200, 200)
                ->save($user_url);

                $foto_perfil = User::where(['id' => $id])->get();

                if($foto_perfil[0]->profile_photo_path){

                    Storage::disk('public_upload')->delete($foto_perfil[0]->profile_photo_path);

                    $foto_perfil[0]->profile_photo_path = $url;
                    $foto_perfil[0]->save();

                }
            }
            $info = 'El Perfil se actualizo con éxito';
        }

        if($request->new_email){

            $request->validate([
                'new_email' => "required|unique:users,email,$request->email",
            ]);

            User::findorfail($id)->update([
                'email' => $request->new_email
            ]);
            $info = 'El Correo se actualizo con éxito';
        }

        if($request->new_pass){

            $request->validate([
                'new_pass' => 'required',
            ]);

            $nueva_pass = Hash::make($request->new_pass);

            User::findorfail($id)->update([
                'password' => $nueva_pass
            ]);

            $info = 'El Password se actualizo con éxito';
        }

            return redirect()->route('admin.perfil.index')->with(['info' => $info, 'color' => '#1c3faa']);
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
