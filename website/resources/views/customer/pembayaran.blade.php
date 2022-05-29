@extends('layouts.mainMasuk')

@section('akun', '| ' . $nama)

@section('halaman')
<div class="container-fluid">
    <div class="row">
        @include('partials.bagCustomer.kiriCustomer')

        <!-- Info Kanan -->
        <div class="menu-kanan col-10 mt-5">
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="container bungkus mt-3" style="border-radius: 25px;">
                        <div class="row bdr">
                            <div class="col-12 w-25 mt-3 pe-5">
                                <div class="container pt-3">
                                    <ul class="d-flex justify-content-between align-content-center list-judul">
                                        <li>
                                            <a class="fw-bold ps-3 pe-5 me-5 fs-2">
                                                Pembayaran
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="informasi-pembayaran">
                            <div class="row p-5" style="height: 70vh;">
                                <div class="col-8 offset-2 mx-auto pt-5">
                                    <div class="row text-white pt-3 bdr" style="font-size: 20px;">
                                        <div class="col-6">
                                            <p class="float-start">Total Pembayaran</p>
                                        </div>
                                        <div class="col-6 ">
                                            <p class="float-end">
                                                Rp{{ (($produk->harga_produk * $barang->jumlah_pesanan) + $barang->jasa_pengiriman) + $random_angka }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row text-white pt-3">
                                        <div class="col-12">
                                            <h6 class="">Transfer Bank : {{ $barang->pembayaran }}</h6>
                                        </div>
                                    </div>
                                    <div class="row text-white">
                                        <div class="col-12 ps-5">
                                            <p class="ps-3">No. Rekening:</p>
                                        </div>
                                    </div>
                                    <div class="row text-white">
                                        <div class="col-6 mx-auto text-center py-3">
                                            <h2 class="fw-bold">0895 5321 1453 2453</h2>
                                        </div>
                                    </div>
                                    <div class="row mt-4 mb-5 text-center text-white"
                                        style="border-bottom: 3px dashed #DAA7A7;">
                                        <div class="col-12">
                                            <h6 class="fw-bold">Segera Melakukan Pembayaran 😁😁</h6>
                                        </div>
                                    </div>
                                    <div class="row pt-4" style="height: 2.5rem;">
                                        <a href="/c=true{{ $barang->user_id }}"
                                            class="btn btn-custom w-25 mx-auto text-white fw-bold pt-2">Ok</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Kanan -->

    </div>
</div>
@endsection
