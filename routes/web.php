<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CouponController;

Route::resource('category',CategoryController::class);
Route::resource('Product',ProductController::class);
Route::resource('coupon',CouponController::class);
Route::resource('address',AddressController::class);
Route::resource('order-item',OrderItemController::class);
Route::resource('order',OrderController::class);


Route::get('/',[HomeController::class,"home"]);
Route::get('/checkout',[HomeController::class,"checkout"]);
Route::get('/view',[HomeController::class,"product_view"]);

//----------------------Admin work-----------------------


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
