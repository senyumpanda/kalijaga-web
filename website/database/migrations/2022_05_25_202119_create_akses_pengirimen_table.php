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
        Schema::create('akses_pengirimen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('jasa_pengiriman_id');
            $table->timestamps();

            $table->foreign('produk_id')->references('id')->on('produks')->onDelete('cascade');
            $table->foreign('jasa_pengiriman_id')->references('id')->on('jasa_pengirimen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akses_pengirimen');
    }
};
