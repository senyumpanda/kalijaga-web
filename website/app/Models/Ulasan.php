<?php

namespace App\Models;

use App\Models\RiwayatPenjualan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ulasan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function riwayatPenjualan()
    {
        return $this->belongsTo(RiwayatPenjualan::class);
    }
}
