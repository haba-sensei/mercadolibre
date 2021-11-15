<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TiendaController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\TransController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'App\Http\Controllers\Api\AuthController@login');
Route::post('register', 'App\Http\Controllers\Api\AuthController@register');
Route::get('optimize', 'App\Http\Controllers\Api\AuthController@optimize');

Route::group([
    'middleware' => 'jwt.verify',
    'prefix' => 'auth'
], function ($router) {
    Route::post('logout', 'App\Http\Controllers\Api\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\Api\AuthController@refresh');
    Route::put('updateUser', 'App\Http\Controllers\Api\AuthController@updateUser');
    Route::put('updatePass', 'App\Http\Controllers\Api\AuthController@updatePass');
    Route::get('getUser', 'App\Http\Controllers\Api\AuthController@getUser');
    Route::post('me', 'App\Http\Controllers\Api\AuthController@me');
});


Route::group([
    'middleware' => 'jwt.verify',
    'prefix' => 'general'
], function ($router) {
    Route::get('slider',  [GeneralController::class, 'slider']);
    Route::get('banners',  [GeneralController::class, 'banners']);
    Route::get('tiendas',  [GeneralController::class, 'tiendas']);
    Route::get('products',  [GeneralController::class, 'products']);
    Route::get('categories',  [GeneralController::class, 'categories']);
    Route::get('categoriesById/{id}',  [GeneralController::class, 'categoriesById']);
    Route::get('catWithProd',  [GeneralController::class, 'catWithProd']);
    Route::get('tiendaById/{id}',  [GeneralController::class, 'tiendaById']);
    Route::get('productByTienda/{id}',  [GeneralController::class, 'productByTienda']);
    Route::get('productShuffle',  [GeneralController::class, 'productShuffle']);
    Route::get('productById/{id}',  [GeneralController::class, 'productById']);
});


Route::group([
    'middleware' => 'jwt.verify',
    'prefix' => 'trans'
], function ($router) {
    Route::get('orders',  [TransController::class, 'orders']);
    Route::get('orderById/{id}',  [TransController::class, 'orderById']);
    Route::get('checkcupon/{cupon}',  [TransController::class, 'checkcupon']);
    Route::get('wompi',  [TransController::class, 'wompi']);
    Route::get('paypal',  [TransController::class, 'paypal']);
    Route::get('paypal_success/{order}', [TransComponent::class, 'paypal_success']);
    Route::get('paypal_cancel',  [TransComponent::class, 'paypal_cancel']);
});


