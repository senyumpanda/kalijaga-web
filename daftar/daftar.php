<?php 

require("../connectDB/db.php");
session_start();

if(isset($_POST["daftar"])){

    if(registrasi($_POST) > 0){
        header("Location: ../beranda/beranda.php?c=1");
        exit;
    }

}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>daftar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bb-shadow" style="background-color: #CD7575;">
        <div class="container-fluid">
            <a href="../beranda/beranda.php" class="navbar-brand" style="font-size: 32px;cursor:pointer;">Kalijaga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"
                style="font-size: 16px; padding-right: 5rem;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="../tentang_kami/tentang.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="../produk_kami/produk.php">Produk Kami</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="../kontak_kami/kontak.php">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

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
                    <form action="" method="POST">
                        <!-- Input Data Registrasi -->
                        <div class="input-data mx-4 mb-4">
                            <div class="mb-3">
                                <input autocomplete="off" type="text" class="form-control" id="nama_depan"
                                    placeholder="Nama Depan" name="nama_depan" required>
                            </div>
                            <div class="mb-3">
                                <input autocomplete="off" type="text" class="form-control" id="nama_belakang"
                                    placeholder="Nama Belakang" name="nama_belakang" required>
                            </div>
                            <div class="mb-3">
                                <input autocomplete="off" type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <input autocomplete="off" type="password" class="form-control" id="password"
                                    placeholder="Password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <input autocomplete="off" type="password" class="form-control" id="password2"
                                    placeholder="Konfirmasi Password" name="password2" required>
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
                            <button type="submit" name="daftar" class="tblDaftar">
                                Daftar
                            </button>
                        </div>
                        <!-- Akhir Tombol Daftar -->
                    </form>

                    <!-- Alternative Login -->
                    <div id="emailHelp border-bottom-2" class="form-text text-center">
                        Sudah memiliki akun?
                        <a class="text-black" href="../login/login.php">Masuk</a>
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
                                <img src="../img/teh.png" class="d-block w-75 mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/parfum.png" class="d-block w-75 mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/teh2.png" class="d-block w-75 mx-auto" alt="...">
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
        <!-- Akhir Beranda -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>