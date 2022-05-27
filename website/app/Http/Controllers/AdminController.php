<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Produk;
use App\Models\Tanggal;
use App\Models\Pembayaran;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\JasaPengiriman;
use App\Models\AksesPembayaran;
use App\Models\AksesPengiriman;
use App\Models\RiwayatPenjualan;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'fileCSS' => 'css/informasiAkun.css',
            'akses' => '',
            'nama' => 'Admin',
        ]);
    }

    // Produk
    public function produk()
    {
        return view('admin.produk.index',[
            'fileCSS' => 'css/admin/produk/style.css',
            'akses' => 'produk',
            'nama' => 'Admin',
            'produks' => Produk::all()
        ]);
    }

    // Tambah Produk
    public function tambah_produk()
    {
        return view('admin.produk.tambah', [
            'fileCSS' => 'css/admin/produk/tambah.css',
            'akses' => 'produk',
            'nama' => 'Admin',
            'pengiriman' => JasaPengiriman::all(),
            'pembayaran' => Pembayaran::all()
        ]);
    }
    
    public function tambah_produk_post(Request $request)
    {
        // dd($request);
        $tambahan = [
            'nama_produk' => $request['namaProduk'],
            'stok_produk' => $request['stokProduk'],
            'harga_produk' => $request['hargaProduk'],
            'deskripsi_produk' => $request['deskripsiProduk'],
            'gambar' => 'img/'. $request['gambarProduk'],
            'slug_produk' => explode(" ",strtolower($request['namaProduk']))[0]
        ];

        // dd($tambahan);
        Produk::create($tambahan);
        return redirect('/a-produk');

    }

    // Ubah Produk
    public function ubah_produk($slug_produk)
    {
        return view('admin.produk.ubah',[
            'fileCSS' => 'css/admin/produk/ubah.css',
            'akses' => 'produk', 
            'nama' => 'Admin',
            'produk' => Produk::all()->firstWhere('slug_produk', $slug_produk),
            'akses_pengiriman' => AksesPengiriman::all()->where('produk_id', Produk::all()->firstWhere('slug_produk', $slug_produk)->id),
            'pengiriman' => JasaPengiriman::all(),
            'akses_pembayaran' => AksesPembayaran::all()->where('produk_id', Produk::all()->firstWhere('slug_produk', $slug_produk)->id),
            'pembayaran' => Pembayaran::all()
        ]);
    }

    public function ubah_produk_post($slug, Request $request)
    {
        // dd($slug, $request, $request['namaProduk'], $request['hargaProduk']);
        $ubah_data = Produk::all()->firstWhere('slug_produk', $slug);
        // dd($ubah_data);
        $perubahan = [
            'nama_produk' => $request['namaProduk'],
            'stok_produk' => $request['stokProduk'],
            'harga_produk'=> $request['hargaProduk'],
            'deskripsi_produk' => $request['deskripsiProduk']
        ];
        $ubah_data->update($perubahan);
        return redirect('/a-produk');
    }

    // Data Penjualan
    public function data_penjualan()
    {
        return view('admin.dataPenjualan',[
            'fileCSS' => 'css/admin/dataPenjualan.css',
            'akses' => 'dataPenjualan',
            'nama' => 'Admin',
            // Untuk 00
            'riwayats' => RiwayatPenjualan::where('status', 'Selesai')->get(),
            'tanggals' => Tanggal::all(),
        ]);
    }

    // Data Penjualan (Data Urut)
    public function penjualan_urut($id)
    {
        return view('hayolo');
    }

    // Pesanan
    public function pesanan1()
    {
        return view('admin.pesanan.perluDikirim',[
            'fileCSS' => 'css/admin/pesanan.css',
            'akses' => 'pesanan',
            'akses_pesanan' => 'perlu_dikirim',
            'nama' => 'Admin',
            'riwayats' => RiwayatPenjualan::where('status', 'Perlu Dikirim')->get()
        ]);
    }
    public function pesanan2()
    {
        return view('admin.pesanan.dikirim',[
            'fileCSS' => 'css/admin/pesanan.css',
            'akses' => 'pesanan',
            'akses_pesanan' => 'dikirim',
            'nama' => 'Admin',
            'riwayats' => RiwayatPenjualan::where('status', 'Sedang Dikirim')->get()
        ]);
    }
    public function pesanan3()
    {
        return view('admin.pesanan.selesai',[
            'fileCSS' => 'css/admin/pesanan.css',
            'akses' => 'pesanan',
            'akses_pesanan' => 'selesai',
            'nama' => 'Admin',
            'riwayats' => RiwayatPenjualan::where('status', 'Selesai')->get()
        ]);
    }

    public function ubah_akun($id)
    {   
        // dd($id);
        return view('ubah_akun.index', [
            'fileCSS' => 'css/ubah_akun/style.css',
            'akses' => '',
            'nama' => 'Admin',
            'user' => User::all()->firstWhere('id', $id)
        ]);
    }

    public function prosesubah(Request $request, $id)
    {
        $akses_akun = User::all()->firstWhere('id', $id);

        $ubah_akun = [
            'nama_depan' => $request->namaDepan,
            'nama_belakang' => $request->namaBelakang,
            'password' => bcrypt($request->password),
            'no_telepon'  => $request->noTelepon,
            'remember_token' => Str::random(60) 
        ];
        $akses_akun->update($ubah_akun);
        if($akses_akun->keterangan === 'Admin')
        {
            return redirect('/admin');
        } 
        else 
        {
            return redirect('/customer');
        }
    }

}
