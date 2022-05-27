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

    public function pembayaran($id)
    {
        return view('customer.pembayaran', [
            'fileCSS' => 'css/pembayaran.css',
            'akses' => 'keranjang',
            'nama' => 'Customer',
            'barang' => RiwayatPenjualan::all()->firstWhere('id', $id),
            'produk' => Produk::all()->firstWhere('id', RiwayatPenjualan::all()->firstWhere('id', $id)->produk_id) 
        ]);
    }

    public function proses_pembayaran(Request $request, $id)
    {
        $akses_keranjang = Keranjang::all()->firstWhere('id', $id);
        // Riwayat Pemesanan
        $pesanan_dibuat = date('Y-m-d');
        $data_riwayat = [
            'status' => 'Perlu Dikirim',
            'user_id' => $akses_keranjang->user_id,
            'produk_id' => $akses_keranjang->produk_id,
            'jumlah_pesanan' => $akses_keranjang->jumlah_pesanan,
            'alamat' => $request->alamat,
            'jasa_pengiriman' => $request->pilih_pengiriman,
            'pembayaran' => $request->pilih_pembayaran,
            'pesanan_dibuat' => $pesanan_dibuat,
        ];
        RiwayatPenjualan::create($data_riwayat);
        $cari_id_baru = RiwayatPenjualan::all()[RiwayatPenjualan::count() - 1];
        $id_riwayat = RiwayatPenjualan::all()->firstWhere('id',$cari_id_baru->id);
        // dd("MAU BAYAR INI COKK",$id_riwayat, );
        return redirect('/detail_bayar'.$id_riwayat->id);
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
