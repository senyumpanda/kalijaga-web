<?php 

require "../connectDB/db.php";

if(isset($_POST["tambahProdukAdmin"])){
    // var_dump($_POST);
    // var_dump($_FILES);
    // var_dump(!$_POST["BCA"]);
    // die;

    // var_dump($_POST);
    // var_dump($_FILES);
    // var_dump(!$_POST["BCA"]);
    // die;

    if(tambahProduk($_POST) > 0){
        echo"
            <script>
                alert('Produk baru telah ditambahkan');
                document.location.href = '../admin-produk/produk.php';
            </script>
        ";
    } else {
        echo"
            <script>
                alert('Produk baru gagal ditambahkan');
                document.location.href = '../admin-produk/produk.php';
            </script>
        ";
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
    <title>tambah produk</title>
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
                                            <a href="../admin-produk/produk.php" class="aktif">Produk</a>
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
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="container bungkus-luar pt-4" style="border-radius: 35px;">
                            <div class="row">
                                <div class="col-12 g-0">
                                    <div class="bungkus-dalam">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <!-- Bagian 1 -->
                                            <div class="bag-1 px-5 text-white pb-3 bdr">
                                                <h2>Tambah Produk</h2>
                                            </div>
                                            <!-- Akhir Bagian 1 -->

                                            <!-- Bagian 2 -->
                                            <div class="bag-2 px-5 text-white pb-3 bdr">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <div class="row mt-2">
                                                            <div class="col-4 d-flex align-items-center">
                                                                <label for="uploadGambar">Foto Produk</label>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="input-group pt-3 mb-3 text-white">
                                                                    <input type="file" class="form-control text-white"
                                                                        id="uploadGambar" autocomplete="off" name="gambarProduk">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 offset-1 bdr">
                                                        <div class="row pt-4">
                                                            <div class="col-4">
                                                                <label for="harga">Harga</label>
                                                            </div>
                                                            <div class="col-8">
                                                                <input type="text" class="form-control" id="harga"
                                                                    autocomplete="off" name="hargaProduk" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Akhir Bagian 2 -->

                                            <!-- Bagian 3 -->
                                            <div class="bag-3 px-5 text-white py-4 bdr">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <div class="row">
                                                            <div class="col-3 d-flex align-items-center">
                                                                <label for="namaProduk">Nama Produk</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control" id="namaProduk"
                                                                    autocomplete="off" name="namaProduk" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="row">
                                                            <div class="col-3 ps-4 d-flex align-items-center">
                                                                <label for="stokProduk">Stok</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control" name="stokProduk" 
                                                                autocomplete="off" id="stokProduk" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Akhir Bagian 3 -->

                                            <!-- Bagian 4 -->
                                            <div class="bag-3 px-5 text-white py-4 bdr">
                                                <div class="row">
                                                    <div class="col-3 d-flex align-items-center text-center">
                                                        <label for="jasaPengiriman">Tambah Jasa<br>Pengiriman</label>
                                                    </div>
                                                    <div class="col-9">

                                                        <button type="button"
                                                            class="btn tblJasaPengiriman btn-primary mt-3 w-100 fs-5"
                                                            data-bs-toggle="modal" name="jasaPengiriman" data-bs-target="#jasaPengiriman">
                                                            <i class="bi bi-plus fs-5"></i>
                                                            Tambah Jasa Pengiriman
                                                        </button>

                                                        <div class="modal fade" id="jasaPengiriman" tabindex="-1"
                                                            aria-labelledby="jasaPengirimanLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered text-black">
                                                                <div class="modal-content">
                                                                    <div class="modal-body" style="border-radius: 25px;">

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="SICEPAT" name="SICEPAT" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                SICEPAT
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="JNE" name="JNE" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                JNE Express
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="Anteraja" name="Anteraja" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                Anteraja
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="Grab" name="Grab" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                Grab
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="J&T" name="J&T" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                J&T Express
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="Gojek" name="Gojek" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                Gojek
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer border-top-0">
                                                                        <button type="button" name="tambahJasaPengiriman"
                                                                            class="btn btn-custom text-white"
                                                                            data-bs-dismiss="modal">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Akhir Bagian 4 -->

                                            <!-- Bagian 5 -->
                                            <div class="bag-3 px-5 text-white py-4 bdr">
                                                <div class="row">
                                                    <div class="col-3 d-flex align-items-center text-center">
                                                        <label for="pembayaran">Tambah<br>Pembayaran</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <button type="button"
                                                            class="btn tblJasaPembayaran btn-primary mt-3 w-100 fs-5"
                                                            data-bs-toggle="modal" name="jasaPembayaran" data-bs-target="#jasaPembayaran">
                                                            <i class="bi bi-plus fs-5"></i>
                                                            Tambah Pembayaran
                                                        </button>

                                                        <div class="modal fade" id="jasaPembayaran" tabindex="-1"
                                                            aria-labelledby="jasaPembayaranLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered text-black">
                                                                <div class="modal-content">
                                                                    <div class="modal-body" style="border-radius: 25px;">

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="BCA" name="BCA" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                BCA
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="BRI" name="BRI" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                BRI
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="Mandiri" name="Mandiri" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                Mandiri
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="BNI" name="BNI" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                BNI
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="Bank Indonesia" name="BI" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                Bank Indonesia
                                                                            </label>
                                                                        </div>

                                                                        <div class="form-check bdr2 py-2">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                value="Panin Bank" name="Panin" id="flexCheckDefault">
                                                                            <label class="form-check-label"
                                                                                for="flexCheckDefault"
                                                                                style="font-size: 1rem;letter-spacing: 1.5px;font-weight:600px;">
                                                                                Panin Bank
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer border-top-0">
                                                                        <button type="button" name="tambahPembayaran"
                                                                            class="btn btn-custom text-white"
                                                                            data-bs-dismiss="modal">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Akhir Bagian 5 -->

                                            <!-- Bagian 6 -->
                                            <div class="bag-4 px-5 text-white mb-2 pt-3 pb-2">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="deskripsiProduk">Deskripsi Produk</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <textarea class="form-control" style="height: 100px; height: 150px;"
                                                            id="deskripsiProduk" name="deskripsiProduk" autocomplete="off"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tombol Yakin -->
                                            <div class="bag-akhir w-50 mx-auto">
                                                <button href="" name="tambahProdukAdmin" class="btn text-white">Tambah
                                                    Produk</button>
                                            </div>
                                            <!-- Akhir Tombol Yakin -->

                                            <!-- Akhir Bagian 6 -->
                                        </form>
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