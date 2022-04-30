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
                        <div class="pilihan-menu mt-3">
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
            <div class="menu-kanan mt-5 ps-5 col-10">
                <div class="bag-atas">
                    <div class="ket-akun">
                        <div class="row">
                            <div
                                class="gan-foto col-2 d-flex justify-content-center align-content-center flex-column text-white">
                                <div class="mx-auto" style="width: 100px; height:100px;">
                                    <i class="bi bi-person-fill d-flex justify-content-center align-content-center flex-column ps-2 pt-2"
                                        style="font-size: 5rem;"></i>
                                </div>
                                <p class="text-center">
                                    <a href="">Ganti Foto</a>
                                </p>
                            </div>
                            <div class="teks-nama col-10 d-flex align-items-center">
                                <h2>
                                    Customer
                                </h2>
                            </div>
                        </div>
                    </div>
                    </h2>
                </div>

                <div class="bag-bawah">
                    <form action="" method="POST">
                        <div class="bag-form">
                            <div class="form-floating w-75 mb-3">
                                <input type="text" class="form-control" id="namaDepan" placeholder="Nama Depan"
                                    autocomplete="off" style="box-shadow:none; border-bottom: 3px solid black;">
                                <label for="namaDepan">Nama Depan</label>
                            </div>
                            <div class="form-floating w-75 mb-3">
                                <input type="text" class="form-control" id="namaBelakang" placeholder="Nama Belakang"
                                    autocomplete="off" style="box-shadow:none; border-bottom: 3px solid black;">
                                <label for="namaBelakang">Nama Belakang</label>
                            </div>
                            <div class="form-floating w-75 mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Email"
                                    autocomplete="off" style="box-shadow:none; border-bottom: 3px solid black;">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating w-75 mb-4">
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    autocomplete="off" style="box-shadow:none; border-bottom: 3px solid black;">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="tbl">
                            <button name="ubahAkunCustomer" class="btn btn-custom">
                                Ubah
                            </button>
                        </div>
                    </form>
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