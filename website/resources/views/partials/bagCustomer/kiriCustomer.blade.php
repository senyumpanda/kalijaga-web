<!-- Menu Kiri -->
<div class="menu-kiri col-2">

    <!-- Pilihan Menu -->
    <div class="row mt-4">
        <div class="col-11">
            <div class="pilihan-menu">
                <ul class="">
                    <li class="awal">
                        <i class="bi bi-basket-fill"></i>
                        Penjualan
                        <ul>
                            <li class="kedua g-0">
                                <i class="bi bi-caret-right-fill"></i>
                                <a href="c-keranjang" class="{{ $akses == 'keranjang' ? 'aktif' : '' }}">Keranjang</a>
                            </li>
                            <li class="kedua g-0">
                                <i class="bi bi-caret-right-fill"></i>
                                <a href="c-pesananku1"
                                    class="{{ $akses == 'pesananku1' ||  $akses == 'pesananku2' || $akses == 'pesananku3' ? 'aktif' : '' }}">Pesananku</a>
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
