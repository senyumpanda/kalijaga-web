<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\RiwayatPenjualan;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index',[
            'fileCSS' => 'css/informasiAkun.css',
            'akses' => '',
            'nama' => 'Customer',
        ]);
    }

    public function keranjang()
    {
        return view('customer.keranjang',[
            'fileCSS' => 'css/customer/keranjang.css',
            'akses' => 'keranjang',
            'nama' => 'Customer',
            'keranjangs' => Keranjang::where('status', '')->get()
        ]);
    }

    public function pesananku1()
    {
        return view('customer.pesananku.dikirim',[
            'fileCSS' => 'css/customer/pesananku.css',
            'akses' => 'pesananku1',
            'nama' => 'Customer',
            'produks' => RiwayatPenjualan::where('status', 'Sedang Dikirim')->get()
        ]);
    }

    public function pesananku2()
    {
        return view('customer.pesananku.selesai',[
            'fileCSS' => 'css/customer/pesananku.css',
            'akses' => 'pesananku2',
            'nama' => 'Customer',
            'produks' => RiwayatPenjualan::where('status', 'Selesai')->get()
        ]);
    }

    public function tambah_keranjang($id_produk, $id_user)
    {
        $akses_akun = User::all()->firstWhere('id', $id_user);
        $akses_produk = Produk::all()->firstWhere('id', $id_produk);

        $tambah_keranjang = [
            'user_id' => $akses_akun->id,
            'produk_id' => $akses_produk->id,
            'jumlah_pesanan' => 1,
            'status' => ''
        ];
        Keranjang::create($tambah_keranjang);
        return redirect('/c-keranjang');
    }

    public function pembayaran()
    {
        return view('customer.pembayaran', [
            'fileCSS' => 'css/pembayaran.css',
            'akses' => 'keranjang',
            'nama' => 'Customer'
        ]);
    }

    public function nota_pembelian($id)
    {
        return view('customer.nota.index', [
            'fileCSS' => 'css/nota.css',
            'akses' => 'keranjang',
            'nama' => 'Customer'
        ]);
    }

}
