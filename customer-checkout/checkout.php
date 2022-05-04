<?php 
require "../connectDB/db.php";
session_start();

$_SESSION["belum_bayar"] = false;
$_SESSION["sudah_bayar"] = false;

if( isset($_GET["sudah"]) ){
    $_SESSION["sudah_bayar"] = true;
} else if( isset($_GET["belum"]) ){
    $_SESSION["belum_bayar"] = true;
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
    <title>customer - checkout</title>
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
                            href="../customer/customer.php">
                            <div class="kotak-foto me-2" style="width: 35px; height:35px;">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            Customer
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
                                            <a href="../customer-keranjang/keranjang.php">Keranjang</a>
                                        </li>
                                        <li class="kedua g-0">
                                            <i class="bi bi-caret-right-fill"></i>
                                            <a href="../customer-pesananku/pesananku-1.php" class="aktif">Pesananku</a>
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
                        <div class="container bungkus mt-3" style="border-radius: 25px;">
                            <div class="row bdr">
                                <div class="col-12 w-75 mt-3 pe-5">
                                    <div class="container pt-3">
                                        <ul class="d-flex justify-content-between align-content-center list-judul">
                                            <li>
                                                <a href="../customer-keranjang/keranjang.php" class="fs-2">
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
                                                Admin 1
                                            </strong>
                                        </h6>
                                        <br>
                                        <p>0921312384</p>
                                    </div>
                                </div>
                                <div class="col-8 offset-1 p-3">
                                    <div class="row p-3">
                                        <div class="col-2 my-auto text-white" style="font-size:20px;">
                                            <label class="ps-5" for="alamatCheckOut">Alamat:</label>
                                        </div>
                                        <div class="col-8 offset-1">
                                            <input type="text" class="form-control" id="alamatCheckOut"
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
                                    <img src="../img/parfum.png" alt="" style="width: 100px; height: 100px;">
                                </div>
                                <div class="col-5 ps-4 d-flex align-items-center">
                                    <h5 style="font-weight: 500;">Parfum Mawar</h5>
                                </div>
                                <div class="col-2 ps-4 d-flex align-items-center">
                                    <p>Rp8000</p>
                                </div>
                                <div class="col-1 d-flex align-items-center">
                                    <p class="ps-2">
                                        2
                                    </p>
                                </div>
                                <div class="col-1 offset-1 d-flex align-items-center">
                                    Rp16000
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
                                            <select id="pilihPengiriman" class="form-select"
                                                aria-label="Default select example">
                                                <option value="-">Pilih</option>
                                                <option value="1">SICEPAT</option>
                                                <option value="2">JNE Express</option>
                                                <option value="3">Anteraja</option>
                                                <option value="4">Grab</option>
                                                <option value="5">J&T Express</option>
                                                <option value="6">Gojek</option>
                                            </select>
                                        </div>
                                        <div class="col-3 offset-1 d-flex align-items-center text-white">
                                            <h6>
                                                Rp8000
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row py-3" style="border-bottom: 3px dashed #DAA7A7;">
                                <div class="col-6 offset-2 ms-auto">
                                    <div class="row">
                                        <div class="col-4 d-flex align-items-center ps-5 text-white text-center">
                                            <h6>No. Resi:</h6>
                                        </div>
                                        <div class="col-3 text-white text-center">
                                            <h6 class="fw-bold">
                                                JT834327535
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
                                    <h6>Rp24000</h6>
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
                                    <select id="pilihPembayaran" class="form-select"
                                        aria-label="Default select example">
                                        <option value="-">Pilih</option>
                                        <option value="1">BCA</option>
                                        <option value="2">BRI</option>
                                        <option value="3">Mandiri</option>
                                        <option value="4">BNI</option>
                                        <option value="5">Bank Indonesia</option>
                                        <option value="6">Panin Bank</option>
                                    </select>
                                </div>
                            </div>

                            <?php if($_SESSION["belum_bayar"]) : ?>
                            <!-- Belum Bayar -->
                            <div class="row pt-5 mt-2">
                                <div class="col-2 ps-5 ms-auto">
                                    <a href="../customer-melakukan-pembayaran(1)/belum_bayar.php" name="buatPesanan"
                                        class="btn btn-custom ms-5 ms-auto text-white">
                                        Buat Pesanan
                                    </a>
                                </div>
                            </div>
                            <!-- Akhir Belum Bayar -->
                            <?php endif; ?>

                            <?php if($_SESSION["sudah_bayar"]) : ?>
                            <!-- Sudah Bayar -->
                            <div class="row pt-5 mt-2">
                                <div class="col-2 ps-5 ms-auto">
                                    <a href="../customer-melakukan-pembayaran(2)/sudah_bayar.php" name="buatPesanan"
                                        class="btn btn-custom ms-5 ms-auto text-white">
                                        Buat Pesanan
                                    </a>
                                </div>
                            </div>
                            <!-- Akhir Sudah Bayar -->
                            <?php endif; ?>

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