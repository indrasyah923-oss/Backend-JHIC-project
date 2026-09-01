<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenempatanPklSeeder extends Seeder
{
    public function run(): void
    {
        $siswa = DB::table('siswa')->pluck('id_siswa', 'nama');

        $perusahaan = DB::table('perusahaan')
            ->pluck('id_perusahaan', 'slug');

        DB::table('penempatan_pkl')->insert([
            [
                'id_siswa' => $siswa['Ahmad Rizky'],
                'id_perusahaan' => $perusahaan['pt-teknologi-nusantara'],
                'tanggal_mulai' => '2026-07-01',
                'tanggal_selesai' => '2026-12-31',
                'status' => 'berlangsung',
                'pembimbing' => 'Guru Pembimbing RPL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}