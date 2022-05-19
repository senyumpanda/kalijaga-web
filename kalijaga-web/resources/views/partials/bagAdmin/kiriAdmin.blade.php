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
                                <a href="/adminProduk"
                                    class="{{ Request::is('adminProduk') ? 'aktif' : '' }}">Produk</a>
                            </li>
                            <li class="kedua g-0">
                                <i class="bi bi-caret-right-fill"></i>
                                <a href="/adminDataPenjualan"
                                    class="{{ Request::is('adminDataPenjualan') ? 'aktif' : '' }}">Data
                                    Penjualan</a>
                            </li>
                            <li class="kedua g-0">
                                <i class="bi bi-caret-right-fill"></i>
                                <a href="/adminPesanan"
                                    class="{{ Request::is('adminPesanan') ? 'aktif' : '' }}">Pesanan</a>
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
