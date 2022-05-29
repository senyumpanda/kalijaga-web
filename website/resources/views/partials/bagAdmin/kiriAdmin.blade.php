<!-- Menu Kiri -->
<div class="menu-kiri col-2">
    <!-- Pilihan Menu -->
    <div class="row mt-4">
        <div class="col-11">
            <div class="pilihan-menu mt-3">
                <ul class="">
                    <li class="awal">
                        <i class="bi bi-basket-fill"></i>
                        Penjualan
                        <ul>
                            <li class="kedua g-0">
                                <i class="bi bi-caret-right-fill"></i>
                                <a href="/a-produk" class="{{ $akses == 'produk' ? 'aktif' : '' }}">Produk</a>
                            </li>
                            <li class="kedua g-0">
                                <i class="bi bi-caret-right-fill"></i>
                                <a href="/a-datapenjualan" class="{{ $akses == 'dataPenjualan' ? 'aktif' : '' }}">Data
                                    Penjualan</a>
                            </li>
                            <li class="kedua g-0">
                                <i class="bi bi-caret-right-fill"></i>
                                <a href="/a-pesanan1" class="{{ $akses == 'pesanan' ? 'aktif' : '' }}">Pesanan</a>
                            </li>
                            <li class="kedua g-0">
                                <i class="bi bi-caret-right-fill"></i>
                                <a href="/a-ulasan" class="{{ $akses == 'ulasan' ? 'aktif' : '' }}">Ulasan</a>
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
