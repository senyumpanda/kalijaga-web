@extends('layouts.mainMasuk')

@section('akun', '| ' . $nama)

@section('halaman')
<div class="container-fluid">
    <div class="row">
        @include('partials.bagAdmin.kiriAdmin')

        <!-- Info Kanan -->
        <div class="menu-kanan col-10 mt-5">
            <div class="container bungkus pt-5" style="border-radius: 25px;">
                <div class="produk">
                    <div class="judul mb-5 px-3 d-flex justify-content-between align-items-center">
                        <h3>Daftar Produk</h3>
                        <div class="tmb-produk fw-bold">
                            <i class="bi bi-plus-lg"></i>
                            <a href="/a-produk-tambah">Tambah Produk</a>
                        </div>
                    </div>
                    <div class="bar-produk mt-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-white"></th>
                                    <th class="text-white"></th>
                                    <th class="text-white">Info Produk</th>
                                    <th class="text-white">Harga</th>
                                    <th class="text-white">Stok</th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <!-- Produk -->
                                @foreach($produks as $produk)
                                <tr>
                                    <td class="pt-5 fs-5 text-white" style="width:25px; cursor: pointer;">
                                        <a href="/p-{{  $produk["slug_produk"]  }}" class="text-white">
                                            <i class="bi bi-pencil-square" style="cursor: pointer;"></i>
                                        </a>
                                    </td>
                                    <td class="" style="width: 25px;">
                                        <img src="{{  $produk["gambar"]  }}" alt=""
                                            style="width: 100px; height: 100px;background-color:transparent;">
                                    </td>
                                    <td class="pt-5 text-white">
                                        {{  $produk["nama_produk"]  }}
                                    </td>
                                    <td class="pt-5 text-white">
                                        <p class="border border-2 w-50 px-3 text-center rounded-2 p-2">
                                            Rp{{  $produk["harga_produk"]  }}
                                        </p>
                                    </td>
                                    <td class="pt-5 text-white">
                                        <p class="border border-2 w-50 px-3 text-center rounded-2 p-2">
                                            {{  $produk["stok_produk"]  }}
                                        </p>
                                    </td>
                                </tr>
                                <!-- Akhir Produk -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Info Kanan -->

    </div>
</div>
@endsection
