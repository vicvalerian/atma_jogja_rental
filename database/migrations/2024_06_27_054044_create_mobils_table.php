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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mitra_id')->nullable();
            $table->string('nama');
            $table->string('tipe');
            $table->string('no_plat');
            $table->string('no_stnk');
            $table->string('jns_transmisi');
            $table->string('jns_bahan_bakar');
            $table->string('volume_bahan_bakar');
            $table->string('warna');
            $table->string('kapasitas_penumpang');
            $table->text('fasilitas');
            $table->date('tgl_terakhir_servis');
            $table->double('harga_sewa', 50, 2);
            $table->string('foto');
            $table->string('kategori_aset');
            $table->integer('jml_peminjaman')->default(0);
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
