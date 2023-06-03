<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home_controller;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\products_controller;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\profileController;
use App\Http\Controllers\place_order_controller;
use App\Http\Controllers\MyOrdersController;
use App\Http\Controllers\category_controller;
use App\Http\Controllers\orders_controller;
use App\Http\Controllers\users_controller;
use App\Http\Controllers\analytics_controller;
use App\Http\Controllers\UploadPrescriptionController;
use Illuminate\Http\Request;
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
Route::get('products/{category_id?}/', [products_controller::class, 'index'])->name('products');
Route::get('products_json', [products_controller::class, 'main'])->name('products_json');
Route::get('analytics', [analytics_controller::class, 'main'])->name('analytics');
Route::get('users', [users_controller::class, 'main'])->name('users');
Route::get('orders', [orders_controller::class, 'main'])->name('orders');
Route::post('edit_product', [products_controller::class, 'edit_product'])->name('edit_product');
Route::post('add_product', [products_controller::class, 'add_product'])->name('add_product');
Route::post('edit_category', [category_controller::class, 'edit_category'])->name('edit_category');
Route::delete('delete_category', [category_controller::class, 'delete_category'])->name('delete_category');
Route::delete('delete_product', [products_controller::class, 'delete_product'])->name('delete_product');
Route::post('add_category', [category_controller::class, 'add_category'])->name('add_category');
Route::get('product/{product_id?}/', [product_controller::class, 'index'])->name('product');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::post('place_order', [place_order_controller::class, 'place_order_controller'])->name('place_order');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::post('/products/{category_id?}/',  [products_controller::class, 'index'])->name('products');
Route::get('/register', function () {return view('auth.register');})->name('register');
Route::get('/profile', [profileController::class, 'index'])->name('profile');
Route::get('/categories', [category_controller::class, 'main'])->name('categories');
Route::get('/cart', function () {return view('cart');})->name('cart');
Route::get('/order_confirmed', function () {return view('order_confirmed');})->name('cart');
Route::get('/my-orders', [MyOrdersController::class,'index'])->name('my-orders');
Route::post('/user/logout', [CustomAuthController::class, 'logout'])->name('user.logout');
Route::get('/user/logout', [CustomAuthController::class, 'logout'])->name('user.logout');


Route::post('/upload-prescription', [UploadPrescriptionController::class, 'uploadPrescription'])->name('upload.prescription');
Route::post('/upload/image', function (Request $request) {
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        // قم بتخزين الصورة وأخذ الإجراءات اللازمة
        return "تم رفع الصورة بنجاح!";
    }
})->name('upload.image');

