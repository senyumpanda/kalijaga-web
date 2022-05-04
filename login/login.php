<?php 
require("../connectDB/db.php");
session_start();

if(isset($_POST["masuk"])){

    // admin
    if(masuk($_POST) == 1){
        header("Location: ../beranda/beranda.php?a=1");
        exit;
    }

    // customer
    else if(masuk($_POST) == 2){
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
    <title>login</title>
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
                    <?php if($_SESSION["admin"]) : ?>
                    <li class="nav-item">
                        <a class="text-white" href="../admin/admin.php">
                            <div class="kotak-foto me-2 text-center"
                                style="width: 30px; height:30px;margin-bottom: 1.8rem;">
                                <i class="bi bi-person-fill fs-1"></i>
                            </div>
                        </a>
                    </li>
                    <?php endif;  ?>

                    <?php if($_SESSION["customer"]) : ?>
                    <li class="nav-item">
                        <a class="text-white" href="../customer/customer.php">
                            <div class="kotak-foto me-2 text-center"
                                style="width: 30px; height:30px;margin-bottom: 1.8rem;">
                                <i class="bi bi-person-fill fs-1"></i>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Beranda -->
    <div class="container mt-3">
        <div class="row pt-5 pb-5">
            <!-- Masuk -->
            <div class="col-lg-4 offset-lg-1 col-md-12 kol-mas">
                <div class="kolom-masuk bg-white p-4 d-flex justify-content-evenly flex-column">
                    <form action="" method="POST">
                    <div class="container judul-masuk">
                            <div class="teks-masuk">
                                <h2 class="text-black mb-5 mt-1">Masuk</h2>
                            </div>
                        </div>
                        <!-- Input Data Masuk -->
                        <div class="input-data mx-2 mb-4 mt-3">
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="email" name="email"
                                    autocomplete="off" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password" name="password"
                                    autocomplete="off" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <!-- Akhir Input Data Masuk -->

                        <!-- Alternative Daftar -->
                        <div id="emailHelp border-bottom-2" class="form-text text-center mt-3 mb-3">
                            Belum memiliki akun?
                            <a class="text-black" href="../daftar/daftar.php">Daftar</a>
                        </div>
                        <!-- Akhir Alternative Daftar -->

                        <!-- Tombol Masuk -->
                        <div class="tombol mt-53">
                            <button type="submit" name="masuk" class="tblMasuk">
                                <span>Masuk</span>
                            </button>
                        </div>
                        <!-- Akhir Tombol Masuk -->
                    </form>
                </div>
            </div>
            <!-- Akhir Masuk -->

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