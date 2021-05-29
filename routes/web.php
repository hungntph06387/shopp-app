<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

/* Home Page */
Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' =>'protectedPage'], function () {
    Route::get('add-product', [ProductController::class, 'create']);
    Route::get('admin', [AdminController::class, 'admin']);
    Route::get('account-table', [AdminController::class, 'account']);
    Route::get('category-table', [AdminController::class, 'category']);
    Route::get('/home', [AdminController::class, 'home']);
});

Route::get('/login', [AuthController::class, 'loginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/verify', [AuthController::class, 'verifyAccount']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/fail-access', [AuthController::class, 'fail']);



Route::post('save-product', [ProductController::class, 'store']);
Route::get('product/{id}/edit', [ProductController::class, 'edit']);
Route::post('product/{id}', [ProductController::class, 'update']);
Route::get('delete/{id}', [ProductController::class, 'destroy']);
Route::get('/search', [ProductController::class, 'search']);
Route::get('/category/{id}', [ProductController::class, 'category']);
Route::get('/categoryUser/{id}', [ProductController::class, 'categoryUser']);
Route::get('/productDetail/{id}', [ProductController::class, 'detail']);
Route::get('/productDetailU/{id}', [ProductController::class, 'detailU']);

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart']);
Route::get('removeCart', [CartController::class, 'removeCart']);
Route::get('delete-item-cart/{id}', [CartController::class, 'deleteItemCart']);
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/cartU', [CartController::class, 'cartUser'])->name('cartU');
Route::get('/checkout', [CartController::class, 'checkout'])->middleware('protectedCart');
Route::post('/checkout', [CartController::class, 'checkouted']);




