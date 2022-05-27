<?php

namespace App\Models;

use App\Models\Keranjang;
use App\Models\AksesPengiriman;
use App\Models\RiwayatPenjualan;
use App\Models\AksesPembayaran;
use App\Models\PesananPengiriman;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function riwayatPenjualan()
    {
        return $this->hasMany(RiwayatPenjualan::class);
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }

    public function aksesPengiriman()
    {
        return $this->hasMany(AksesPengiriman::class);
    }

    public function aksesPembayaran()
    {
        return $this->hasMany(AksesPembayaran::class);
    }

    public function pesananPengiriman()
    {
        return $this->hasMany(PesananPengiriman::class);
    }
}
