<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk.product');
});

Route::get('/kategori', function () {
    return view('produk.category');
});

Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/produk',[ProdukController::class, 'index'])
->name('produk');

Route::get('/produk/delete/{id}',[ProdukController::class,'destroy'])
->name('produkDelete');

Route::get('/produk/tambah',[ProdukController::class,'create'])
->name('tambahProduk');

Route::post('/produk/store',[ProdukController::class,'store']);

Route::get('/kategori',[KategoriController::class, 'index'])
->name('kategori');

Route::get('/kategori/delete/{id}',[KategoriController::class, 'destroy'])
->name('kategoriDelete');

Route::get('/customer',[CustomerController::class, 'index'])
->name('kategori');

Route::get('/customer/delete/{id}',[CustomerController::class, 'destroy'])
->name('customerDelete');
