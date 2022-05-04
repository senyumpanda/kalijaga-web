<?php 

require "../connectDB/db.php";

$hasil = ambilDataProduk("SELECT * FROM produk");

// var_dump($hasil);

// die;


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
    <title>admin - produk</title>
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
                                            <a href="produk.php" class="aktif">Produk</a>
                                        </li>
                                        <li class="kedua g-0">
                                            <i class="bi bi-caret-right-fill"></i>
                                            <a href="../admin-penjualan/admin-penjualan.php">Data Penjualan</a>
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
                <div class="container bungkus pt-5" style="border-radius: 25px;">
                    <div class="produk">
                        <div class="judul mb-5 px-3 d-flex justify-content-between align-items-center">
                            <h3>Daftar Produk</h3>
                            <div class="tmb-produk fw-bold">
                                <i class="bi bi-plus-lg"></i>
                                <a href="../admin-tambah-produk/tambah-produk.php">Tambah Produk</a>
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
                                    <?php foreach($hasil as $x) : ?>
                                    <tr>
                                        <td class="pt-5 fs-5 text-white" style="width:25px; cursor: pointer;">
                                            <a href="../admin-ubah-produk/ubah-produk.php?i=<?= $x["id_produk"]; ?>" class="text-white">
                                                <i class="bi bi-pencil-square" style="cursor: pointer;"></i>
                                            </a>
                                        </td>
                                        <td class="" style="width: 25px;">
                                            <img src="../img/<?= $x["gambar"]; ?>"  alt="" style="width: 100px; height: 100px;background-color:transparent;">
                                        </td>
                                        <td class="pt-5 text-white">
                                            <?= $x["nama_produk"]; ?>
                                        </td>
                                        <td class="pt-5 text-white">
                                            <p class="border border-2 w-50 px-3 text-center rounded-2 p-2">
                                                Rp<?= $x["harga_produk"]; ?>
                                            </p>
                                        </td>
                                        <td class="pt-5 text-white">
                                            <p class="border border-2 w-50 px-3 text-center rounded-2 p-2">
                                                <?= $x["stok_produk"]; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <!-- Akhir Produk -->
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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