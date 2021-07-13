<?php
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ComprasController;
use App\Http\Controllers\Admin\CouponsController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TiendaController;
use App\Http\Controllers\Admin\VentasController;
use Illuminate\Support\Facades\Route;

/* HOME DASHBOARD ROUTES PREFIX DASH */
Route::get('/', [HomeController::class, 'render'])->name('dash');

/* HOME WEB ROUTES */
Route::view('/web', 'web.home');

/* CRUD RESOURCE'S USUARIOS*/
Route::resource('users', UserController::class)->middleware('can:dash.users.index')->only(['index', 'edit', 'update'])->names('admin.users');

/* CRUD RESOURCE'S ROLES*/
Route::resource('roles', RoleController::class)->middleware('can:dash.roles.index')->names('admin.roles');

/* CRUD RESOURCE'S */

Route::resource('categories', CategoryController::class)->middleware('can:dash.categories.index')->names('admin.categories');
Route::resource('tags', TagController::class)->middleware('can:dash.tags.index')->names('admin.tags');
Route::resource('products', ProductController::class)->middleware('can:dash.products.index')->names('admin.products');
Route::resource('tienda', TiendaController::class)->middleware('can:dash.tienda.index')->names('admin.tienda');
Route::resource('compras', ComprasController::class)->middleware('can:dash.compras.index')->names('admin.compras');
Route::resource('ventas', VentasController::class)->middleware('can:dash.ventas.index')->names('admin.ventas');
Route::resource('coupons', CouponsController::class)->middleware('can:dash.coupons.index')->names('admin.coupons');

/* MANEJADOR DE RUTAS DEL THEME  */

Route::get('{pageName}', [HomeController::class, 'render'])->name('page');



