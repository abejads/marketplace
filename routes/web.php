<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;


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


// Index and Product view 

Route::get('/', [ProductController::class, 'index']);

Route::get('/products', [ProductController::class, 'products']);

Route::get('/products/{product:nama_produk}', [ProductController::class, 'details']);


// Account, etc view

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
ROute::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/account', [AccountController::class, 'index'])->middleware('auth');


// cart, checkout view

Route::get('/cart', [CartController::class, 'index'])->middleware('auth');

Route::post('/cart', [CartController::class, 'add'])->middleware('auth');


Route::get('/checkout', [CheckoutController::class, 'index'])->middleware('auth');

Route::post('/checkout', [CheckoutController::class, 'buy'])->middleware('auth');




