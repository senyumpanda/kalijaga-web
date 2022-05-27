<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bb-shadow py-2" style="background-color: #CD7575;">
    <div class="container-fluid">
        @if($akun === "Admin")
        <a href="/a=true" class="navbar-brand" style="font-size: 32px; cursor: pointer;">Kalijaga</a>
        @elseif($akun === "Customer")
        <a href="/c=true{{ auth()->user()->id }}" class="navbar-brand"
            style="font-size: 32px; cursor: pointer;">Kalijaga</a>
        @else
        <a href="/" class="navbar-brand" style="font-size: 32px; cursor: pointer;">Kalijaga</a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 16px; padding-right: 5rem;">
            <ul class="navbar-nav ms-auto mb-2 pt-2 mb-lg-0">
                @if($akun === "Admin")
                <li class="nav-item text-center pt-1 mx-1">
                    <a class="nav-link d-flex align-content-center justify-content-center active"
                        href="/{{ Str::of($nama)->lower() }}">
                        <div class="kotak-foto me-2 fs-3"
                            style="width: 35px; height:35px; transform: translateY(-8px);">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        {{ $nama }}
                    </a>
                </li>
                @elseif($akun === "Customer")
                <li class="nav-item mx-1">
                    <a class="nav-link @if($akses === 'tentang') active @endif"
                        href="/c-tentang{{ auth()->user()->id }}">Tentang
                        Kami</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link @if($akses === 'produk') active @endif"
                        href="/c-produk{{ auth()->user()->id }}">Produk Kami</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link pe-3 @if($akses === 'kontak') active @endif"
                        href="/c-kontak{{ auth()->user()->id }}">Kontak
                        Kami</a>
                </li>
                <li class="nav-item text-center pt-1 mx-1">
                    <a class="nav-link d-flex align-content-center justify-content-center active"
                        href="/{{ Str::of($nama)->lower() }}">
                        <div class="kotak-foto me-2 fs-3"
                            style="width: 35px; height:35px; transform: translateY(-8px);">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        {{ $nama }}
                    </a>
                </li>
                @else
                <li class="nav-item mx-1">
                    <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}" href="/tentang">Tentang Kami</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{ Request::is('produk') ? 'active' : '' }}" href="/produk">Produk Kami</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link pe-3 {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak
                        Kami</a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->
