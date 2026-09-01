<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraIndustriSeeder extends Seeder
{
    public function run(): void
    {
        $perusahaan = DB::table('perusahaan')
            ->pluck('id_perusahaan', 'slug');

        DB::table('mitra_industri')->insert([
            [
                'id_perusahaan' => $perusahaan['pt-teknologi-nusantara'],
                'tanggal_mulai' => '2026-01-01',
                'tanggal_selesai' => null,
                'status' => 'aktif',
                'deskripsi' => 'Mitra bidang teknologi informasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_perusahaan' => $perusahaan['digital-creative-studio'],
                'tanggal_mulai' => '2026-01-01',
                'tanggal_selesai' => null,
                'status' => 'aktif',
                'deskripsi' => 'Mitra bidang industri kreatif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}