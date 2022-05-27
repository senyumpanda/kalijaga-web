<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\JasaPengiriman;
use App\Models\RiwayatPenjualan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AksesPengiriman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function jasaPengiriman()
    {
        return $this->belongsTo(JasaPengiriman::class);
    }

}
