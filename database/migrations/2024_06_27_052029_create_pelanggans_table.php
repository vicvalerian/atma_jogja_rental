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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('no_pelanggan');
            $table->string('nama');
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('no_telp');
            $table->string('email');
            $table->string('password');
            $table->string('ktp');
            $table->string('sim');
            $table->integer('jml_transaksi');
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
        Schema::dropIfExists('pelanggans');
    }
};
