<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LowonganKerjaSeeder extends Seeder
{
    public function run(): void
    {
        $perusahaan = DB::table('perusahaan')
            ->pluck('id_perusahaan', 'slug');

        $jurusan = DB::table('jurusan')
            ->pluck('id_jurusan', 'slug');

        DB::table('lowongan_kerja')->insert([
            [
                'id_perusahaan' => $perusahaan['pt-teknologi-nusantara'],
                'id_jurusan' => $jurusan['rekayasa-perangkat-lunak'],
                'posisi' => 'Junior Web Developer',
                'deskripsi' => 'Mengembangkan dan memelihara aplikasi berbasis web.',
                'persyaratan' => 'Memahami HTML, CSS, JavaScript dan database.',
                'lokasi' => 'Surabaya',
                'tipe' => 'Full Time',
                'status' => 'dibuka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}