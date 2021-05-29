<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Web\SocialiteAccess;
use App\Http\Controllers\Web\TiendaController;

/* RUTAS HOME  */
Route::get('/', [WebController::class, 'index'])->name('web.home');
Route::view('/web', 'web.home');

/* ACCESO REDES */
Route::get('auth/facebook', [SocialiteAccess::class, 'redirectFacebook']);
Route::get('auth/facebook/callback', [SocialiteAccess::class, 'signinFacebook']);
Route::get('auth/google', [SocialiteAccess::class, 'redirectGoogle']);
Route::get('auth/google/callback', [SocialiteAccess::class, 'signinGoogle']);

/* PRODUCTOS */
Route::get('/productos',  [ProductController::class, 'showAll'])->name('web.products.showAll');
Route::get('producto/{product}', [ProductController::class, 'show'])->name('web.products.show');
Route::get('categoria/{category}', [ProductController::class, 'showCat'])->name('web.products.show.categories');
Route::get('tag/{tag}', [ProductController::class, 'showTag'])->name('web.products.show.tags');


/* CARRITO - CHECKOUT - PAYMENT */
Route::view('/carrito', 'web.shopcart.index')->name('web.shopcart.index');

/* TIENDAS */
Route::get('/tiendas',  [TiendaController::class, 'index'])->name('web.tienda.index');
Route::get('/tiendas/{tienda}',  [TiendaController::class, 'show'])->name('web.tienda.show');



// Route::get('category/{category}', [PostController::class, 'category'] )->name('posts.category');

// Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
