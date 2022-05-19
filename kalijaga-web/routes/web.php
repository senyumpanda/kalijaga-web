<?php

use App\Models\User;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\ProdukController;
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
    return view('beranda.index', [
        "fileCSS" => "beranda",
    ]);
});

Route::get('/tentang', function () {
    return view('beranda.tentang',[
        "fileCSS" => "tentang",
    ]);
});

Route::get('/produk', function () {
    return view('beranda.produk', [
        "fileCSS" => "produk",
        "produks" => Produk::all(),
    ]);
});

Route::get('/kontak', function () {
    return view('beranda.kontak', [
        "fileCSS" => "kontak",
    ]);
});

/* LOGIN */
Route::get('/masuk', [MasukController::class, 'masuk'])->name('login')->middleware('guest');
Route::post('/masuk', [MasukController::class, 'authenticate'])->middleware('guest');
Route::post('/keluar', [MasukController::class, 'keluar']);

/* DAFTAR */
Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'simpanData']);


/* ADMIN */

// Route::get('/admin', function() {
//     return view('admin.adminAkun', [
//         "fileCSS" => "informasiAkun",
//         "nama" => "Admin"
//     ]);
// });

// Route::get('/adminProduk', function(){
//     return view('admin.adminProduk', [
//         "fileCSS" => "admin/adminProduk",
//         "nama" => "Admin",
//         "aktif" => "produk"
//     ]);
// });

// Route::get('/adminDataPenjualan', function(){
//     return view('admin.adminDataPenjualan', [
//         "fileCSS" => "admin/adminDataPenjualan",
//         "nama" => "Admin",
//         "aktif" => "dataPenjualan"
//     ]);
// });

// Route::get('/adminPesanan', function(){
//     return view('admin.adminPesanan', [
//         "fileCSS" => "admin/adminPesanan",
//         "nama" => "Admin",
//         "aktif" => "pesanan"
//     ]);
// });

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/adminProduk', [AdminController::class, 'produk'])->middleware('auth');
Route::get('/adminDataPenjualan', [AdminController::class, 'penjualan'])->middleware('auth');
Route::get('/adminPesanan', [AdminController::class, 'pesanan'])->middleware('auth');

/* CUSTOMER */

Route::get('/customer', [CustomerController::class, 'index'])->middleware('auth');


Route::get('/{slug}', function ($slug) {
    return view('beranda.customer.index', [
        "fileCSS" => "beranda",
        "nama" => "Customer" 
    ]);
})->middleware('auth');

Route::get('/tentang/{slug}', function ($slug) {
    return view('beranda.tentang', [
        "fileCSS" => "tentang",
        "nama" => "Customer" 
    ]);
})->middleware('auth');

Route::get('/produk/{slug}', function ($slug) {
    return view('beranda.produk', [
        "fileCSS" => "produk",
        "nama" => "Customer" 
    ]);
})->middleware('auth');

Route::get('/kontak/{slug}', function ($slug) {
    return view('beranda.kontak', [
        "fileCSS" => "kontak",
        "nama" => "Customer" 
    ]);
})->middleware('auth');