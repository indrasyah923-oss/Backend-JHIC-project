<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $jurusan = DB::table('jurusan')
            ->pluck('id_jurusan', 'slug');

        DB::table('siswa')->insert([
            [
                'id_jurusan' => $jurusan['rekayasa-perangkat-lunak'],
                'nama' => 'Ahmad Rizky',
                'kelas' => 'XII RPL 1',
                'tahun_masuk' => 2023,
                'tahun_lulus' => 2026,
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['teknik-komputer-dan-jaringan'],
                'nama' => 'Budi Santoso',
                'kelas' => 'XII TKJ 1',
                'tahun_masuk' => 2023,
                'tahun_lulus' => 2026,
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['desain-komunikasi-visual'],
                'nama' => 'Citra Permata',
                'kelas' => 'XII DKV 1',
                'tahun_masuk' => 2023,
                'tahun_lulus' => 2026,
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}