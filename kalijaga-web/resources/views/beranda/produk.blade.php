@extends('layouts.main')

@section('halaman')
<!-- Info Produk Kami -->
<div class="container-fluid tentang-luar mt-5">
    @foreach($produks as $produk)
    @if($produk["id_produk"] % 2 != 0)
    <!-- Produk ID Ganjil -->
    <div class="container tentang-dalam text-white my-5">
        <div class="kolom-tentang">
            <div class="row p-3">
                <div class="col-6 ps-5 mt-2">
                    <h2 class="text-center fw-bold judul-produk p-3">{{ $produk["nama_produk"] }}</h2>
                    <h3 class="mt-3 fw-bold">
                        Satu-satunya olahan teh <br>
                        berbahan dasar bunga mawar <br>
                        yang menyehatkan
                    </h3>
                    <p class="mt-3">
                        {{ $produk["deskripsi_produk"] }}
                    </p>
                    <div class="tombol-produk mt-4 w-75 mx-auto d-flex justify-content-between">
                        <button type="submit" name="beli">
                            <span>
                                @if(Request::is('c'))
                                <a href="/{{ $produk["slug"] }}">Beli</a>
                                @else
                                <a href="/masuk">Beli</a>
                                @endif
                            </span>
                        </button>
                        <div class="rating">
                            <div>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill">
                                    <span>264</span>
                                </i>
                            </div>
                            <div class="ulasan">
                                <a href="">
                                    Lihat Ulasan Produk
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 offset-1 d-flex justify-content-center align-content-center mt-5 gbr">
                    <img src="{{ $produk["gambar"] }}" class="mt-3" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Produk ID Ganjil -->
    @else
    <!-- Produk ID Genap -->
    <div class="container tentang-dalam text-white my-5">
        <div class="kolom-tentang">
            <div class="row p-3">
                <div class="col-6 d-flex justify-content-center align-content-center mt-5 gbr">
                    <img src="{{ $produk["gambar"] }}" class="mt-3" alt="">
                </div>
                <div class="col-6 ps-5 mt-2">
                    <h2 class="text-center fw-bold judul-produk p-3">{{ $produk["nama_produk"] }}</h2>
                    <h3 class="mt-3 fw-bold">
                        Satu-satunya olahan teh <br>
                        berbahan dasar bunga mawar <br>
                        yang menyehatkan
                    </h3>
                    <p class="mt-3">
                        {{ $produk["deskripsi_produk"] }}
                    </p>
                    <div class="tombol-produk mt-4 w-75 mx-auto d-flex justify-content-between">
                        <button type="submit" name="beli">
                            <span>
                                @if(Request::is('c'))
                                <a href="/{{ $produk["slug"] }}">Beli</a>
                                @else
                                <a href="/masuk">Beli</a>
                                @endif
                            </span>
                        </button>
                        <div class="rating">
                            <div>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill">
                                    <span>264</span>
                                </i>
                            </div>
                            <div class="ulasan">
                                <a href="">
                                    Lihat Ulasan Produk
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Produk ID Genap -->
    @endif
    @endforeach()
</div>
<!-- Akhir Info Produk Kami -->
@endsection
