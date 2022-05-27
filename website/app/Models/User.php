<?php

namespace App\Models;

use App\Models\Keranjang;
use App\Models\AksesPengiriman;
use App\Models\RiwayatPenjualan;
use App\Models\PesananPengiriman;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'nama_depan',
    //     'nama_belakang',
    //     'email',
    //     'password',
    //     'no_telepon',
    //     'keterangan',
    //     'slug'
    // ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function riwayatPenjualan()
    {
        return $this->hasMany(RiwayatPenjualan::class);
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }

    public function pesananPengiriman()
    {
        return $this->hasMany(PesananPengiriman::class);
    }
}
