<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\WebController;


/* RUTAS  */

Route::get('/', [WebController::class, 'index'])->name('web.home');

// Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Route::get('category/{category}', [PostController::class, 'category'] )->name('posts.category');

// Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
