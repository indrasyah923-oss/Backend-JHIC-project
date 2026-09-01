<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LowonganPklSeeder extends Seeder
{
    public function run(): void
    {
        $perusahaan = DB::table('perusahaan')
            ->pluck('id_perusahaan', 'slug');

        $jurusan = DB::table('jurusan')
            ->pluck('id_jurusan', 'slug');

        DB::table('lowongan_pkl')->insert([
            [
                'id_perusahaan' => $perusahaan['pt-teknologi-nusantara'],
                'id_jurusan' => $jurusan['rekayasa-perangkat-lunak'],
                'posisi' => 'Web Developer Intern',
                'deskripsi' => 'Membantu pengembangan dan pemeliharaan website.',
                'persyaratan' => 'Memahami HTML, CSS, JavaScript dan dasar database.',
                'lokasi' => 'Surabaya',
                'tanggal_mulai' => '2026-07-01',
                'tanggal_selesai' => '2026-12-31',
                'status' => 'dibuka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_perusahaan' => $perusahaan['digital-creative-studio'],
                'id_jurusan' => $jurusan['desain-komunikasi-visual'],
                'posisi' => 'Graphic Design Intern',
                'deskripsi' => 'Membantu membuat materi visual untuk kebutuhan digital.',
                'persyaratan' => 'Memahami dasar desain grafis dan software desain.',
                'lokasi' => 'Malang',
                'tanggal_mulai' => '2026-07-01',
                'tanggal_selesai' => '2026-12-31',
                'status' => 'dibuka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}