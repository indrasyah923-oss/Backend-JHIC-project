<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('berita')->insert([
            [
                'judul' => 'Siswa Berhasil Meraih Prestasi Tingkat Provinsi',
                'slug' => 'siswa-berhasil-meraih-prestasi-tingkat-provinsi',
                'isi' => 'Siswa berhasil meraih prestasi dalam kompetisi tingkat provinsi.',
                'gambar' => null,
                'kategori' => 'Prestasi',
                'tanggal_publish' => now(),
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Program PKL dan Career Center',
                'slug' => 'program-pkl-dan-career-center',
                'isi' => 'Sekolah terus memperkuat hubungan antara siswa dan dunia industri melalui program PKL dan Career Center.',
                'gambar' => null,
                'kategori' => 'Sekolah',
                'tanggal_publish' => now(),
                'status' => 'published',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}