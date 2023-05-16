<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\CartController;
use GuzzleHttp\Middleware;

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

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');


Route::get('/CC', function () {
    return view('welcome');
});


    Route::get('/pesan', [ProductController::class, 'index']);

    // Route::get('/cart', [ProductController::class, 'cart']);

// Route::get('/1', [ProductController::class, 'index']);


// Route::get('/1', [CartController::class, 'index']);
// Route::post('products/{product}/add-to-cart', [CartController::class, 'addToCart'])->name('products.addToCart');








Route::get('/', [ProductController::class, 'landing'])->name('landing');

// Guest Route
Route::middleware(['guest'])->group(
    function () {

    Route::get('/login', [AuthController::class, 'indexlogin'])->name('index.login');
    Route::post('/login', [AuthController::class, 'authanticate'])->name('store.login');

    Route::get('/register', [AuthController::class, 'indexregister'])->name('index.register');
    Route::post('/register', [AuthController::class, 'storeregister'])->name('store.register');
    }
);


// Admin Route
Route::middleware(['Admin', 'Admin:1'])->group(
    function () {

            Route::get('/dashboard-admin',[AdminController::class, 'index'])->name('index.dashboard');
            Route::get('/dashboard-admin/data-orderan',[AdminController::class, 'orderan'])->name('orderan.dashboard');


    }
);


// User Route
Route::middleware(['auth'])->group(
    function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('cart', [ProductController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
    Route::patch('update-cart', [ProductController::class, 'update'])->name('update_cart');
    Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');
    // Route::get('/checkout1', [ProductController::class, 'checkoutindex']);
    Route::post('checkout', [ProductController::class, 'checkout'])->name('checkout');
    ///dashboard
    Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');
    }
);

