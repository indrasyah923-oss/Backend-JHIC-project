<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        $siswa = DB::table('siswa')->pluck('id_siswa', 'nama');

        DB::table('prestasi')->insert([
            [
                'id_siswa' => $siswa['Ahmad Rizky'],
                'judul' => 'Juara Kompetisi Web Development',
                'tingkat' => 'Provinsi',
                'penyelenggara' => 'Kompetisi Teknologi',
                'tahun' => 2026,
                'deskripsi' => 'Meraih prestasi dalam kompetisi pengembangan website.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_siswa' => $siswa['Citra Permata'],
                'judul' => 'Juara Desain Poster Digital',
                'tingkat' => 'Kabupaten',
                'penyelenggara' => 'Festival Kreativitas Pelajar',
                'tahun' => 2026,
                'deskripsi' => 'Meraih prestasi dalam kompetisi desain digital.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}