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
                                            <a href="/a-pesanan1"
                                                class="pilih {{ $akses_pesanan == 'perlu_dikirim' ? 'aktif' : '' }}">Perlu
                                                Dikirim</a>
                                        </li>
                                        <li>
                                            <a href="/a-pesanan2"
                                                class="pilih {{ $akses_pesanan == 'dikirim' ? 'aktif' : '' }}">Dikirim</a>
                                        </li>
                                        <li>
                                            <a href="/a-pesanan3"
                                                class="pilih {{ $akses_pesanan == 'selesai' ? 'aktif' : '' }}">Selesai</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container bungkus-2 mt-3 pb-3" style="border-radius: 25px;">
                        <div class="row">
                            <div class="col-12">
                                <a href="" style="text-decoration: none;">

                                    @foreach($riwayats as $riwayat)

                                    <div class="barang pt-3">
                                        <div class="row text-white">
                                            <div class="col-2 d-flex align-content-center justify-content-center pt-2">
                                                <img src="{{ $riwayat->produk->gambar }}"
                                                    style="width: 80px; height: 80px;" alt="">
                                            </div>
                                            <div class="col-6">
                                                <p class="mt-4" style="font-size: 20px;">
                                                    {{ $riwayat->produk->nama_produk }} <br>
                                                    {{ $riwayat->jumlah_pesanan }}x
                                                </p>
                                            </div>
                                            <div class="col-4 text-center">
                                                <p>Resi:
                                                    <strong>
                                                        JR9824324GF
                                                    </strong>
                                                </p>
                                                <p>Harga:
                                                    {{ $riwayat->produk->harga_produk * $riwayat->jumlah_pesanan }}</p>
                                                <p>{{ $riwayat->status }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                </a>
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
