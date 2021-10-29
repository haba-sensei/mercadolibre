<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'error' => 'Unauthorized',
                'message' => 'Credenciales incorrectas '
            ], 401);
        }else {
            return response()->json([
                'success' => false,
                'error' => 'Unauthorized',
                'message' => 'Error interno del servidor'
            ], 500);
        }

        DB::table('users')
        ->where('email', request(['email'])  )->update(
            [
                'device_token' => $token
            ]
        );

        $owner = DB::table('users')->where('email', request(['email']) )->get();

        $data = [
            'id' => $owner[0]->id,
            'name' => $owner[0]->name,
            'email' => $owner[0]->email,
            'profile_photo_path' => $owner[0]->profile_photo_path,
            'device_token' => $owner[0]->device_token
        ];

        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => 'El usuario ha sido autenticado'
        ], 201);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        // 'access_token' => $token,
        //     'token_type' => 'bearer',
        //     'expires_in' => auth()->factory()->getTTL() * 60

    }

    public function register(Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        };

        $user = User::create(
            array_merge(
                $validator->validate(),
                ['password'=> bcrypt($request->password)]
            )
        );

        return response()->json([
            'success' => true,
            'message' => 'Usuario Creado con exito',
            'data' => $user
        ], 201);
    }
}
