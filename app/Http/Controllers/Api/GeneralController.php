<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tienda;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
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

    public function slider()
    {
        $sliders = DB::table('config_img')->where('class', 'sliders' )->get();

        return response()->json($sliders, 201);
    }

    public function banners()
    {
        $banners = DB::table('config_img')->where('class', 'banners' )->get();
        return response()->json($banners, 201);
    }

    public function tiendas()
    {
        $tiendas = DB::table('tiendas')->where('status', '2' )->get();

        return response()->json($tiendas, 201);
    }

    public function categories()
    {
        $categories = Category::get();

        return response()->json($categories, 201);

    }

    public function categoriesById($id)
    {
        $categories = Category::where('id', $id)->with(['products' => function ($query) {
            $query->where('status', '=', '2')
            ->join('images', 'images.imageable_id', '=', 'products.id');
        }])->get();

        return response()->json($categories, 201);
    }

    public function products()
    {
        $products = Product::with('image', 'gallery', 'category')
        ->where('status', 2)
        ->get();

        return response()->json([
            'success' => true,
            'data' => $products,
            'message' => 'Lista de productos'
        ], 201);
    }

    public function catWithProd()
    {
        $categories = Category::with(['products' => function ($query) {
            $query->where('status', '=', '2')->with('image', 'gallery');
        }])->get();

        return response()->json([
            'success' => true,
            'data' => $categories,
            'message' => 'Lista de productos por categoria'
        ], 201);
    }

    public function tiendaById($id)
    {
        $tienda = Tienda::where('id', $id)->with(['products' => function ($query) {
            $query->where('status', '=', '2')
            ->join('images', 'images.imageable_id', '=', 'products.id');
        }])->get();

        return response()->json([
            'success' => true,
            'data' => $tienda,
            'message' => 'Tienda por ID'
        ], 201);
    }

    public function productByTienda($id)
    {
         $productos = Product::with('image', 'gallery', 'category')
         ->where('status', 2)
         ->where('tienda_id', $id)
         ->get();

         return response()->json($productos, 201);
    }

    public function productShuffle()
    {

         $productos = Product::with(['gallery'])
         ->where('status', 2)
         ->join('images', 'images.imageable_id', '=', 'products.id')
         ->inRandomOrder()
         ->limit(10)
         ->get();

         return response()->json($productos, 201);
    }

    public function productById($id)
    {
         $productos = Product::with(['gallery'])
         ->where('status', 2)
         ->where('id', $id)
         ->join('images', 'images.imageable_id', '=', 'products.id')
         ->get();

         return response()->json($productos, 201);
    }

}
