@extends('layouts.mainMasuk')

@section('akun', '| ' . $nama)

@section('halaman')
<!-- Beranda -->
<div class="container-fluid">
    <div class="row">
        @include('partials.bagCustomer.kiriCustomer')

        <!-- Info Kanan -->
        <div class="menu-kanan pt-5 col-10">
            <div class="info-akun mt-5">
                <div class="row mt-5 mb-5" style="height:20vh;">
                    <div class="col-6 mt-3 offset-3 text-center">
                        <div class="kotak-foto-akun w-25 mx-auto" style="width: 10vw; height: 20vh;border-radius: 50%;">
                            <i class="bi bi-person-fill text-white" style="width: 100%; font-size: 10rem;"></i>
                        </div>
                    </div>
                </div>
                <div class="row g-0 mt-4">

                    <div class="col-8 ps-4 offset-2">
                        <div class="info ps-4 mt-5 w-50 mx-auto">
                            <div class="info-label">
                                <span>Nama</span>
                                <p>
                                    {{ auth()->user()->nama_depan }} {{ auth()->user()->nama_belakang }}
                                </p>
                            </div>
                            <div class="info-label">
                                <span>Nomor Whatsapp</span>
                                <p>
                                    {{ auth()->user()->no_telepon }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tbl ms-auto w-75">

                {{-- Ubah Akun --}}
                <button type="submit">
                    <a href="/p={{ auth()->user()->id }}">Ubah Akun</a>
                </button>
                {{-- Akhir Ubah Akun --}}

                {{-- Keluar --}}
                <form action="/logout" method="post" class="d-inline">
                    <button type="submit" class="text-white">
                        <i class="bi bi-box-arrow-right"></i>
                        Keluar
                    </button>
                </form>
                {{-- Akhir Keluar --}}
            </div>
        </div>
        <!-- Info Kanan -->
    </div>
</div>
<!-- Beranda -->
@endsection
