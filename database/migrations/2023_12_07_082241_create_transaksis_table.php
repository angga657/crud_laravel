<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_barang");
            $table->datetime("tanggal_transaksi");
            $table->string("nama_barang");
            $table->integer("jumlah_barang");
            $table->integer("total");
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
