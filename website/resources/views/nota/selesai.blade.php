@extends('layouts.mainMasuk')

@section('akun', '| ' . $nama)

@section('halaman')
<div class="container-fluid">
    <div class="row">
        @if($nama === "Admin")
        @include('partials.bagAdmin.kiriAdmin')
        @endif
        @if($nama === "Customer")
        @include('partials.bagCustomer.kiriCustomer')
        @endif

        <!-- Info Kanan -->
        <div class="menu-kanan col-10 mt-5">
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="container bungkus mt-3" style="border-radius: 25px;">
                        <div class="row bdr">
                            <div class="col-12 mt-3 pe-5">
                                <div class="container pt-3">
                                    @if($nama === "Admin")
                                    @if( $riwayats[0]->status === "Perlu Dikirim" )
                                    <ul class="d-flex w-75 justify-content-between align-content-center list-judul">
                                        <li class="">
                                            <a href="/a-pesanan1" class="fs-2">
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="fw-bold pe-5 me-5 fs-2">
                                                Transaksi Selesai
                                            </a>
                                        </li>
                                    </ul>
                                    @endif
                                    @if( $riwayats[0]->status === "Dikirim" )
                                    <ul class="d-flex w-75 justify-content-between align-content-center list-judul">
                                        <li class="">
                                            <a href="/a-pesanan2" class="fs-2">
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="fw-bold pe-5 me-5 fs-2">
                                                Transaksi Selesai
                                            </a>
                                        </li>
                                    </ul>
                                    @endif
                                    @if( $riwayats[0]->status === "Selesai" )
                                    <ul class="d-flex w-75 justify-content-between align-content-center list-judul">
                                        <li class="">
                                            <a href="/a-pesanan3" class="fs-2">
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="fw-bold pe-5 me-5 fs-2">
                                                Transaksi Selesai
                                            </a>
                                        </li>
                                    </ul>
                                    @endif
                                    @elseif($nama === "Customer")
                                    <ul class="d-flex justify-content-between align-content-center list-judul">
                                        <li class="">
                                            <a href="" class="fs-2">
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="fw-bold ps-5 me-5 fs-2">
                                                Transaksi Selesai
                                            </a>
                                        </li>
                                        <li class="">

                                            <form action="/ulasan_masuk{{ $riwayats[0]->id }}" method="post">
                                                @csrf

                                                <button type="button" class="btn btn-custom mt-3 text-white"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                    Beri Penilaian
                                                </button>

                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content p-3">
                                                            <div class="modal-header">
                                                                <p class="modal-title text-center fw-bold fs-3 fst-italic w-100"
                                                                    id="staticBackdropLabel">
                                                                    Beri
                                                                    Penilaian
                                                                </p>
                                                            </div>
                                                            <div class="modal-body">

                                                                {{-- Rate Produk --}}
                                                                <div class="rate-produk d-flex justify-content-between">
                                                                    <p class="pt-1 fw-bold">
                                                                        Rate Produk Kami
                                                                    </p>
                                                                    <div>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill text-warning"></i>
                                                                        <i class="bi bi-star-fill"></i>
                                                                    </div>
                                                                </div>
                                                                {{-- Akhir Rate Produk --}}

                                                                {{-- Ulasan --}}
                                                                <div class="ulasan">
                                                                    <p class="fw-bold">
                                                                        Berikan Ulasan Anda 😁❤️
                                                                    </p>
                                                                    <textarea class="bg-transparent" name="ulasan"
                                                                        id="ulasan" cols="27" rows="10"></textarea>
                                                                </div>
                                                                {{-- Akhir Ulasan --}}

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Ubah</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>

                                        </li>
                                    </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 text-white" style="border-bottom:3px dashed #DAA7A7;">
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <img src="{{ $riwayats[0]->produk->gambar }}" alt=""
                                    style="width: 100px;height: 100px;">
                            </div>
                            <div class="col-8 pt-4">
                                <h6>{{ $riwayats[0]->produk->nama_produk }}</h6>
                                <h6>{{ $riwayats[0]->jumlah_pesanan }}x</h6>
                            </div>
                            <div class="col-2 pt-4 text-center">
                                <h6>Tgl: {{ $riwayats[0]->pesanan_dibuat }}</h6>
                                <h4 class="fw-bold">{{ Str::of($riwayats[0]->status)->upper() }}</h6>
                            </div>
                        </div>
                        <div class="row mt-4 pb-3 text-center text-white bdr">
                            <h2 class="fw-bold">Alamat Pengiriman</h2>
                            <h5 class="fw-bold">{{ $riwayats[0]->user->nama_depan }}
                                {{ $riwayats[0]->user->nama_belakang }}</h5>
                            <p class="fs-5">{{ $riwayats[0]->user->no_telepon }}</p>
                            <p class="w-25 mx-auto">
                                {{ $riwayats[0]->alamat }}
                            </p>
                        </div>
                        <div class="row ps-5 py-3 res-tran text-white">
                            <div class="col-12">
                                <h6>No. Transaksi:
                                    <strong>
                                        {{ $riwayats[0]->no_transaksi }}
                                    </strong>
                                </h6>
                            </div>
                            <div class="col-12">
                                <h6>No. Resi:
                                    <strong>
                                        {{ $riwayats[0]->no_resi }}
                                    </strong>
                                </h6>
                            </div>
                        </div>
                        <div class="row text-white pt-3" style="height: 3rem; font-weight: 600;">
                            <div class="col-3 ms-auto ">
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <p>Harga Barang:</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="">{{ $riwayats[0]->produk->harga_produk }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white" style="height: 2.2rem; font-weight: 600;">
                            <div class="col-3 ms-auto">
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <p>Pengiriman:</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="">{{ $riwayats[0]->jasa_pengiriman }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white " style="height: 2.2rem; font-weight: 600;">
                            <div class="col-3 ms-auto">
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <p>Total Pesanan:</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="">
                                            {{ ($riwayats[0]->produk->harga_produk * $riwayats[0]->jumlah_pesanan) + $riwayats[0]->jasa_pengiriman }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white" style="height: 2rem; font-weight: 600;">
                            <div class="col-4 ms-auto">
                                <div class="row ps-5">
                                    <div class="col-7 text-end ">
                                        <p>Metode Pembayaran:</p>
                                    </div>
                                    <div class="col-5">
                                        <p class="">Transfer Bank</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white" style="height: 2.2rem; font-weight: 600;">
                            <div class="col-3 ms-auto">
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <p>Jasa Kirim:</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="">
                                            {{ $jasa_kirim }}
                                        </p>
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
