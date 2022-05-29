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
                    <div class="container bungkus-1 pt-3" style="border-radius: 25px;">
                        <div class="row">
                            <div class="col-10 offset-1">
                                <div class="container pt-3">
                                    <ul class="d-flex justify-content-around align-content-center list-judul">
                                        <li>
                                            <p class="pilih text-white fs-1" style="transform: translateY(-1rem);">
                                                Ulasan Produk
                                            </p>
                                        </li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container bungkus-2 mt-3 pb-3" style="border-radius: 25px;">
                        <div class="row">
                            <div class="col-12">

                                @foreach($ulasans as $ulasan)
                                {{-- <a href="/a-nota-{{ $riwayat->id }}_p" style="text-decoration: none;"> --}}

                                <div class="barang pt-3">
                                    <div class="row text-white justify-content-between">
                                        <div class="col-1 d-flex align-content-center justify-content-center p-1 ms-5">
                                            <i class="bi bi-person-fill" style="font-size: 3.2rem;"></i>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <i class="bi bi-star-fill text-warning" style="letter-spacing: 3px;"></i>
                                            <i class="bi bi-star-fill text-warning" style="letter-spacing: 3px;"></i>
                                            <i class="bi bi-star-fill text-warning" style="letter-spacing: 3px;"></i>
                                            <i class="bi bi-star-fill text-warning" style="letter-spacing: 3px;"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <div class="col-7 pt-2 ms-3 text-wrap">
                                            <p>
                                                {{ $ulasan->isi_ulasan }}
                                            </p>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                </div>

                                {{-- </a> --}}
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
@endsection
