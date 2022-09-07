<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
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
//page
Route::get('home', [ClientController::class, 'showHome']);
Route::get('collect', [ClientController::class, 'showCollection']);

// admin lte
Route::get('dashboard', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('promo', [HomeController::class, 'showPromo']);
Route::get('pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('supplier', [HomeController::class, 'showSupplier']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});


//login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
