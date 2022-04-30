<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>customer - pembayaran</title>
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
                                <div class="col-12 w-25 mt-3 pe-5">
                                    <div class="container pt-3">
                                        <ul class="d-flex justify-content-between align-content-center list-judul">
                                            <li>
                                                <a href="../customer-checkout/checkout.php" class="fs-2">
                                                    <i class="bi bi-arrow-left"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="fw-bold ps-3 pe-5 me-5 fs-2">
                                                    Pembayaran
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="informasi-pembayaran">
                                <div class="row p-5" style="height: 70vh;">
                                    <div class="col-8 offset-2 mx-auto pt-5">
                                        <div class="row text-white pt-3 bdr" style="font-size: 20px;">
                                            <div class="col-6">
                                                <p class="float-start">Total Pembayaran</p>
                                            </div>
                                            <div class="col-6 ">
                                                <p class="float-end">Rp24000</p>
                                            </div>
                                        </div>
                                        <div class="row text-white pt-3">
                                            <div class="col-12">
                                                <h6 class="">Bank BCA(Virtual Account)</h6>
                                            </div>
                                        </div>
                                        <div class="row text-white">
                                            <div class="col-12 ps-5">
                                                <p class="ps-3">No. Rekening:</p>
                                            </div>
                                        </div>
                                        <div class="row text-white">
                                            <div class="col-6 mx-auto text-center py-3">
                                                <h2 class="fw-bold">896 0895 53211453</h2>
                                            </div>
                                        </div>
                                        <div class="row mt-4 mb-5 text-center text-white"
                                            style="border-bottom: 3px dashed #DAA7A7;">
                                            <div class="col-12">
                                                <h6 class="fw-bold">Mohon cek kembali informasi data pada saat melakukan
                                                    transfer !</h6>
                                            </div>
                                        </div>
                                        <div class="row pt-4" style="height: 2.5rem;">
                                            <a href="../produk_kami/produk.php"
                                                class="btn btn-custom w-25 mx-auto text-white fw-bold pt-2">Ok</a>
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