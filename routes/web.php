<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\CartController;

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

Route::get('/CCC', function () {
    return view('landing.index');
});

// Route::get('/C', function () {
//     return view('layouts.include.menu',);
// });


Route::get('/CC', function () {
    return view('welcome');
});

    Route::get('/', [ProductController::class, 'landing']);

    Route::get('/pesan', [ProductController::class, 'index']);

    // Route::get('/cart', [ProductController::class, 'cart']);

// Route::get('/1', [ProductController::class, 'index']);
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');

// Route::get('/1', [CartController::class, 'index']);
// Route::post('products/{product}/add-to-cart', [CartController::class, 'addToCart'])->name('products.addToCart');
