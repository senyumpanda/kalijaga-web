@extends('layouts.mainMasuk')

@section('akun', '| ' . $nama)

@section('halaman')
<div class="container-fluid">
    <div class="row">
        @include('partials.bagAdmin.kiriAdmin')

        <!-- Info Kanan -->
        <div class="menu-kanan col-10 mt-5">
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="container bungkus pt-5 pb-3" style="border-radius: 25px;">
                        <div class="bag-1 px-5 text-white mb-3 fw-bold fs-2">
                            <div class="halaman d-flex justify-content-between align-items-center">
                                <h2 class="fw-bold d-inline">Data Penjualan Produk</h2>
                                <a href="" class="btn text-white" style="width: 13.5rem; 
                                    height: 3rem; 
                                    padding-top: 0.7rem; 
                                    color: white; 
                                    background-color: #A95E5E; 
                                    border-radius: 15px; 
                                    transition: 0.5 ease; 
                                    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.5); 
                                    transform: translateY(0)" onmouseout="normal_grafik(this)"
                                    onmouseover="hover_grafik(this)">
                                    <i class="bi bi-graph-up"></i>
                                    Grafik Penjualan
                                </a>
                            </div>
                        </div>
                        <div class="bag-2 order">
                            <select class="form-select" aria-label="Default select example" id="tanggal_penjualan">
                                <option value=0>Pilih Bulan...</option>
                                @foreach($tanggals as $x => $value)
                                <option value="{{ $value['id'] }}">{{ $value['nama_bulan'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="bungkus-produk" id="bungkus_produk">
                            @foreach($riwayats as $riwayat)

                            <div class=" bag-3 pt-2 mb-1">
                                <div class="row text-white">
                                    <div class="col-2 d-flex align-content-center justify-content-center pt-2">
                                        <img src="{{ $riwayat->produk->gambar }}" style="width: 80px; height: 80px;"
                                            alt="">
                                    </div>
                                    <div class="col-6">
                                        <p class="mt-4" style="font-size: 20px;">
                                            {{ $riwayat->produk->nama_produk }} <br>
                                            {{ $riwayat->jumlah_pesanan }}
                                        </p>
                                    </div>
                                    <div class="col-4 text-center mt-2">
                                        <p class="mb-1" style=".5rem;">Harga:
                                            {{ $riwayat->produk->harga_produk * $riwayat->jumlah_pesanan }}</p>
                                        <p class="fw-bold mb-1">{{ $riwayat->status }}</p>
                                        <p class="mb-1">Tgl: {{ $riwayat->pesanan_selesai }}</p>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Info Kanan -->

    </div>
</div>
@endsection
