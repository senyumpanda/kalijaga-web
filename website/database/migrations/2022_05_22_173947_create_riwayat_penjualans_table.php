<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_penjualans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('produk_id');
            // $table->unsignedBigInteger('akses_pengiriman_id');
            $table->integer('jumlah_pesanan');
            $table->string('status')->nullable();
            $table->date('pesanan_dibuat');
            $table->date('pesanan_selesai')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade');
            // $table->foreign('akses_pengiriman_id')->references('id')->on('akses_pengirimen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_penjualans');
    }

};
