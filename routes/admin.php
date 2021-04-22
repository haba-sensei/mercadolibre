<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;


use Illuminate\Support\Facades\Route;

/* HOME DASHBOARD ROUTES PREFIX DASH */
Route::get('/', [HomeController::class, 'render'])->name('dash');


/* CRUD RESOURCE'S */

Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('tags', TagController::class)->names('admin.tags');
Route::resource('posts', PostController::class)->names('admin.posts');
Route::resource('products', ProductController::class)->names('admin.products');


/* MANEJADOR DE RUTAS DEL THEME  */

Route::get('{pageName}', [HomeController::class, 'render'])->name('page');



