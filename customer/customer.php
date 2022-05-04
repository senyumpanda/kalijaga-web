<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bb-shadow" style="background-color: #CD7575;">
        <div class="container-fluid">
            <a href="../beranda/beranda.php" class="navbar-brand" style="font-size: 32px; cursor: default;">Kalijaga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"
                style="font-size: 16px; padding-right: 5rem;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item text-center mx-1">
                        <a class="nav-link d-flex align-content-center justify-content-center pe-2 active"
                            href="customer.html">
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
            <div class="menu-kiri col-2">

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
                                            <a href="../customer-keranjang/keranjang.html">Keranjang</a>
                                        </li>
                                        <li class="kedua g-0">
                                            <i class="bi bi-caret-right-fill"></i>
                                            <a href="../customer-pesananku/pesananku-1.html">Pesananku</a>
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
            <div class="menu-kanan pt-5 col-10">
                <div class="info-akun mt-5">
                    <div class="row mt-5 mb-5" style="height:20vh;">
                        <div class="col-6 mt-3 offset-3 text-center">
                            <div class="kotak-foto-akun w-25 mx-auto"
                                style="width: 10vw; height: 20vh;border-radius: 50%;">
                                <i class="bi bi-person-fill text-white" style="width: 100%; font-size: 10rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mt-4">
                        <div class="col-8 ps-4 offset-2">
                            <div class="info ps-4 mt-5 w-50 mx-auto">
                                <div class="info-label">
                                    <span>Nama</span>
                                    <p>Customer 1</p>
                                </div>
                                <div class="info-label">
                                    <span>Nomor Whatsapp</span>
                                    <p>1231-3453-4564</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tbl ms-auto w-75">
                    <button type="submit">
                        <a href="../customer-ubah-akun/ubah-akun.php">Ubah Akun</a>
                    </button>
                    <button type="submit">
                        <a href="../customer-keluar-akun/keluar-akun.php">
                            <i class="bi bi-box-arrow-right"></i>
                            Keluar
                        </a>
                    </button>
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