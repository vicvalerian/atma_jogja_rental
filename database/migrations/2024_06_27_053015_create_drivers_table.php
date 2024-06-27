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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('no_driver');
            $table->string('nama');
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('no_telp');
            $table->string('email');
            $table->string('password');
            $table->string('bahasa');
            $table->string('foto');
            $table->string('sim');
            $table->string('skck');
            $table->string('surat_bebas_napza');
            $table->string('surat_keterangan_sehat');
            $table->double('tarif_per_hari', 50, 2);
            $table->double('rating', 8, 2);
            $table->integer('jml_rating');
            $table->string('jml_transaksi');
            $table->string('ketersediaan');
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
        Schema::dropIfExists('drivers');
    }
};
