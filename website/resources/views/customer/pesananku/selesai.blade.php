@extends('layouts.mainMasuk')

@section('akun', '| ' . $nama)

@section('halaman')
<!-- Beranda -->
<div class="container-fluid">
    <div class="row">
        @include('partials.bagCustomer.kiriCustomer')

        <!-- Info Kanan -->
        <div class="menu-kanan col-10 mt-5">
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="container bungkus-1 pt-3" style="border-radius: 25px;">
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="container pt-3">
                                    <ul class="d-flex justify-content-around align-content-center list-judul">
                                        <li>
                                            <a href="/c-pesananku1"
                                                class="{{ $akses == 'pesananku1' ? 'aktif' : '' }}">Dikirim</a>
                                        </li>
                                        <li>
                                            <a href="/c-pesananku2"
                                                class="{{ $akses == 'pesananku2' ? 'aktif' : '' }}">Selesai</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container bungkus-2 mt-3 pb-3" style="border-radius: 25px;">
                        <div class="row">
                            <div class="col-12">

                                @foreach($produks as $produk)

                                <a href="/nota-{{ $produk->id }}" class="text-white" style="text-decoration: none;">
                                    <div class="barang pt-3">
                                        <div class="row text-white">
                                            <div class="col-2 d-flex align-items-center justify-content-center pt-1">
                                                <img src="{{ $produk->produk->gambar }}"
                                                    style="width: 100px; height: 100px;" alt="">
                                            </div>
                                            <div class="col-6 d-flex align-items-center">
                                                <p class="mt-1" style="font-size: 20px;">
                                                    {{ $produk->produk->nama_produk }} <br>
                                                    {{ $produk->jumlah_pesanan }}x
                                                </p>
                                            </div>
                                            <div class="col-4 text-center d-flex align-items-center flex-column">
                                                <p>Harga: {{ $produk->produk->harga_produk * $produk->jumlah_pesanan }}
                                                </p>
                                                <p class="fw-bold">{{ Str::of($produk->status)->upper() }}</p>
                                                <p>Tgl: {{ $produk->pesanan_selesai }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Kanan -->

    </div>
</div>
<!-- Beranda -->
@endsection
