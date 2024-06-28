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
        Schema::table('detail_jadwal_pegawais', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });

        Schema::table('drivers', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });

        Schema::table('jabatans', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });

        Schema::table('jadwals', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });

        Schema::table('mitras', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });

        Schema::table('mobils', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });

        Schema::table('pegawais', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });

        Schema::table('pelanggans', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });

        Schema::table('promos', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });

        Schema::table('transaksis', function (Blueprint $table) {
            $table->string('uuid')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_jadwal_pegawais', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });

        Schema::table('drivers', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });

        Schema::table('jabatans', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });

        Schema::table('jadwals', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });

        Schema::table('mitras', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });

        Schema::table('mobils', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });

        Schema::table('pegawais', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });

        Schema::table('pelanggans', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });

        Schema::table('promos', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });

        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });
    }
};
