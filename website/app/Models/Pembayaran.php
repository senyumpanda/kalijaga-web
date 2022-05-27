<?php

namespace App\Models;

use App\Models\AksesPembayaran;
use App\Models\PesananPengiriman;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function aksesPembayaran()
    {
        return $this->hasMany(AksesPembayaran::class);
    }

    public function pesananPengiriman()
    {
        return $this->hasMany(PesananPengiriman::class);
    }
}
