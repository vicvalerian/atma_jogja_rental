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
        Schema::create('detail_jadwal_pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pegawai_id');
            $table->bigInteger('jadwal_id');
            $table->string('hari', 10);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_jadwal_pegawais');
    }
};
