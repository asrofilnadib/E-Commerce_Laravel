<?php

  use App\Http\Controllers\AdminHomeController;
  use App\Http\Controllers\AdminProductController;
  use App\Http\Controllers\CartController;
  use App\Http\Controllers\HomeController;
  use App\Http\Controllers\MyAccountController;
  use App\Http\Controllers\ProductController;
  use Illuminate\Support\Facades\Auth;
  use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])
  ->name('home.index');

Route::get('/about', [HomeController::class, 'about']);

Route::get('/products', [ProductController::class, 'index'])
  ->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])
  ->name('products.show');

Route::get('/cart', [CartController::class, 'index'])
  ->name('cart.index');
Route::get('/cart/delete', [CartController::class, 'delete'])
  ->name('cart.delete');
Route::post('/cart/add/{id}', [CartController::class, 'add'])
  ->name("cart.add");

Route::middleware('auth')->group(function () {
  Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')
    ->name("cart.purchase");
  Route::get('/my-account/order', [MyAccountController::class, 'orders'])
    ->name("myaccount.orders");
});

Route::middleware('admin')->group(function () {
  Route::get('/admin', [AdminHomeController::class, 'index'])
    ->name('admin.home.index');
  Route::get('/admin/products', [AdminProductController::class, 'index'])
    ->name('admin.products.index');

  Route::post('/admin/products/store', [AdminProductController::class, 'store'])
    ->name('admin.products.store');
  Route::delete('/admin/products/{id}/delete', [AdminProductController::class, 'delete'])
    ->name('admin.products.delete');
  Route::get('/admin/products/{id}/edit', [AdminProductController::class, 'edit'])
    ->name('admin.products.edit');
  Route::put('/admin/products/{id}/update', [AdminProductController::class, 'update'])
    ->name('admin.products.update');
});

