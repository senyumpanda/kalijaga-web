@extends('layouts.mainMasuk')

@section('akun', '| ' . $nama)

@section('halaman')
<div class="container-fluid">
    <div class="row">
        @include('partials.bagCustomer.kiriCustomer')

        <!-- Info Kanan -->
        <div class="menu-kanan col-10 mt-5">
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="container bungkus mt-3" style="border-radius: 25px;">
                        <div class="row bdr">
                            <div class="col-12 w-75 mt-3 pe-5">
                                <div class="container pt-3">
                                    <ul class="d-flex justify-content-between align-content-center list-judul">
                                        <li>
                                            <a href="/c-keranjang" class="fs-2">
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="fw-bold pe-5 me-5 fs-2">
                                                Transaksi Checkout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="row bdr">
                            <div class="col-3 pt-4 text-center text-white">
                                <div class="row">
                                    <i class="bi bi-geo-alt-fill fw-bold">
                                        Alamat Pengiriman
                                    </i>
                                </div>
                                <div class="row">
                                    <h6>
                                        <strong>
                                            {{ $user_pesanan->nama_depan }} {{ $user_pesanan->nama_belakang }}
                                        </strong>
                                    </h6>
                                    <br>
                                    <p>
                                        {{ $user_pesanan->no_telepon }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-8 offset-1 p-3">
                                <div class="row p-3">
                                    <div class="col-2 my-auto text-white" style="font-size:20px;">
                                        <label class="ps-5" for="alamatCheckOut">Alamat:</label>
                                    </div>
                                    <div class="col-8 offset-1">
                                        <input type="text" class="form-control" name="Alamat" id="alamatCheckOut"
                                            style="height: 66px;" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Alamat Akhir -->
                        <!-- Ket -->
                        <div class="row px-5 text-white pt-3">
                            <div class="col-6">
                                <h6>Produk Dipesan:</h6>
                            </div>
                            <div class="col-2">
                                <h6>Harga Satuan:</h6>
                            </div>
                            <div class="col-2">
                                <h6>Jumlah:</h6>
                            </div>
                            <div class="col-2">
                                <h6>Subtotal Produk:</h6>
                            </div>
                        </div>
                        <!-- Akhir Ket -->
                        <!-- Ket-Produk -->
                        <div class="row text-white" style="border-bottom: 3px dashed #DAA7A7;">
                            <div class="col-1 ps-4">
                                <img src="{{ asset($produk_pesanan->gambar) }}" alt=""
                                    style="width: 100px; height: 100px;">
                            </div>
                            <div class="col-5 ps-4 d-flex align-items-center">
                                <h5 style="font-weight: 500;">{{ $produk_pesanan->nama_produk }}</h5>
                            </div>
                            <div class="col-2 ps-4 d-flex align-items-center">
                                <p id="ck_hargaProduk">Rp{{ $produk_pesanan->harga_produk }}</p>
                            </div>
                            <div class="col-1 d-flex align-items-center">
                                <p class="ps-2" id="ck_jmlPesanan">
                                    {{ $jumlah_pesanan }}
                                </p>
                            </div>
                            <div class="col-1 offset-1 d-flex align-items-center">
                                Rp{{ $produk_pesanan->harga_produk * $jumlah_pesanan }}
                            </div>
                        </div>
                        <!-- Akhir Ket-Produk -->
                        <div class="row pt-4">
                            <div class="col-6 offset-2 ms-auto">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center text-white">
                                        <h6>Opsi Pengiriman:</h6>
                                    </div>
                                    <div class="col-3">
                                        <select id="pilihPengiriman" class="form-select" name="pilih_pengiriman"
                                            aria-label="Default select example">
                                            <option value=0>Pilih</option>
                                            @foreach($jasa_pengirimans as $x)
                                            <option value="{{ $x->biaya_jasa_kirim }}">{{ $x->nama_jasa_kirim }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3 offset-1 d-flex align-items-center text-white">
                                        <h6 id="harga_pengiriman">
                                            Rp0
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3" style="border-bottom: 3px dashed #DAA7A7;">
                            <div class="col-6 offset-2 ms-auto">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center ps-5 text-white text-center">
                                        <h6>No. Transaksi:</h6>
                                    </div>
                                    <div class="col-3 text-white text-center">
                                        <h6 class="fw-bold">
                                            {{ Str::of(Str::random(12))->upper() }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3 text-white bdr">
                            <div class="col-2 ms-auto">
                                <h6 class="ps-3">Total Pesanan</h6>
                            </div>
                            <div class="col-2">
                                <h6 id="total_pesanan">
                                    Rp0
                                </h6>
                            </div>
                        </div>
                        <div class="row py-3 text-white">
                            <div class="col-3 ms-auto d-flex align-items-center">
                                <h5 class="ms-auto">Metode Pembayaran</h5>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <h6 class="ps-3">Transfer Bank:</h6>
                            </div>
                            <div class="col-2 me-3">
                                <select id="pilihPembayaran" class="form-select" aria-label="Default select example">
                                    <option value="-">Pilih</option>
                                    @foreach($pembayarans as $x)
                                    <option value="{{ $x->nama_pembayaran }}">{{ $x->nama_pembayaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Belum Bayar -->
                        <div class="row pt-5 mt-2">
                            <div class="col-2 ps-5 ms-auto">
                                <a href="/bayar_produk#{{  }}0?" name="buatPesanan"
                                    class="btn btn-custom ms-5 ms-auto text-white">
                                    Buat Pesanan
                                </a>
                            </div>
                        </div>
                        <!-- Akhir Belum Bayar -->

                        <!-- Sudah Bayar -->
                        {{-- <div class="row pt-5 mt-2">
                            <div class="col-2 ps-5 ms-auto">
                                <a href="../customer-melakukan-pembayaran(2)/sudah_bayar.php" name="buatPesanan"
                                    class="btn btn-custom ms-5 ms-auto text-white">
                                    Cek Pesanan
                                </a>
                            </div>
                        </div> --}}
                        <!-- Akhir Sudah Bayar -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Info Kanan -->

    </div>
</div>
@endsection
