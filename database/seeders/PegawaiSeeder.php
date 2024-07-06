<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jabatanManager= Jabatan::where('nama', 'Manager')->first();

        DB::table('pegawais')->delete();

        DB::table('pegawais')->insert([
            [
                'uuid' => Str::orderedUuid()->toString(),
                'jabatan_id' => $jabatanManager->id,
                'nama' => 'Vicky Valerian',
                'alamat' => 'Jl. Pattimura',
                'tgl_lahir' => '2001-07-27',
                'jenis_kelamin' => 'Laki-Laki',
                'no_telp' => '082381888855',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'foto' => 'zxcvbnm',
                'status' => 'Terverifikasi',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
