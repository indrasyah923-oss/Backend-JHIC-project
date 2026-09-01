<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumniSeeder extends Seeder
{
    public function run(): void
    {
        $siswa = DB::table('siswa')->pluck('id_siswa', 'nama');

        DB::table('alumni')->insert([
            [
                'id_siswa' => $siswa['Ahmad Rizky'],
                'tahun_lulus' => 2026,
                'pekerjaan' => 'Web Developer',
                'perusahaan' => 'Perusahaan Teknologi',
                'deskripsi' => 'Bekerja sebagai pengembang website.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}