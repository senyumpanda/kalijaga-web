<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda.index', [
            "fileCSS" => "css/beranda.css",
            "akun" => ""
        ]);
    }

    public function a_index()
    {
        return view('beranda.index', [
            "fileCSS" => "css/beranda.css",
            "akun" => "Admin",
            "nama" => "Admin"
        ]);
    }

    public function c_index($id)
    {
        return view('beranda.index', [
            "fileCSS" => "css/beranda.css",
            "akun" => "Customer",
            "nama" => "Customer",
            "akses" => ""
        ]);
    }

    public function tentang()
    {
        return view('beranda.tentang',[
            "fileCSS" => "css/tentang.css",
            "akun" => "",
        ]);
    }

    public function c_tentang($id)
    {
        return view('beranda.tentang', [
            "fileCSS" => "css/tentang.css",
            "akun" => "Customer",
            "nama" => "Customer",
            "akses" => "tentang"
        ]);
    }

    public function produk()
    {
        return view('beranda.produk', [
            "fileCSS" => "css/produk.css",
            "akun" => "",
            "produks" => Produk::all(),
        ]);
    }

    public function c_produk($id)
    {
        return view('beranda.produk', [
            "fileCSS" => "css/produk.css",
            "akun" => "Customer",
            "nama" => "Customer",
            "produks" => Produk::all(),
            "akses" => "produk",
            "user" => $id
        ]);
    }

    public function kontak()
    {
        return view('beranda.kontak', [
            "fileCSS" => "css/kontak.css",
            "akun" => ""
        ]);
    }

    public function c_kontak($id)
    {
        return view('beranda.kontak', [
            "fileCSS" => "css/kontak.css",
            "akun" => "Customer",
            "nama" => "Customer",
            "akses" => "kontak"
        ]);
    }

}
