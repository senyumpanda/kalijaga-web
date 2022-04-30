<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>produk kami</title>
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
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="../tentang_kami/tentang.php">Tentang Kami</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link active" href="produk.php">Produk Kami</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="../kontak_kami/kontak.php">Kontak Kami</a>
                    </li>
                    <?php if($_SESSION["admin"]) : ?>
                    <li class="nav-item">
                        <a class="text-white" href="../admin/admin.php">
                            <div class="kotak-foto me-2 text-center"
                                style="width: 30px; height:30px;margin-bottom: 1.8rem;">
                                <i class="bi bi-person-fill fs-1"></i>
                            </div>
                        </a>
                    </li>
                    <?php endif;  ?>

                    <?php if($_SESSION["customer"]) : ?>
                    <li class="nav-item">
                        <a class="text-white" href="../customer/customer.php">
                            <div class="kotak-foto me-2 text-center"
                                style="width: 30px; height:30px;margin-bottom: 1.8rem;">
                                <i class="bi bi-person-fill fs-1"></i>
                            </div>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Info Produk Kami -->
    <div class="container-fluid tentang-luar mt-5">
        <!-- Produk 1 -->
        <div class="container tentang-dalam text-white my-5">
            <div class="kolom-tentang">
                <div class="row p-3">
                    <div class="col-6 ps-5 mt-2">
                        <h2 class="text-center fw-bold judul-produk p-3">Teh Bunga Mawar</h2>
                        <h3 class="mt-3 fw-bold">
                            Satu-satunya olahan teh <br>
                            berbahan dasar bunga mawar <br>
                            yang menyehatkan
                        </h3>
                        <p class="mt-3">
                            kami membuatnya dengan bunga mawar pilihan
                            dan kita olah dengan cara tradisional tentunya
                            higienis dan terjamin
                        </p>
                        <div class="tombol-produk mt-5 w-75 mx-auto d-flex justify-content-between">
                            <button type="submit" name="beli">
                                <span>
                                    <a href="">Beli</a>
                                </span>
                            </button>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill">
                                    <span>264</span>
                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 offset-1 d-flex justify-content-center align-content-center mt-5 gbr">
                        <img src="../img/teh.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Produk 1 -->
        <!-- Produk 2 -->
        <div class="container tentang-dalam text-white my-5">
            <div class="kolom-tentang">
                <div class="row p-3">
                    <div class="col-6 d-flex justify-content-center align-content-center mt-5 gbr">
                        <img src="../img/teh2.png" alt="">
                    </div>
                    <div class="col-6 ps-5 mt-2">
                        <h2 class="text-center fw-bold judul-produk p-3">Teh Bunga Mawar</h2>
                        <h3 class="mt-3 fw-bold">
                            Satu-satunya olahan teh <br>
                            berbahan dasar bunga mawar <br>
                            yang menyehatkan
                        </h3>
                        <p class="mt-3">
                            kami membuatnya dengan bunga mawar pilihan
                            dan kita olah dengan cara tradisional tentunya
                            higienis dan terjamin
                        </p>
                        <div class="tombol-produk mt-5 w-75 mx-auto d-flex justify-content-between">
                            <button type="submit" name="beli">
                                <span>
                                    <a href="">Beli</a>
                                </span>
                            </button>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill">
                                    <span>104</span>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Produk 2 -->
        <!-- Produk 3 -->
        <div class="container tentang-dalam text-white my-5">
            <div class="kolom-tentang">
                <div class="row p-3">
                    <div class="col-6 ps-5 mt-2">
                        <h2 class="text-center fw-bold judul-produk p-3">Teh Bunga Mawar</h2>
                        <h3 class="mt-3 fw-bold">
                            Satu-satunya olahan teh <br>
                            berbahan dasar bunga mawar <br>
                            yang menyehatkan
                        </h3>
                        <p class="mt-3">
                            kami membuatnya dengan bunga mawar pilihan
                            dan kita olah dengan cara tradisional tentunya
                            higienis dan terjamin
                        </p>
                        <div class="tombol-produk mt-5 w-75 mx-auto d-flex justify-content-between">
                            <button type="submit" name="beli">
                                <span>
                                    <a href="">Beli</a>
                                </span>
                            </button>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill">
                                    <span>124</span>
                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 offset-1 d-flex justify-content-center align-content-center mt-5 gbr">
                        <img src="../img/parfum.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Produk 3 -->
    </div>
    <!-- Akhir Info Produk Kami -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>