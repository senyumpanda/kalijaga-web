<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Produk;
use App\Models\Tanggal;
use App\Models\Keranjang;
use App\Models\Pembayaran;
use Illuminate\Support\Str;
use App\Models\JasaPengiriman;
use App\Models\AksesPembayaran;
use App\Models\AksesPengiriman;
use Illuminate\Database\Seeder;
use App\Models\RiwayatPenjualan;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* AKUN */
        User::create([
            'nama_depan' => 'Admin',
            'nama_belakang' => 'Website',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'no_telepon' => '081345875267',
            'keterangan' => 'Admin',
            'slug_user' => 'a',
            'remember_token' => Str::random(60)
        ]);
        
        User::create([
            'nama_depan' => 'Ilham',
            'nama_belakang' => 'Pandu',
            'email' => 'pandu@gmail.com',
            'password' => bcrypt('123'),
            'no_telepon' => '081345712903',
            'keterangan' => 'Customer',
            'slug_user' => 'c',
            'remember_token' => Str::random(60)
        ]);
        
        User::create([
            'nama_depan' => 'Arisandi',
            'nama_belakang' => 'Satria',
            'email' => 'aris@gmail.com',
            'password' => bcrypt('456'),
            'no_telepon' => '08132342903',
            'keterangan' => 'Customer',
            'slug_user' => 'c',
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'nama_depan' => 'Rosyid',
            'nama_belakang' => 'Iqbal',
            'email' => 'ros@gmail.com',
            'password' => bcrypt('789'),
            'no_telepon' => '081309861286',
            'keterangan' => 'Customer',
            'slug_user' => 'c',
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'nama_depan' => 'Joel',
            'nama_belakang' => 'Binsar',
            'email' => 'joel@gmail.com',
            'password' => bcrypt('987'),
            'no_telepon' => '082349861286',
            'keterangan' => 'Customer',
            'slug_user' => 'c',
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'nama_depan' => 'Wisnu',
            'nama_belakang' => 'Pradana',
            'email' => 'wis@gmail.com',
            'password' => bcrypt('135'),
            'no_telepon' => '081099868764',
            'keterangan' => 'Customer',
            'slug_user' => 'c',
            'remember_token' => Str::random(60)
        ]);

        /* PRODUK */
        Produk::create([
            'nama_produk' => 'Teh Mawar Premium',
            'stok_produk' => 25,
            'harga_produk' => 10000,
            'deskripsi_produk' => 'kami membuatnya dengan bunga mawar pilihan, dan kita olah dengan cara tradisional tentunya higienis dan terjamin sehingga menimbulkan rasa yang khas dan nikmat untuk di minum',
            'gambar' => 'img/teh.png',
            'slug_produk' => 'teh1'
        ]);

        Produk::create([
            'nama_produk' => 'Teh Mawar Klasik',
            'stok_produk' => 20,
            'harga_produk' => 9000,
            'deskripsi_produk' => 'kami membuatnya dengan bunga mawar pilihan, dan kita olah dengan cara tradisional tentunya higienis dan terjamin serta tanpa bahan pengawet kimia',
            'gambar' => 'img/teh2.png',
            'slug_produk' => 'teh2'
        ]);

        Produk::create([
            'nama_produk' => 'Parfum Mawar',
            'stok_produk' => 10,
            'harga_produk' => 18000,
            'deskripsi_produk' => 'kami membuatnya dengan bunga mawar pilihan, tahan lama dan pasti membuat para lawan jenis melirik kepada anda',
            'gambar' => 'img/parfum.png',
            'slug_produk' => 'parfum'
        ]);

        /* JASA PENGIRIMAN */
        JasaPengiriman::create([
            'nama_jasa_kirim' => 'SICEPAT',
            'biaya_jasa_kirim' => 8000
        ]);
        JasaPengiriman::create([
            'nama_jasa_kirim' => 'JNE',
            'biaya_jasa_kirim' => 8500
        ]);
        JasaPengiriman::create([
            'nama_jasa_kirim' => 'Anteraja',
            'biaya_jasa_kirim' => 9000
        ]);
        JasaPengiriman::create([
            'nama_jasa_kirim' => 'Grab',
            'biaya_jasa_kirim' => 12000
        ]);
        JasaPengiriman::create([
            'nama_jasa_kirim' => 'J&T',
            'biaya_jasa_kirim' => 9000
        ]);
        JasaPengiriman::create([
            'nama_jasa_kirim' => 'Gojek',
            'biaya_jasa_kirim' => 10000
        ]);

        /* AKSES PENGIRIMAN */
        // Produk 1
        // AksesPengiriman::create([
        //     'produk_id' => 1,
        //     'jasa_pengiriman_id' => 1
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 1,
        //     'jasa_pengiriman_id' => 2
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 1,
        //     'jasa_pengiriman_id' => 3
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 1,
        //     'jasa_pengiriman_id' => 4
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 1,
        //     'jasa_pengiriman_id' => 5
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 1,
        //     'jasa_pengiriman_id' => 6
        // ]);
        // // Produk 2
        // AksesPengiriman::create([
        //     'produk_id' => 2,
        //     'jasa_pengiriman_id' => 1
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 2,
        //     'jasa_pengiriman_id' => 2
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 2,
        //     'jasa_pengiriman_id' => 3
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 2,
        //     'jasa_pengiriman_id' => 4
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 2,
        //     'jasa_pengiriman_id' => 5
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 2,
        //     'jasa_pengiriman_id' => 6
        // ]);
        // // Produk 3
        // AksesPengiriman::create([
        //     'produk_id' => 3,
        //     'jasa_pengiriman_id' => 1
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 3,
        //     'jasa_pengiriman_id' => 2
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 3,
        //     'jasa_pengiriman_id' => 3
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 3,
        //     'jasa_pengiriman_id' => 4
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 3,
        //     'jasa_pengiriman_id' => 5
        // ]);
        // AksesPengiriman::create([
        //     'produk_id' => 3,
        //     'jasa_pengiriman_id' => 6
        // ]);

        /* PEMBAYARAN */
        Pembayaran::create([
            'nama_pembayaran' => 'BCA'
        ]);
        Pembayaran::create([
            'nama_pembayaran' => 'BRI'
        ]);
        Pembayaran::create([
            'nama_pembayaran' => 'Mandiri'
        ]);
        Pembayaran::create([
            'nama_pembayaran' => 'BNI'
        ]);
        Pembayaran::create([
            'nama_pembayaran' => 'Bank Indonesia'
        ]);
        Pembayaran::create([
            'nama_pembayaran' => 'Panin Bank'
        ]);

        /* AKSES PEMBAYARAN */
        // // Produk 1
        // AksesPembayaran::create([
        //     'produk_id' => 1,
        //     'pembayaran_id' => 1
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 1,
        //     'pembayaran_id' => 2
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 1,
        //     'pembayaran_id' => 3
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 1,
        //     'pembayaran_id' => 4
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 1,
        //     'pembayaran_id' => 5
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 1,
        //     'pembayaran_id' => 6
        // ]);
        // // Produk 2
        // AksesPembayaran::create([
        //     'produk_id' => 2,
        //     'pembayaran_id' => 1
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 2,
        //     'pembayaran_id' => 2
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 2,
        //     'pembayaran_id' => 3
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 2,
        //     'pembayaran_id' => 4
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 2,
        //     'pembayaran_id' => 5
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 2,
        //     'pembayaran_id' => 6
        // ]);
        // // Produk 3
        // AksesPembayaran::create([
        //     'produk_id' => 3,
        //     'pembayaran_id' => 1
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 3,
        //     'pembayaran_id' => 2
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 3,
        //     'pembayaran_id' => 3
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 3,
        //     'pembayaran_id' => 4
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 3,
        //     'pembayaran_id' => 5
        // ]);
        // AksesPembayaran::create([
        //     'produk_id' => 3,
        //     'pembayaran_id' => 6
        // ]);

        /* KERANJANG */
        // Keranjang::create([
        //     'user_id' => 1,
        //     'produk_id' => 1,
        //     'jumlah_pesanan' => 2,
        //     'status' => 'Selesai',
        // ]);
        // Keranjang::create([
        //     'user_id' => 1,
        //     'produk_id' => 2,
        //     'jumlah_pesanan' => 3,
        //     'status' => 'Selesai',
        // ]);
        // Keranjang::create([
        //     'user_id' => 2,
        //     'produk_id' => 3,
        //     'jumlah_pesanan' => 2,
        //     'status' => 'Selesai',
        // ]);
        // Keranjang::create([
        //     'user_id' => 2,
        //     'produk_id' => 2,
        //     'jumlah_pesanan' => 1,
        //     'status' => 'Selesai',
        // ]);
        // Keranjang::create([
        //     'user_id' => 3,
        //     'produk_id' => 3,
        //     'jumlah_pesanan' => 1,
        //     'status' => 'Selesai',
        // ]);
        // Keranjang::create([
        //     'user_id' => 1,
        //     'produk_id' => 1,
        //     'jumlah_pesanan' => 1,
        //     'status' => '',
        // ]);
        // Keranjang::create([
        //     'user_id' => 1,
        //     'produk_id' => 3,
        //     'jumlah_pesanan' => 2,
        //     'status' => '',
        // ]);

        /* RIWAYAT PENJUALAN */
        // RiwayatPenjualan::create([
        //     'user_id' => 1,
        //     'produk_id' => 1,
        //     'jumlah_pesanan' => 2,
        //     'status' => 'Selesai',
        //     'pesanan_dibuat' => '2021/03/16',
        //     'pesanan_selesai' => '2021/03/16'
        // ]);
        
        // RiwayatPenjualan::create([
        //     'user_id' => 1,
        //     'produk_id' => 2,
        //     'jumlah_pesanan' => 3,
        //     'status' => 'Selesai',
        //     'pesanan_dibuat' => '2021/03/23',
        //     'pesanan_selesai' => '2021/03/24'
        // ]);
        
        // RiwayatPenjualan::create([
        //     'user_id' => 2,
        //     'produk_id' => 2,
        //     'jumlah_pesanan' => 1,
        //     'status' => 'Selesai',
        //     'pesanan_dibuat' => '2021/04/2',
        //     'pesanan_selesai' => '2021/04/3'
        // ]);
        
        // RiwayatPenjualan::create([
        //     'user_id' => 2,
        //     'produk_id' => 1,
        //     'jumlah_pesanan' => 1,
        //     'status' => 'Sedang Dikirim',
        //     'pesanan_dibuat' => '2021/05/10'
        //     // 'pesanan_selesai' => ''
        // ]);
        
        // RiwayatPenjualan::create([
        //     'user_id' => 2,
        //     'produk_id' => 3,
        //     'jumlah_pesanan' => 3,
        //     'status' => 'Sedang Dikirim',
        //     'pesanan_dibuat' => '2021/05/15'
        //     // 'pesanan_selesai' => ''
        // ]);
        
        // RiwayatPenjualan::create([
        //     'user_id' => 3,
        //     'produk_id' => 3,
        //     'jumlah_pesanan' => 1,
        //     'status' => 'Perlu Dikirim',
        //     'pesanan_dibuat' => '2021/05/25'
        //     // 'pesanan_selesai' => ''
        // ]);

        /* TANGGAL */
        Tanggal::create([
            'nama_bulan' => 'Januari'
        ]);
        Tanggal::create([
            'nama_bulan' => 'Februari'
        ]);
        Tanggal::create([
            'nama_bulan' => 'Maret'
        ]);
        Tanggal::create([
            'nama_bulan' => 'April'
        ]);
        Tanggal::create([
            'nama_bulan' => 'Mei'
        ]);
        Tanggal::create([
            'nama_bulan' => 'Juni'
        ]);
        Tanggal::create([
            'nama_bulan' => 'Juli'
        ]);
        Tanggal::create([
            'nama_bulan' => 'Agustus'
        ]);
        Tanggal::create([
            'nama_bulan' => 'September'
        ]);
        Tanggal::create([
            'nama_bulan' => 'Oktober'
        ]);
        Tanggal::create([
            'nama_bulan' => 'November'
        ]);
        Tanggal::create([
            'nama_bulan' => 'Desember'
        ]);
    }
}
