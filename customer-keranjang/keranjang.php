<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>admin - keranjang</title>
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
                                            <a href="../customer-keranjang/keranjang.php" class="aktif">Keranjang</a>
                                        </li>
                                        <li class="kedua g-0">
                                            <i class="bi bi-caret-right-fill"></i>
                                            <a href="../customer-pesananku/pesananku-1.php">Pesananku</a>
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
                        <div class="container bungkus-1 pt-3" style="border-radius: 25px;">
                            <div class="row">
                                <div class="col-12 w-75 pe-5">
                                    <div class="container pt-2">
                                        <ul class="d-flex justify-content-between align-content-center list-judul">
                                            <li>
                                                <a href="../produk_kami/produk.php" class="fs-2">
                                                    <i class="bi bi-arrow-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="fw-bold pe-5 me-5 fs-2">
                                                    Keranjang Belanja
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container bungkus-2 mt-3" style="border-radius: 25px;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="barang pt-3">
                                        <div class="row text-white">
                                            <div
                                                class="col-1 h-50 my-auto ps-4 d-flex justify-content-center align-items-center fs-4 border-end">
                                                <i class="bi bi-trash" style="cursor: pointer;"></i>
                                            </div>
                                            <div class="col-2 d-flex align-content-center justify-content-center pt-2">
                                                <img src="../img/parfum.png" style="width: 120px; height: 100px;"
                                                    alt="">
                                            </div>
                                            <div class="col-3">
                                                <p class="mt-4" style="font-size: 20px;">
                                                    Teh Mawar <br>
                                                    3x
                                                </p>
                                            </div>
                                            <div
                                                class="col-2 d-flex justify-content-center align-items-center text-center">
                                                <p class="fw-bold mt-2">Harga: 8.000</p>
                                            </div>
                                            <div
                                                class="col-2 d-flex justify-content-center align-items-center text-center">
                                                <div class="input-group mb-3 pt-2">
                                                    <span class="input-group-text bg-white btn" ,
                                                        style="color:#A95E5E;">
                                                        <i class="bi bi-dash fs-5"></i>
                                                    </span>
                                                    <input type="text"
                                                        class="form-control text-center text-white bg-transparent"
                                                        aria-label="Amount (to the nearest dollar)" value="2">
                                                    <span class="input-group-text bg-white btn" ,
                                                        style="color:#A95E5E;">
                                                        <i class="bi bi-plus fs-5"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div
                                                class="col-2 d-flex justify-content-center align-items-center text-center text-center">
                                                <a href="../customer-checkout/checkout.php"
                                                    class="mt-2 btn btn-custom text-white fw-bold fs-5 px-4">
                                                    Checkout
                                                </a>
                                            </div>
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
    <!-- Akhir Beranda -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>