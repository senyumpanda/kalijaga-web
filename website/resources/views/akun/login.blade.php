@extends('layouts.main')

@section('halaman')
<!-- Beranda -->
<div class="container mt-3">
    <div class="row pt-5 pb-5">
        <!-- Masuk -->
        <div class="col-lg-4 offset-lg-1 col-md-12 kol-mas">
            <div class="kolom-masuk bg-white p-4 d-flex justify-content-evenly flex-column">

                <form action="/loginproses" method="post">
                    @csrf
                    <div class="container judul-masuk">
                        <div class="teks-masuk">
                            <h2 class="text-black mb-5 mt-1">Masuk</h2>
                        </div>
                    </div>

                    @if(session()->has('regisSukses'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{  session('regisSukses')  }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif()

                    @if(session()->has('loginGagal'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{  session('loginGagal')  }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif()

                    <!-- Input Data Masuk -->
                    <div class="input-data mx-2 mb-4 mt-3">

                        {{-- Email --}}
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="name@domain.com">
                            <label for="email">Email</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password">
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!-- Akhir Input Data Masuk -->

                    <!-- Alternative Daftar -->
                    <div id="emailHelp border-bottom-2" class="form-text text-center mt-3 mb-3">
                        Belum memiliki akun?
                        <a class="text-black" href="/register">Daftar</a>
                    </div>
                    <!-- Akhir Alternative Daftar -->

                    <!-- Tombol Masuk -->
                    <div class="tombol mt-53">
                        <button type="submit" class="tblMasuk">
                            <span>Masuk</span>
                        </button>
                    </div>
                    <!-- Akhir Tombol Masuk -->
                </form>

            </div>
        </div>
        <!-- Akhir Masuk -->

        <!-- Produk -->
        <div class="col-lg-6 offset-lg-1 col-md-12">
            <div class="gambar p-5">
                <div id="gambarProduk" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src='{{ asset('img/teh.png') }}' class="d-block w-75 mx-auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src='{{ asset('img/parfum.png') }}' class="d-block w-75 mx-auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src='{{ asset('img/teh2.png') }}' class="d-block w-75 mx-auto" alt="...">
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
