@extends('layouts.main')

@section('halaman')
<!-- Info Tentang Kami -->
<div class="container-fluid tentang-luar mt-5">
    <div class="container tentang-dalam text-white my-5">
        <div class="kolom-tentang">
            <div class="judul text-center p-5">
                <h1>Kontak Kami</h1>
            </div>
            <div class="teks px-5 pt-5 fs-5">
                <ul class="mt-3 w-75 text-center mx-auto">
                    <li class="mb-3">
                        <h5>Hubungi Kami via:</h5>
                    </li>
                    <div class="area-kontak d-flex justify-content-center">
                        <!-- Area 1 -->
                        <div class="area-satu me-3">
                            <li class="d-flex align-content-center">
                                <i class="bi bi-telegram"></i>
                                <p class="ms-3">+62819-0600-6191</p>
                            </li>
                            <li class="d-flex align-content-center">
                                <i class="bi bi-whatsapp"></i>
                                <p class="ms-3">+62819-0600-6191</p>
                            </li>
                        </div>
                        <!-- Akhir Area 1 -->
                        <!-- Area 2 -->
                        <div class="area-dua ms-3">
                            <li class="d-flex align-content-center">
                                <i class="bi bi-telephone"></i>
                                <p class="ms-3">+62819-0600-6191</p>
                            </li>
                            <li class="d-flex align-content-center">
                                <i class="bi bi-instagram"></i>
                                <p class="ms-3">rosetea.krpvillage</p>
                            </li>
                        </div>
                        <!-- Akhir Area 2 -->
                    </div>
                </ul>
            </div>
        </div>
        <p class="p-ket text-center">*Melayani saat hari kerja</p>
    </div>
</div>
<!-- Akhir Info Tentang Kami -->
@endsection
