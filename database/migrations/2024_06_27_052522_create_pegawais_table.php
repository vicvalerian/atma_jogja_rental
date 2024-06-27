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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jabatan_id');
            $table->string('nama');
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('no_telp');
            $table->string('email');
            $table->string('password');
            $table->string('foto');
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
        Schema::dropIfExists('pegawais');
    }
};
