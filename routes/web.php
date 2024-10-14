<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/products', [ProductsController::class, 'index'])->name('products');

Route::get('/carts', [CartsController::class, 'index'])->name('carts');
Route::post('/cart/add/{productId}', [CartsController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/increase/{itemId}', [CartsController::class, 'increaseItemAmount'])->name('cart.increase');
Route::get('/cart/decrease/{itemId}', [CartsController::class, 'decreaseItemAmount'])->name('cart.decrease');
Route::get('/cart/remove/{itemId}', [CartsController::class, 'removeItem'])->name('cart.remove');

Route::get('/checkouts', [CheckoutController::class, 'index'])->name('checkouts');
Route::post('/checkout-cart', [CheckoutController::class, 'checkoutCart'])->name('checkoutCart');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
Route::post('/order/{id}/success', [OrdersController::class, 'markAsSuccess'])->name('order.success');
Route::get('/order/{id}/email', [OrdersController::class, 'sendEmail'])->name('order.email');

Route::get('/clear-cache', static function () {
    Artisan::call('cache:clear');
    return redirect()->back();
})->name('clear-cache');

Route::get('/migrate-db', static function () {
    Artisan::call('migrate');
    return redirect()->back();
})->name('migrate-db');

Route::get('/seed-db', static function () {
    Artisan::call('db:seed');
    return redirect()->back();
})->name('seed-db');
