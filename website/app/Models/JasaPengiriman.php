<?php

namespace App\Models;

use App\Models\AksesPengiriman;
use App\Models\PesananPengiriman;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JasaPengiriman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function aksesPengiriman()
    {
        return $this->hasMany(AksesPengiriman::class);
    }

    public function pesananPengiriman()
    {
        return $this->hasMany(PesananPengiriman::class);
    }

}
