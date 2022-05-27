<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bb-shadow" style="background-color: #CD7575;">
    {{-- <div class="container-fluid"> --}}
    @if($nama === "Admin")
    <a href="/a=true" class="navbar-brand" style="font-size: 32px; cursor: pointer;">Kalijaga</a>
    @elseif($nama === "Customer")
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
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item text-center mx-1">
                <a class="nav-link d-flex align-content-center justify-content-center active"
                    href="/{{ Str::of($nama)->lower() }}">
                    <div class="kotak-foto me-2" style="width: 35px; height:35px;">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    {{ $nama }}
                </a>
            </li>
        </ul>
    </div>
    </div>
</nav>
<!-- Akhir Navbar -->
