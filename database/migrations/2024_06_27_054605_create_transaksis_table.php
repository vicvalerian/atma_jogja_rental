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
            $table->bigInteger('pelanggan_id');
            $table->bigInteger('mobil_id');
            $table->bigInteger('driver_id');
            $table->bigInteger('pegawai_id');
            $table->bigInteger('promo_id')->nullable();
            $table->string('no_transaksi');
            $table->string('jenis_peminjaman');
            $table->dateTime('tgl_transaksi');
            $table->dateTime('tgl_pinjam');
            $table->dateTime('tgl_kembali');
            $table->dateTime('tgl_selesai');
            $table->string('status');
            $table->double('denda', 50, 2);
            $table->double('tarif_driver', 50, 2);
            $table->double('rating_driver', 8, 2);
            $table->string('total_pembayaran');
            $table->string('metode_pembayaran');
            $table->string('bukti_transfer');
            $table->string('status_pembayaran');
            $table->timestamps();
            $table->softDeletes();
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
