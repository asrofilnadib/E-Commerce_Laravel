<?php

  use App\Http\Controllers\AdminHomeController;
  use App\Http\Controllers\AdminProductController;
  use App\Http\Controllers\HomeController;
  use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])
  ->name('home.index');

Route::get('/about', [HomeController::class, 'about']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show'])
  ->name('products.show');

Route::get('/admin', [AdminHomeController::class, 'index'])
  ->name('admin.home.index');
Route::get('/admin/products', [AdminProductController::class, 'index'])
  ->name('admin.products.index');
