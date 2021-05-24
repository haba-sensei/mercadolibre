<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Web\SocialiteAccess;

/* RUTAS  */

Route::get('/', [WebController::class, 'index'])->name('web.home');
Route::view('/web', 'web.home');

Route::get('/productos',  [ProductController::class, 'showAll'])->name('web.products.showAll');
Route::get('producto/{product}', [ProductController::class, 'show'])->name('web.products.show');

Route::view('/carrito', 'web.shopcart.index')->name('web.shopcart.index');


Route::get('auth/facebook', [SocialiteAccess::class, 'redirect']);
Route::get('auth/facebook/callback', [SocialiteAccess::class, 'signinFacebook']);


// Route::get('category/{category}', [PostController::class, 'category'] )->name('posts.category');

// Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
