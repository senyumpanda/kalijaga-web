@extends('layouts.main')

@section('halaman')
<!-- Beranda -->
<div class="container mt-3">
    <div class="row pt-5 pb-5">
        <!-- Registrasi -->
        <div class="col-lg-4 offset-lg-1 col-md-12 kol-reg">
            <div class="kolom-registrasi bg-white p-4 d-flex justify-content-evenly flex-column">
                <div class="container judul-registrasi">
                    <div class="teks-registrasi">
                        <h2 class="text-black mt-1">Registrasi</h2>
                        <p id="emailHelp" class="form-text">Mohon isi form dibawah untuk membuat akun
                        </p>
                    </div>
                </div>

                @if(session()->has('regisGagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('regisGagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="/registeruser" method="post">
                    @csrf
                    <!-- Input Data Registrasi -->
                    <div class="input-data mx-4 mb-4">
                        <div class="mb-3">
                            <input autocomplete="off" type="text"
                                class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan"
                                placeholder="Nama Depan" name="nama_depan" required value="{{ old('nama_depan') }}">
                            @error('nama_depan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input autocomplete="off" type="text"
                                class="form-control @error('nama_belakang') is-invalid @enderror" id="nama_belakang"
                                placeholder="Nama Belakang" name="nama_belakang" required
                                value="{{ old('nama_belakang') }}">
                            @error('nama_belakang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input autocomplete="off" type="email"
                                class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email"
                                name="email" required value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input autocomplete="off" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" name="password" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input autocomplete="off" type="password"
                                class="form-control @error('password2') is-invalid @enderror" id="password2"
                                placeholder="Konfirmasi Password" name="password2" required>
                            @error('password2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-check" style="color: #979797;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Saya akan menerima syarat penggunaan dan kebijakan privasi
                            </label>
                        </div>
                    </div>
                    <!-- Akhir Input Data Registrasi -->

                    <!-- Tombol Daftar -->
                    <div class="tombol mb-3">
                        <button type="submit" class="tblDaftar">
                            Daftar
                        </button>
                    </div>
                    <!-- Akhir Tombol Daftar -->
                </form>

                <!-- Alternative Login -->
                <div id="emailHelp border-bottom-2" class="form-text text-center">
                    Sudah memiliki akun?
                    <a class="text-black" href="/login">Masuk</a>
                </div>
                <!-- Akhir Alternative Login -->
            </div>
        </div>
        <!-- Akhir Registrasi -->

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
