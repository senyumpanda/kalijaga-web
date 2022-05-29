<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UlasanController;
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
// Admin - Ulasan
Route::get('/a-ulasan', [UlasanController::class, 'index'])->name('a-ulasan')->middleware('auth');
// Admin - Nota Pesanan 'Perlu Dikirim'
Route::get('/a-nota-{id}_p', [AdminController::class, 'a_nota_pembelian_p'])->name('a-nota_p')->middleware('auth');
Route::post('/a-nota-{id}to_d', [AdminController::class, 'a_proses_pengiriman'])->name('a-nota-to_d')->middleware('auth');
// Admin - Nota Pesanan 'Dikirim'
Route::get('/a-nota-{id}_d', [AdminController::class, 'a_nota_pembelian_d'])->name('a-nota_d')->middleware('auth');
// Admin - Nota Pesanan 'Selesai'
Route::get('/a-nota-{id}_s', [AdminController::class, 'a_nota_pembelian_s'])->name('a-nota_s')->middleware('auth');

// Tambah Ulasan
Route::post('/ulasan_masuk{id}',[UlasanController::class, 'update'])->name('tambah_ulasan')->middleware('auth')
;
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
Route::get('/c-pesananku3', [CustomerController::class, 'pesananku3'])->name('c_pesananku3')->middleware('auth');
// Customer - Nota Pesanan 'Selesai'
Route::get('/c-nota-{id}_s', [CustomerController::class, 'c_nota_pembelian_s'])->name('c-nota_s')->middleware('auth');

// Customer - Simpan Produk di Keranjang
Route::get('/tambah{id_produk}keranjang{id_user}', [CustomerController::class, 'tambah_keranjang'])->name('tambah_keranjang')->middleware('auth');

// Customer - Pembayaran
Route::get('/detail_bayar{id}', [CustomerController::class, 'pembayaran'])->name('detailbayar')->middleware('auth');
Route::post('/proses_bayar-{id}', [CustomerController::class, 'proses_pembayaran'])->name('prosesbayar')->middleware('auth');

// Customer - Keranjang -> (Delete)
Route::get('/del-{id}-keranjang', [KeranjangController::class, 'destroy'])->name('del-keranjang')->middleware('auth');
// Customer - Keranjang -> (CheckOut)
Route::get('/ck-{id}-keranjang', [KeranjangController::class, 'index'])->name('cek-keranjang')->middleware('auth');
Route::post('/ck-{id}-keranjang-simpan', [KeranjangController::class, 'update'])->name('cek-keranjang')->middleware('auth');