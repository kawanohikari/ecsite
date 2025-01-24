<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/add', [ProductController::class, 'add']);
Route::post('/product/add', [ProductController::class, 'create']);
Route::get('/product/edit', [ProductController::class, 'edit']);
Route::post('/product/edit', [ProductController::class, 'update']);
Route::get('/product/del', [ProductController::class, 'del']);
Route::post('/product/del', [ProductController::class, 'remove']);

Route::get('/shop', [ShopController::class, 'index']);
Route::get('/shop/cartin', [ShopController::class, 'cartin']);

Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart/calc', [CartController::class, 'calc']);
