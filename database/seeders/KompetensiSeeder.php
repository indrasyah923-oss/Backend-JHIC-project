<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KompetensiSeeder extends Seeder
{
    public function run(): void
    {
        $jurusan = DB::table('jurusan')
            ->pluck('id_jurusan', 'slug');

        DB::table('kompetensi')->insert([
            [
                'id_jurusan' => $jurusan['rekayasa-perangkat-lunak'],
                'nama' => 'Web Development',
                'deskripsi' => 'Pengembangan website menggunakan teknologi frontend dan backend.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['rekayasa-perangkat-lunak'],
                'nama' => 'Mobile Development',
                'deskripsi' => 'Pengembangan aplikasi mobile.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['rekayasa-perangkat-lunak'],
                'nama' => 'Database',
                'deskripsi' => 'Perancangan dan pengelolaan database.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['teknik-komputer-dan-jaringan'],
                'nama' => 'Network Administration',
                'deskripsi' => 'Administrasi dan konfigurasi jaringan komputer.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['teknik-komputer-dan-jaringan'],
                'nama' => 'Server Administration',
                'deskripsi' => 'Pengelolaan server dan layanan jaringan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['desain-komunikasi-visual'],
                'nama' => 'Graphic Design',
                'deskripsi' => 'Pembuatan desain grafis dan materi visual.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['desain-komunikasi-visual'],
                'nama' => 'Branding',
                'deskripsi' => 'Pengembangan identitas visual dan branding.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['animasi'],
                'nama' => '2D Animation',
                'deskripsi' => 'Pembuatan animasi dua dimensi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['animasi'],
                'nama' => '3D Animation',
                'deskripsi' => 'Pembuatan animasi tiga dimensi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['tata-boga'],
                'nama' => 'Food Production',
                'deskripsi' => 'Pengolahan dan produksi makanan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['tata-boga'],
                'nama' => 'Pastry and Bakery',
                'deskripsi' => 'Pengolahan pastry dan bakery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['perhotelan'],
                'nama' => 'Front Office',
                'deskripsi' => 'Pelayanan tamu dan operasional front office.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['perhotelan'],
                'nama' => 'Housekeeping',
                'deskripsi' => 'Pengelolaan kebersihan dan fasilitas hotel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}