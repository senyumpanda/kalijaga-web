<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /* USER */
        User::create([  
            "nama_depan" => "Admin",
            "nama_belakang" => "1",
            "email" => "admin1@gmail.com",
            "password" => Hash::make("12345"),
            "no_telepon" => "081465872957",
            "keterangan" => "Admin",
            "slug" => "a"
        ]);
        
        User::create([  
            "nama_depan" => "Ariel",
            "nama_belakang" => "Lasso",
            "email" => "ariel@gmail.com",
            "password" => Hash::make("12345"),
            "no_telepon" => "081345678921",
            "keterangan" => "Customer",
            "slug" => "c"
        ]);

        /* PRODUK */
        Produk::create([
            "nama_produk" => "Teh Mawar",
            "stok_produk" => 25,
            "harga_produk" => 10000,
            "deskripsi_produk" => "kami membuatnya dengan bunga mawar pilihan, dan kita olah dengan cara tradisional tentunya higienis dan terjamin sehingga menimbulkan rasa yang khas dan nikmat untuk di minum",
            "gambar" => "img/teh.png"
        ]);

        Produk::create([
            "nama_produk" => "Teh Mawar ver2",
            "stok_produk" => 20,
            "harga_produk" => 9000,
            "deskripsi_produk" => "kami membuatnya dengan bunga mawar pilihan, dan kita olah dengan cara tradisional tentunya higienis dan terjamin serta tanpa bahan pengawet kimia",
            "gambar" => "img/teh2.png"
        ]);

        Produk::create([
            "nama_produk" => "Parfum Mawar",
            "stok_produk" => 10,
            "harga_produk" => 18000,
            "deskripsi_produk" => "kami membuatnya dengan bunga mawar pilihan, tahan lama dan pasti membuat para lawan jenis melirik kepada anda",
            "gambar" => "img/parfum.png"
        ]);
    }
}
