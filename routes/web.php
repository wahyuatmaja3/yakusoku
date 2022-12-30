<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [homeController::class, 'index']);
Route::get('/komik/{slug}', [homeController::class, 'single']);

Route::get('/cart', [cartController::class, 'index']);
Route::post('/cart/tambah', [cartController::class, "tambah"])->middleware('auth');
Route::get('/cart/hapus/{id}', [cartController::class, "hapus"]);

// Route::get('/cart/tambah/{id}', [cartController::class, 'tambah'])->where("id", "[0-9]+")->middleware('auth');

Route::resource('user', UserController::class);
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

Route::get("/admin", function() {
    return view("admin.index");
});

Route::get("/transaksi", [cartController::class, 'tambahTransaksi']);

Route::get("/checkout/information", [checkoutController::class, 'information']);
Route::get("/checkout/shipping", [checkoutController::class, 'shipping']);
Route::get("/checkout/payment", [checkoutController::class, 'payment']);
Route::get("/checkout/proses", [checkoutController::class, 'proses']);
Route::post("/checkout/tambah", [checkoutController::class, 'storage']);