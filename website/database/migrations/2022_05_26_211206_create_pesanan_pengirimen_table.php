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
        Schema::create('pesanan_pengirimen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('jasa_pengiriman_id');
            $table->unsignedBigInteger('pembayaran_id');
            $table->unsignedBigInteger('keranjang_id');
            $table->string('no_resi')->nullable();
            $table->string('no_transaksi')->nullable();
            $table->string('alamat');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade');
            $table->foreign('jasa_pengiriman_id')->references('id')->on('jasa_pengirimen')->onDelete('cascade');
            $table->foreign('pembayaran_id')->references('id')->on('pembayarans')->onDelete('cascade');
            $table->foreign('keranjang_id')->references('id')->on('keranjangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_pengirimen');
    }
};
