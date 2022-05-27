<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produk;
use App\Models\Keranjang;
use App\Models\Pembayaran;
use App\Models\JasaPengiriman;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesananPengiriman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function jasaPengiriman()
    {
        return $this->belongsTo(JasaPengiriman::class);
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }
}
