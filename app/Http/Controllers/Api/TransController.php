<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB;

class TransController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        //valid credential
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50'
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            return response()->json(['error' => 'sdsds'], 200);
        }
        // $validator->messages()
        //Request is validated
        //Crean token
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                	'success' => false,
                	'message' => 'Login credentials are invalid.',
                ], 400);
            }
        } catch (JWTException $e) {
    	return $credentials;
            return response()->json([
                	'success' => false,
                	'message' => 'Could not create token.',
                ], 500);
        }

 		//Token created, return with success response and jwt token
        return response()->json([
            'success' => true,
            'token' => $token,
        ]);
    }

    public function checkcupon($cupon) {

        $cupon_result = DB::table('coupons')
                        ->where('status', '1')
                        ->where('code', $cupon)
                        ->get();

        if ($cupon_result->count() >= 1) {
            
            return response()->json([
                'success' => true,
                'data' => $cupon_result,
                'message' => 'Cupon exitoso'
            ], 201);

        } else {
            return response()->json([
                'success' => false,
                'error' => 'Error cupon no encontrado',
                'message' => 'Error cupon no encontrado'
            ], 400);
        }




    }

    public function orders() {}
    public function orderById($id) {}

    public function wompi() {}
    public function paypal() {}
    public function paypal_success($order) {}
    public function paypal_cancel() {}

}
