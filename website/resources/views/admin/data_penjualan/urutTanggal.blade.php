@foreach($riwayats as $riwayat)

<div class=" bag-3 pt-2 mb-1">
    <div class="row text-white">
        <div class="col-2 d-flex align-content-center justify-content-center pt-2">
            <img src="{{ $riwayat->produk->gambar }}" style="width: 80px; height: 80px;" alt="">
        </div>
        <div class="col-6">
            <p class="mt-4" style="font-size: 20px;">
                {{ $riwayat->produk->nama_produk }} <br>
                {{ $riwayat->jumlah_pesanan }}
            </p>
        </div>
        <div class="col-4 text-center mt-2">
            <p class="mb-1" style=".5rem;">Harga:
                {{ $riwayat->produk->harga_produk * $riwayat->jumlah_pesanan }}</p>
            <p class="fw-bold mb-1">{{ $riwayat->status }}</p>
            <p class="mb-1">Tgl: {{ $riwayat->pesanan_selesai }}</p>
        </div>
    </div>
</div>

@endforeach
