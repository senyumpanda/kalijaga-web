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
                            <div class="col-12 mt-3 pe-5">
                                <div class="container pt-3">
                                    <ul class="d-flex justify-content-between align-content-center list-judul">
                                        <li class="">
                                            <a href="../customer-keranjang/keranjang.php" class="fs-2">
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="fw-bold ps-5 me-5 fs-2">
                                                Transaksi Selesai
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="btn btn-custom mt-3 text-white">
                                                Beri Penilaian
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 text-white" style="border-bottom:3px dashed #DAA7A7;">
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <img src="../img/parfum.png" alt="" style="width: 80px;height: 100px;">
                            </div>
                            <div class="col-8 pt-4">
                                <h6>Parfum Mawar</h6>
                                <h6>2x</h6>
                            </div>
                            <div class="col-2 pt-4 text-center">
                                <h6>Tgl: 05/03/22</h6>
                                <h4 class="fw-bold">SELESAI</h6>
                            </div>
                        </div>
                        <div class="row mt-4 pb-3 text-center text-white bdr">
                            <h2 class="fw-bold">Alamat Pengiriman</h2>
                            <h5 class="fw-bold">Customer 1</h5>
                            <p class="fs-5">089553211453</p>
                            <p class="w-25 mx-auto">
                                Jl. PK. Bangsa 167, Blok A-29, RT. 014 RW. 005
                                Kec. Banjaran, Kota Kediri, JAWA TIMUR, 64182
                            </p>
                        </div>
                        <div class="row ps-5 py-3 text-white" style="border-bottom: 3px dashed #DAA7A7;">
                            <div class="col-12">
                                <h5>No. Resi:
                                    <strong>
                                        JT9835324357
                                    </strong>
                                </h5>
                            </div>
                            <div class="col-12">
                                <h5>No. Transaksi:
                                    <strong>
                                        FK76431234
                                    </strong>
                                </h5>
                            </div>
                        </div>
                        <div class="row text-white pt-2 " style="height: 2.5rem;">
                            <div class="col-3 pb-0 ms-auto ">
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <h6>Harga Barang:</h6>
                                    </div>
                                    <div class="col-6">
                                        <p class="">16000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white" style="height: 2.2rem;">
                            <div class="col-3 ms-auto">
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <h6>Pengiriman:</h6>
                                    </div>
                                    <div class="col-6">
                                        <p class="">8000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white " style="height: 2.2rem;">
                            <div class="col-3 ms-auto">
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <h6>Total Pesanan:</h6>
                                    </div>
                                    <div class="col-6">
                                        <p class="">24000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white " style="height: 2rem;">
                            <div class="col-4 ms-auto">
                                <div class="row ps-5">
                                    <div class="col-7 text-end ">
                                        <h6>Metode Pembayaran:</h6>
                                    </div>
                                    <div class="col-5">
                                        <p class="">Tunai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white" style="height: 2.2rem;">
                            <div class="col-3 ms-auto">
                                <div class="row">
                                    <div class="col-6 text-end">
                                        <h6>Jasa Kirim:</h6>
                                    </div>
                                    <div class="col-6">
                                        <p class="">
                                            J&T Express
                                        </p>
                                    </div>
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
