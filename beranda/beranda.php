<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>beranda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bb-shadow" style="background-color: #CD7575;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-size: 32px;">Kalijaga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"
                style="font-size: 16px; padding-right: 5rem;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-1">
                        <a class="nav-link active" href="beranda.php">Beranda</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="../tentang_kami/tentang.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="../produk_kami/produk.php">Produk Kami</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Beranda -->
    <div class="container mt-3">
        <div class="row pt-5 pb-5">
            <!-- Deskripsi Beranda -->
            <div class="col-lg-4 offset-lg-1 col-md-12">
                <div class="sisi-kiri pt-5 mt-5">
                    <!-- Teks -->
                    <div class="teks text-white mb-3">
                        <h2 class="fw-bold mt-5">
                            Satu-satunya olahan berbahan
                            dasar bunga mawar yang menyehatkan
                        </h2>
                        <p>
                            Kami dari kalijaga akan membuat produk
                            makanan / minuman herbal untuk Anda dan
                            dapat dikonsumsi oleh <br> siapa saja
                        </p>
                    </div>
                    <!-- Akhir Teks -->

                    <!-- Tombol Daftar dan Login -->
                    <div class="tombol me-auto w-75 w-sm-50 mt-lg-3 p-lg-2 d-flex justify-content-around">
                        <button type="submit" name="daftar">
                            <span>
                                <a href="../daftar/daftar.phpl">
                                    Daftar
                                </a>
                            </span>
                        </button>
                        <button type="submit" name="masuk">
                            <span>
                                <a href="../login/login.php">
                                    Masuk
                                </a>
                            </span>
                        </button>
                    </div>
                    <!-- Akhir Tombol Daftar dan Login -->
                </div>
            </div>
            <!-- Akhir Deskripsi Beranda -->

            <!-- Produk -->
            <div class="col-lg-6 offset-lg-1 col-md-12">
                <div class="gambar p-5">
                    <div id="gambarProduk" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/teh.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/teh.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/teh.png" class="d-block w-100" alt="...">
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