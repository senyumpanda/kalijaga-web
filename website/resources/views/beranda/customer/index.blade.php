@extends('layouts.main')

@section('halaman')
<!-- Beranda -->
<div class="container mt-3">
    <div class="row pt-5 pb-5">
        <!-- Deskripsi Beranda -->
        <div class="col-lg-5 col-md-12 pt-5">
            <div class="sisi-kiri pt-5 mt-5">
                <!-- Teks -->
                <div class="teks text-white mb-3">
                    <h2 class="fw-bold mt-5">
                        Satu-satunya olahan berbahan
                        dasar bunga mawar yang menyehatkan
                    </h2>
                    <p>
                        Kami dari kalijaga akan membuat produk
                        makanan / minuman herbal untuk Anda dan
                        dapat dikonsumsi oleh <br> siapa saja
                    </p>
                </div>
                <!-- Akhir Teks -->

            </div>
        </div>
        <!-- Akhir Deskripsi Beranda -->

        <!-- Produk -->
        <div class="col-lg-6 offset-lg-1 col-md-12">
            <div class="gambar p-3">
                <div id="gambarProduk" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/teh.png" class="d-block w-75 mx-auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/parfum.png" class="d-block w-75 mx-auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../img/teh2.png" class="d-block w-75 mx-auto" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#gambarProduk"
                        data-bs-slide="prev">
                        <div class="tombol-prev pt-2">
                            <i class="bi bi-chevron-left" aria-hidden="true"></i>
                        </div>
                        <!-- <span class="visually-hidden">Previous</span> -->
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#gambarProduk"
                        data-bs-slide="next">
                        <div class="tombol-next pt-2">
                            <i class="bi bi-chevron-right" aria-hidden="true"></i>
                        </div>
                        <!-- <span class="visually-hidden">Next</span> -->
                    </button>
                </div>
            </div>
            <!-- Akhir Produk -->
        </div>
    </div>
</div>
<!-- Akhir Beranda -->
@endsection
