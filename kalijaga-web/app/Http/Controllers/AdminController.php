<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            "fileCSS" => "informasiAkun",
            "nama" => "Admin",
            "akun" => User::all() 
        ]);
    }

    public function produk()
    {
        return view('admin.adminProduk', [
            "fileCSS" => "admin/adminProduk",
            "nama" => "Admin",
            "active" => "produk",
        ]);
    }

    public function penjualan()
    {
        return view('admin.adminDataPenjualan', [
            "fileCSS" => "admin/adminDataPenjualan",
            "nama" => "Admin",
            "active" => "dataPenjualan"
        ]);
    }

    public function pesanan()
    {
        return view('admin.adminPesanan', [
            "fileCSS" => "admin/adminPesanan",
            "nama" => "Admin",
            "active" => "pesanan"
        ]);
    }

}
