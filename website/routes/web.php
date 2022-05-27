<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\RegistrasiController;


/* BERANDA - NO AKUN */

// Beranda - Home
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
// Beranda - Tentang
Route::get('/tentang', [BerandaController::class, 'tentang'])->name('beranda');
// Beranda - Produk
Route::get('/produk', [BerandaController::class, 'produk'])->name('beranda');
// Beranda - Kontak
Route::get('/kontak', [BerandaController::class, 'kontak'])->name('beranda');

/* BERANDA - AKUN */

// Admin
Route::get('/a=true', [BerandaController::class, 'a_index'])->name('aberanda')->middleware('auth');
// Customer
Route::get('/c=true{id}', [BerandaController::class, 'c_index'])->name('cberanda')->middleware('auth');
Route::get('/c-tentang{id}', [BerandaController::class, 'c_tentang'])->name('ctentang')->middleware('auth');
Route::get('/c-produk{id}', [BerandaController::class, 'c_produk'])->name('cproduk')->middleware('auth');
Route::get('/c-kontak{id}', [BerandaController::class, 'c_kontak'])->name('ckontak')->middleware('auth');

/* AKSES AKUN - LOGIN & REGISTRASI */

// Login - Home
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

// Registrasi - Home
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');

// Logout 
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

/* AKUN - ADMIN & CUSTOMER */

// Admin - Home
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
// Admin - Produk
Route::get('/a-produk', [AdminController::class, 'produk'])->name('a-produk')->middleware('auth');
// Admin - Produk -- Tambah Produk
Route::get('/a-produk-tambah', [AdminController::class, 'tambah_produk'])->name('a-produk-tambah')->middleware('auth');
Route::post('/a-produk-tambah', [AdminController::class, 'tambah_produk_post'])->name('a-produk-tambah-post')->middleware('auth');
// Admin - Data Penjualan
Route::get('/a-datapenjualan', [AdminController::class, 'data_penjualan'])->name('a-datapenjualan')->middleware('auth');
Route::get('/datapenjualan-urut?t={id}', [AdminController::class, 'penjualan_urut'])->name('datapenjualan-urut')->middleware('auth'); // Tanggal
// Admin - Pesanan
Route::get('/a-pesanan1', [AdminController::class, 'pesanan1'])->name('a-pesanan1')->middleware('auth');
Route::get('/a-pesanan2', [AdminController::class, 'pesanan2'])->name('a-pesanan2')->middleware('auth');
Route::get('/a-pesanan3', [AdminController::class, 'pesanan3'])->name('a-pesanan3')->middleware('auth');

// Ubah Akun
Route::get('/p={id}', [AdminController::class, 'ubah_akun'])->name('ubahakun')->middleware('auth');
Route::post('/proses{id}ubah', [AdminController::class, 'prosesubah'])->name('prosesubah')->middleware('auth');
//

// Admin - Produk -- Edit / Ubah Produk
Route::get('/p-{slug_produk}', [AdminController::class, 'ubah_produk'])->name('ubahproduk')->middleware('auth');
// Eksekusi Merubah Data
Route::put('/p-{slug_produk}', [AdminController::class, 'ubah_produk_post'])->name('ubahprodukpost')->middleware('auth'); 

// Customer - Home
Route::get('/customer', [CustomerController::class, 'index'])->name('customer')->middleware('auth');
// Customer - Keranjang
Route::get('/c-keranjang', [CustomerController::class, 'keranjang'])->name('c_keranjang')->middleware('auth');
// Customer - Pesananku
Route::get('/c-pesananku1', [CustomerController::class, 'pesananku1'])->name('c_pesananku1')->middleware('auth');
Route::get('/c-pesananku2', [CustomerController::class, 'pesananku2'])->name('c_pesananku2')->middleware('auth');
// Customer - Nota Pesanan Selesai
Route::get('/nota-{id}', [CustomerController::class, 'nota_pembelian'])->name('nota')->middleware('auth');

// Customer - Simpan Produk di Keranjang
Route::get('/tambah{id_produk}keranjang{id_user}', [CustomerController::class, 'tambah_keranjang'])->name('tambah_keranjang')->middleware('auth');

// Customer - Pembayaran
Route::get('/bayar_produk#{id}0?', [CustomerController::class, 'pembayaran'])->name('bayarproduk')->middleware('auth');

// Customer - Keranjang -> (Delete)
Route::get('/del-{id}-keranjang', [KeranjangController::class, 'destroy'])->name('del-keranjang')->middleware('auth');
// Customer - Keranjang -> (CheckOut)
Route::get('/ck-{id}-keranjang', [KeranjangController::class, 'index'])->name('cek-keranjang')->middleware('auth');
