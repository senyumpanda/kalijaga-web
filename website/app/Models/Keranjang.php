<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produk;
use App\Models\PesananPengiriman;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keranjang extends Model
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

    public function pesananPengiriman()
    {
        return $this->hasMany(PesananPengiriman::class);
    }

}
