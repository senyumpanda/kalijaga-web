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
                    <div class="container bungkus-luar pt-4" style="border-radius: 35px;">
                        <div class="row">
                            <div class="col-12 g-0">
                                <div class="bungkus-dalam">
                                    <form action="/a-produk-tambah" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Bagian 1 -->
                                        <div class="bag-1 px-5 text-white pb-3 bdr">
                                            <h2>Tambah Produk</h2>
                                        </div>
                                        <!-- Akhir Bagian 1 -->

                                        <!-- Bagian 2 -->
                                        <div class="bag-2 px-5 text-white pb-3 bdr">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="row mt-2">
                                                        <div class="col-4 d-flex align-items-center">
                                                            <label for="uploadGambar">Foto Produk</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="input-group pt-3 mb-3 text-white">
                                                                <input type="file"
                                                                    class="form-control text-white @error('gambarProduk') is-invalid @enderror"
                                                                    id="uploadGambar" autocomplete="off"
                                                                    name="gambarProduk">
                                                                @error('gambarProduk')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 offset-1 bdr">
                                                    <div class="row pt-4">
                                                        <div class="col-4">
                                                            <label for="harga">Harga</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" class="form-control" id="harga"
                                                                autocomplete="off" value="{{ old('hargaProduk') }}"
                                                                name="hargaProduk" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir Bagian 2 -->

                                        <!-- Bagian 3 -->
                                        <div class="bag-3 px-5 text-white py-4 bdr">
                                            <div class="row">
                                                <div class="col-9">
                                                    <div class="row">
                                                        <div class="col-3 d-flex align-items-center">
                                                            <label for="namaProduk">Nama Produk</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text"
                                                                class="form-control @error('namaProduk') is-invalid @enderror"
                                                                id="namaProduk" autocomplete="off"
                                                                value="{{ old('namaProduk') }}" name="namaProduk"
                                                                required>
                                                            @error('namaProduk')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="row">
                                                        <div class="col-3 ps-4 d-flex align-items-center">
                                                            <label for="stokProduk">Stok</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control" name="stokProduk"
                                                                autocomplete="off" value="{{ old('stokProduk') }}"
                                                                id="stokProduk" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir Bagian 3 -->

                                        <!-- Bagian 4 -->
                                        <div class="bag-3 px-5 text-white py-4 bdr">
                                            <div class="row">
                                                <div class="col-3 d-flex align-items-center text-center">
                                                    <label for="jasaPengiriman">Tambah Jasa<br>Pengiriman</label>
                                                </div>
                                                <div class="col-9">

                                                    <button type="button"
                                                        class="btn tblJasaPengiriman btn-primary mt-3 w-100 fs-5"
                                                        data-bs-toggle="modal" name="jasaPengiriman"
                                                        data-bs-target="#jasaPengiriman">
                                                        <i class="bi bi-plus fs-5"></i>
                                                        Tambah Jasa Pengiriman
                                                    </button>

                                                    <div class="modal fade" id="jasaPengiriman" tabindex="-1"
                                                        aria-labelledby="jasaPengirimanLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered text-black">
                                                            <div class="modal-content">
                                                                <div class="modal-body" style="border-radius: 25px;">

                                                                    @foreach($pengiriman as $x)

                                                                    <div class="form-check bdr2 py-2">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="{{ $x->nama_jasa_kirim }}"
                                                                            name="{{ $x->nama_jasa_kirim }}"
                                                                            id="flexCheckDefault">
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault"
                                                                            style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                            {{ $x->nama_jasa_kirim }}
                                                                        </label>
                                                                    </div>

                                                                    @endforeach

                                                                </div>
                                                                <div class="modal-footer border-top-0">
                                                                    <button type="button" name="tambahJasaPengiriman"
                                                                        class="btn btn-custom text-white"
                                                                        data-bs-dismiss="modal">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir Bagian 4 -->

                                        <!-- Bagian 5 -->
                                        <div class="bag-3 px-5 text-white py-4 bdr">
                                            <div class="row">
                                                <div class="col-3 d-flex align-items-center text-center">
                                                    <label for="pembayaran">Tambah<br>Pembayaran</label>
                                                </div>
                                                <div class="col-9">
                                                    <button type="button"
                                                        class="btn tblJasaPembayaran btn-primary mt-3 w-100 fs-5"
                                                        data-bs-toggle="modal" name="jasaPembayaran"
                                                        data-bs-target="#jasaPembayaran">
                                                        <i class="bi bi-plus fs-5"></i>
                                                        Tambah Pembayaran
                                                    </button>

                                                    <div class="modal fade" id="jasaPembayaran" tabindex="-1"
                                                        aria-labelledby="jasaPembayaranLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered text-black">
                                                            <div class="modal-content">
                                                                <div class="modal-body" style="border-radius: 25px;">

                                                                    @foreach($pembayaran as $x)

                                                                    <div class="form-check bdr2 py-2">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            value="{{ $x->nama_pembayaran }}"
                                                                            name="{{ $x->nama_pembayaran }}"
                                                                            id="flexCheckDefault">
                                                                        <label class="form-check-label"
                                                                            for="flexCheckDefault"
                                                                            style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                            {{ $x->nama_pembayaran }}
                                                                        </label>
                                                                    </div>

                                                                    @endforeach

                                                                </div>
                                                                <div class="modal-footer border-top-0">
                                                                    <button type="button" name="tambahPembayaran"
                                                                        class="btn btn-custom text-white"
                                                                        data-bs-dismiss="modal">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir Bagian 5 -->

                                        <!-- Bagian 6 -->
                                        <div class="bag-4 px-5 text-white mb-2 pt-3 pb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="deskripsiProduk">Deskripsi Produk</label>
                                                </div>
                                                <div class="col-9">
                                                    <textarea class="form-control" style="height: 100px; height: 150px;"
                                                        id="deskripsiProduk" name="deskripsiProduk"
                                                        autocomplete="off"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tombol Yakin -->
                                        <div class="bag-akhir w-50 mx-auto">
                                            <button type="submit" class="btn text-white">Tambah
                                                Produk</button>
                                        </div>
                                        <!-- Akhir Tombol Yakin -->

                                        <!-- Akhir Bagian 6 -->
                                    </form>
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
