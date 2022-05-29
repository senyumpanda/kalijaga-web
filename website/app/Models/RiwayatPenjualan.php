<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produk;
use App\Models\Ulasan;
use App\Models\AksesPengiriman;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RiwayatPenjualan extends Model
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

    public function aksesPengiriman()
    {
        return $this->belongsTo(AksesPengiriman::class);
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }

}
