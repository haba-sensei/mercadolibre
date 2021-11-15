<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Artisan;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');


        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50'
        ]);


        if ($validator->fails()) {
            return response()->json(['error' => 'Credenciales Incorrectas'], Response::HTTP_OK);
        }
        // $validator->messages()

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                	'success' => false,
                	'message' => 'Login credentials are invalid.',
                ], Response::HTTP_BAD_REQUEST);
            }
        } catch (JWTException $e) {
    	return $credentials;
            return response()->json([
                	'success' => false,
                	'message' => 'Could not create token.',
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }


        return response()->json([
            'success' => true,
            'data' => $token,
            'message' => 'Token creado con exito'
        ], Response::HTTP_CREATED);
    }

    public function login()
    {
        try {
            $credentials = request(['email', 'password']);
            $token = null;
            if (!$token = JWTAuth::attempt($credentials)){

                return response()->json([
                    'success' => false,
                    'error' => 'Unauthorized',
                    'message' => 'Credenciales incorrectas '
                ], Response::HTTP_UNAUTHORIZED);

            }else {

                $user = Auth::user();
                $user->device_token = $token;
                $user->save();

                $data = [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'profile_photo_path' => $user->profile_photo_path,
                    'device_token' => $user->device_token
                ];

                return response()->json([
                    'success' => true,
                    'data' => $data,
                    'message' => 'El usuario ha sido autenticado'
                ], Response::HTTP_OK);
            }

        } catch (Exception $e) {
            // $e->getMessage()
            return response()->json([
                'success' => false,
                'error' => 'Error interno del servidor',
                'message' => 'Error interno del servidor'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function optimize() {
        Artisan::call('optimize');
        return "hola";
    }

    public function logout(Request $request)
    {
        //valid credential
        $validator = Validator::make($request->only('device_token'), [
            'device_token' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Token Invalido',
                'message' => 'Token Invalido'
            ], Response::HTTP_OK);
        }

        try {
            //? errores de tipo token se encuentran en el middeware JWT recuerda
            JWTAuth::invalidate($request->device_token);
            return response()->json([
                'success' => true,
                'message' => 'Session Cerrada'
            ], Response::HTTP_OK);

        }  catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Error Interno'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    public function refresh()
    {
        return $this->respondWithToken(Auth::refresh());
    }

    public function updateUser(Request $request)
    {
        try {

            $validator = User::where('email', $request->email)->get()->except(Auth::id());

            if ($validator->count() >= 1) {

                return response()->json([
                    'success' => false,
                    'error' => 'Error email duplicado',
                    'message' => 'Error email duplicado'
                ], 400);

            }
            $user = Auth::user();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            $data = [
                'name' => $user->name,
                'email' => $user->email
            ];

            return response()->json([
                'success' => true,
                'message' => 'Usuario Actualizado con exito',
                'data' =>  $data
            ], 201);





        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'message' => 'Error interno del servidor'
            ], 500);
        }
    }

    public function updatePass(Request $request)
    {
        try {

            $user = Auth::user();
            $user->password = bcrypt($request->password);
            $user->save();

            $data = [
                'name' => $user->name,
                'email' => $user->email
            ];


            return response()->json([
                'success' => true,
                'message' => 'Password Actualizado con exito',
                'data' => $data
            ], 201);


        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Error Password',
                'message' => 'Error interno del servidor'
            ], 500);
        }
    }

    public function getUser()
    {
        try {

            $user = Auth::user();

            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'device_token' => $user->device_token
            ];

            return response()->json([
                'success' => true,
                'message' => 'Usuario obtenido con exito',
                'data' => $data
            ], 201);


        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Error interno del servidor',
                'message' => 'Error interno del servidor'
            ], 500);
        }
    }

    public function register(Request $request) {
        try {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|string|email|max:100|unique:users',
                'password' => 'required|string|min:6'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Error Email duplicado',
                    'message' => 'Error email duplicado'
                ], 400);
            };

            $user = User::create(
                array_merge(
                    $validator->validate(),
                    ['password' => bcrypt($request->password)],

                ))->assignRole('Comprador');

            $token = JWTAuth::fromUser($user);

            $data = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'device_token' => $token
            ];

            return response()->json([
                'success' => true,
                'message' => 'Usuario Creado con exito',
                'data' => $data
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Email duplicado',
                'message' => 'Error interno del servidor'
            ], 500);
        }


    }

}
