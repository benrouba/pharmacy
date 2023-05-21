<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home_controller;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\products_controller;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\profileController;
use App\Http\Controllers\place_order_controller;
use App\Http\Controllers\MyOrdersController;

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

Route::get('/', [home_controller::class, 'index']);
//Route::get('/profile', function () {return view('profile');});
// Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('products/{category_id?}/', [products_controller::class, 'index'])->name('products');
Route::get('product/{product_id?}/', [product_controller::class, 'index'])->name('product');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::post('place_order', [place_order_controller::class, 'place_order_controller'])->name('place_order');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::post('/products/{category_id?}/',  [products_controller::class, 'index'])->name('products');

Route::get('/register', function () {return view('auth.register');})->name('register');
// routes/web.php
Route::get('/profile', [profileController::class, 'index'])->name('profile');
Route::get('/cart', function () {return view('cart');})->name('cart');
Route::get('/order_confirmed', function () {return view('order_confirmed');})->name('cart');

Route::get('/my-orders', [MyOrdersController::class,'index'])->name('my-orders');


