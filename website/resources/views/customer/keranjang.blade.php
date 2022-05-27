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
                            <div class="col-12 w-75 pe-5">
                                <div class="container pt-2">
                                    <ul class="d-flex justify-content-between align-content-center list-judul">
                                        <li>
                                            <a href="/c-produk{{ auth()->user()->id }}" class="fs-2">
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="fw-bold pe-5 me-5 fs-2">
                                                Keranjang Belanja
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container bungkus-2 mt-3" style="border-radius: 25px;">
                        <div class="row">
                            <div class="col-12">

                                @foreach($keranjangs as $keranjang)
                                <form action="/ck-{{ $keranjang->id }}-keranjang-simpan" method="post">
                                    @csrf
                                    <div class="barang pt-3" id="item_produk">
                                        <div class="row text-white">
                                            <div
                                                class="col-1 h-50 my-auto ps-4 d-flex justify-content-center align-items-center fs-4 border-end">
                                                <a href="/del-{{ $keranjang->id }}-keranjang" class="text-white"
                                                    style="text-decoration: none;">
                                                    <i class="bi bi-trash" id="hapus{{ $keranjang->id }}"
                                                        style="cursor: pointer;"></i>
                                                </a>
                                            </div>
                                            <div
                                                class="col-1 d-flex m-2 mb-1 align-content-center justify-content-center pt-2">
                                                <img src="{{ $keranjang->produk->gambar }}"
                                                    style="width: 80px; height: 80px;" alt="">
                                            </div>
                                            <div class="col-3">
                                                <p class="mt-4" style="font-size: 20px;">
                                                    {{ $keranjang->produk->nama_produk }} <br>
                                                </p>
                                            </div>
                                            <div
                                                class="col-2 d-flex justify-content-center align-items-center text-center">
                                                <p class="fw-bold mt-2">Harga: {{ $keranjang->produk->harga_produk }}
                                                </p>
                                            </div>
                                            <div
                                                class="col-2 d-flex justify-content-center align-items-center text-center">
                                                <div class="input-group mb-3 pt-2">
                                                    <span class="input-group-text bg-white btn" ,
                                                        style="color:#A95E5E;">
                                                        <i class="bi bi-dash fs-5"
                                                            onclick="minus_pesanan({{ $keranjang->id }})"
                                                            id="minus{{ $keranjang->id }}"></i>
                                                    </span>
                                                    <input type="text"
                                                        class="form-control text-center text-white bg-transparent"
                                                        name="jmlPesanan" aria-label="Amount (to the nearest dollar)"
                                                        id="jml_pesanan{{ $keranjang->id }}"
                                                        value="{{ $keranjang->jumlah_pesanan }}">
                                                    <span class="input-group-text bg-white btn" ,
                                                        style="color:#A95E5E;">
                                                        <i class="bi bi-plus fs-5"
                                                            onclick="plus_pesanan({{ $keranjang->id }})"
                                                            id="plus{{ $keranjang->id }}"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-2 d-flex justify-content-center align-items-center text-center text-center">
                                                <button type="submit" style="background-color: transparent; border: 0;">
                                                    <a class="mt-2 btn btn-custom text-white fw-bold fs-5 px-4">
                                                        Checkout
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

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
