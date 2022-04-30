<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>admin - penjualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bb-shadow" style="background-color: #CD7575;">
        <div class="container-fluid">
            <a href="../beranda/beranda.php" class="navbar-brand" style="font-size: 32px; cursor: pointer;">Kalijaga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"
                style="font-size: 16px; padding-right: 5rem;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item text-center mx-1">
                        <a class="nav-link d-flex align-content-center justify-content-center active"
                            href="../admin/admin.php">
                            <div class="kotak-foto me-2" style="width: 35px; height:35px;">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Beranda -->
    <div class="container-fluid">
        <div class="row">
            <!-- Menu Kiri -->
            <div class="menu-kiri col-2 ">

                <!-- Pilihan Menu -->
                <div class="row mt-4">
                    <div class="col-11">
                        <div class="pilihan-menu">
                            <ul class="">
                                <li class="awal">
                                    <i class="bi bi-house-door"></i>
                                    Beranda
                                </li>
                                <li class="awal">
                                    <i class="bi bi-basket-fill"></i>
                                    Penjualan
                                    <ul>
                                        <li class="kedua g-0">
                                            <i class="bi bi-caret-right-fill"></i>
                                            <a href="../admin-produk/produk.php">Produk</a>
                                        </li>
                                        <li class="kedua g-0">
                                            <i class="bi bi-caret-right-fill"></i>
                                            <a href="admin-penjualan.php" class="aktif">Data
                                                Penjualan</a>
                                        </li>
                                        <li class="kedua g-0">
                                            <i class="bi bi-caret-right-fill"></i>
                                            <a href="../admin-pesanan/admin-pesanan-1.php">Pesanan</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Akhir Pilihan Menu -->
            </div>
            <!-- Akhir Menu Kiri -->

            <!-- Info Kanan -->
            <div class="menu-kanan col-10 mt-5">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="container bungkus pt-5" style="border-radius: 25px;">
                            <div class="bag-1 px-5 text-white mb-3 fw-bold fs-2 judul">
                                <h2 class="fw-bold">Data Penjualan Produk</h2>
                            </div>
                            <div class="bag-2 order">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="-">Pilih Opsi...</option>
                                    <option value="hari">Hari</option>
                                    <option value="bulan">Bulan</option>
                                    <option value="tahun">Tahun</option>
                                </select>
                            </div>
                            <div class="bag-3 pt-3">
                                <div class="row text-white">
                                    <div class="col-2 d-flex align-content-center justify-content-center pt-2">
                                        <img src="../img/teh.png" style="width: 120px; height: 100px;" alt="">
                                    </div>
                                    <div class="col-6">
                                        <p class="mt-4" style="font-size: 20px;">
                                            Teh Mawar <br>
                                            2x
                                        </p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <p>Harga: 16.000</p>
                                        <p class="fw-bold">SELESAI</p>
                                        <p>Tgl: 16/05/2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bag-3 pt-3">
                                <div class="row text-white">
                                    <div class="col-2 d-flex align-content-center justify-content-center pt-2">
                                        <img src="../img/teh2.png" style="width: 120px; height: 100px;" alt="">
                                    </div>
                                    <div class="col-6">
                                        <p class="mt-4" style="font-size: 20px;">
                                            Teh Mawar <br>
                                            3x
                                        </p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <p>Harga: 16.000</p>
                                        <p class="fw-bold">SELESAI</p>
                                        <p>Tgl: 05/03/2022</p>
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
    <!-- Akhir Beranda -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>