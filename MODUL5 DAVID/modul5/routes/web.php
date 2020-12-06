<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('home');

// bagian route productController
Route::get('produk', [ProductController::class, 'show'])->name("produk");
Route::get('produk/add', [ProductController::Class, 'add'])->name('tambah');
Route::post('produk/add/create', [ProductController::Class, 'create'])->name('create');

Route::get('produk/{product:id}/edit', [ProductController::class, 'edit'])->name('update');
Route::put('produk/{product:id}/edit', [ProductController::class, 'update']);
Route::delete('produk/{product:id}/delete', [ProductController::class, 'delete'])->name('delete');

// bagian route orderController
Route::get('order', [OrderController::class, 'show'])->name('order');
Route::get('order/{product:id}', [OrderController::class, 'create'])->name('orderCreate');
Route::post('order/add', [OrderController::class, 'add'])->name('orderPost');

Route::get('history', [OrderController::class, 'history'])->name('history');




