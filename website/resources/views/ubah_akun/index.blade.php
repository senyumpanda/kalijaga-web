@extends('layouts.mainMasuk')

@section('akun', '| ' . $nama)

@section('halaman')
<div class="container-fluid">
    <div class="row">
        @include('partials.bagCustomer.kiriCustomer')

        <!-- Info Kanan -->
        <div class="menu-kanan mt-5 ps-5 col-10">
            <div class="bungkus-dalam ms-5 mt-5 w-75">
                <form action="/proses{{ $user->id }}ubah" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="bag-atas">
                        <div class="ket-akun">
                            <div class="row">
                                <div
                                    class="gan-foto col-2 d-flex justify-content-center align-content-center flex-column text-white">
                                    <div class="mx-auto" style="width: 100px; height:100px;">
                                        <i class="bi bi-person-fill d-flex justify-content-center align-content-center flex-column ps-2 pt-2"
                                            style="font-size: 5rem;"></i>
                                    </div>
                                    <p class="text-center">
                                        <a href="">Ganti Foto</a>
                                    </p>
                                </div>
                                <div class="teks-nama col-10 d-flex align-items-center">
                                    <h2>
                                        {{ $user->keterangan }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        </h2>
                    </div>

                    <div class="bag-bawah">

                        <div class="bag-form">
                            <div class="form-floating w-75 mb-3">
                                <input type="text" class="form-control" id="namaDepan" name="namaDepan"
                                    placeholder="Nama Depan" value="{{ $user->nama_depan }}" autocomplete="off"
                                    style="box-shadow:none; border-bottom: 3px solid black;">
                                <label for="namaDepan">Nama Depan</label>
                            </div>
                            <div class="form-floating w-75 mb-3">
                                <input type="text" class="form-control" id="namaBelakang" name="namaBelakang"
                                    placeholder="Nama Belakang" value="{{ $user->nama_belakang }}" autocomplete="off"
                                    style="box-shadow:none; border-bottom: 3px solid black;">
                                <label for="namaBelakang">Nama Belakang</label>
                            </div>
                            <div class="form-floating w-75 mb-4">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" autocomplete="off"
                                    style="box-shadow:none; border-bottom: 3px solid black;">
                                <label for="password">Password baru</label>
                            </div>
                            <div class="form-floating w-75 mb-4">
                                <input type="text" class="form-control" id="password" name="noTelepon"
                                    placeholder="noTelepon" value="{{ $user->no_telepon }}" autocomplete="off"
                                    style="box-shadow:none; border-bottom: 3px solid black;">
                                <label for="noTelepon">No Telepon</label>
                            </div>
                        </div>
                        <div class="tbl">
                            <button type="submit" class="btn btn-custom">
                                Ubah
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Info Kanan -->

    </div>
</div>
@endsection
