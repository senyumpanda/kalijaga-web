<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\JasaPengiriman;
use App\Models\Pembayaran;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data_keranjang = Keranjang::all()->firstWhere('id', $id);
        return view('customer.checkout.belum', [
            'fileCSS' => 'css/customer/checkout.css',
            'akses' => 'keranjang',
            'nama' => 'Customer',
            'jasa_pengirimans' => JasaPengiriman::all(),
            'pembayarans' => Pembayaran::all(),
            'akses_keranjang' => Keranjang::all()->firstWhere('id', $id),
            'produk_pesanan' => Produk::all()->firstWhere('id', $data_keranjang->produk_id),
            'user_pesanan' => User::all()->firstWhere('id', $data_keranjang->user_id),
            'jumlah_pesanan' => $data_keranjang->jumlah_pesanan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show(Keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit(Keranjang $keranjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_keranjang = Keranjang::all()->firstWhere('id', $id);
        $tambah_data = [
            'user_id' => $data_keranjang->user_id,
            'produk_id' => $data_keranjang->produk_id,
            'jumlah_pesanan' => $request->jmlPesanan,
            'status' => ''
        ];
        DB::update('UPDATE keranjangs
                    SET user_id = ?, produk_id = ?, jumlah_pesanan = ?
                    WHERE id = ?', [$data_keranjang->user_id, $data_keranjang->produk_id, $request->jmlPesanan, $id]);
        return redirect('/ck-'.$id.'-keranjang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM keranjangs WHERE id = ?',[$id]);
        return redirect('/c-keranjang');
    }
}
