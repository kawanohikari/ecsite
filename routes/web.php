<?php

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
Route::get('/shop/add', [ShopController::class, 'add']);
Route::post('/shop/add', [ShopController::class, 'create']);
Route::get('/shop/edit', [ShopController::class, 'edit']);
Route::post('/shop/edit', [ShopController::class, 'update']);
Route::get('/shop/del', [ShopController::class, 'del']);
Route::post('/shop/del', [ShopController::class, 'remove']);
