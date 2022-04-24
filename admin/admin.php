<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bb-shadow" style="background-color: #CD7575;">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-size: 32px; cursor: default;">Kalijaga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"
                style="font-size: 16px; padding-right: 5rem;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item text-center mx-1">
                        <a class="nav-link d-flex align-content-center justify-content-center active" href="admin.html">
                            <i class="bi bi-person-circle me-2"></i>
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
            <div class="menu-kiri col-2">
                <!-- Menu Kiri-->
                <div class="judul mt-5 text-center">
                    <h3>Admin</h3>
                </div>
                <!-- Akhir Menu Kiri -->

                <!-- Pilihan Menu -->
                <div class="pilihan-menu mt-3">
                    <ul class="">
                        <li class="awal ">
                            <i class="bi bi-house-door"></i>
                            Beranda
                        </li>
                        <li class="awal ">
                            <i class="bi bi-basket-fill"></i>
                            Penjualan
                            <ul>
                                <li class="kedua">
                                    <i class="bi bi-caret-right-fill"></i>
                                    <a href="../admin-produk/produk.html">Produk</a>
                                </li>
                                <li class="kedua">
                                    <i class="bi bi-caret-right-fill"></i>
                                    <a href="../admin-penjualan/admin-penjualan.html">Data Penjualan</a>
                                </li>
                                <li class="kedua">
                                    <i class="bi bi-caret-right-fill"></i>
                                    <a href="../admin-pesanan/admin-pesanan-1.html">Pesanan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Akhir Pilihan Menu -->
            </div>
            <!-- Akhir Menu Kiri -->

            <!-- Info Kanan -->
            <div class="menu-kanan col-10">
                <div class="info-akun mt-5 d-flex justify-content-center align-items-center flex-column">
                    <i class="bi bi-person-circle"></i>
                    <div class="info">
                        <div class="info-label">
                            <span>Nama</span>
                            <p>Ilham Pandu Prasetyo</p>
                        </div>
                        <div class="info-label">
                            <span>Nomor Whatsapp</span>
                            <p>0812-3379-7863</p>
                        </div>
                    </div>
                </div>
                <div class="tbl w-50">
                    <button type="submit">
                        <a href="../admin-ubah-akun/ubah-akun.html">Ubah Akun</a>
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