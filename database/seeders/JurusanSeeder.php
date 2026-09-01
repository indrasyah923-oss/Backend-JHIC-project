<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jurusan')->insert([
            [
                'nama' => 'Rekayasa Perangkat Lunak',
                'slug' => 'rekayasa-perangkat-lunak',
                'deskripsi' => 'Program keahlian yang berfokus pada pengembangan perangkat lunak, website, aplikasi, database, dan teknologi digital.',
                'icon' => 'code',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Teknik Komputer dan Jaringan',
                'slug' => 'teknik-komputer-dan-jaringan',
                'deskripsi' => 'Program keahlian yang mempelajari komputer, jaringan, server, keamanan jaringan, dan infrastruktur teknologi informasi.',
                'icon' => 'network',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Desain Komunikasi Visual',
                'slug' => 'desain-komunikasi-visual',
                'deskripsi' => 'Program keahlian yang berfokus pada desain grafis, branding, ilustrasi, fotografi, dan komunikasi visual.',
                'icon' => 'palette',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Animasi',
                'slug' => 'animasi',
                'deskripsi' => 'Program keahlian yang mempelajari pembuatan animasi 2D, 3D, visual effects, dan produksi konten digital.',
                'icon' => 'film',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Tata Boga',
                'slug' => 'tata-boga',
                'deskripsi' => 'Program keahlian yang mempelajari pengolahan makanan, pastry, bakery, penyajian, dan kewirausahaan kuliner.',
                'icon' => 'utensils',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Perhotelan',
                'slug' => 'perhotelan',
                'deskripsi' => 'Program keahlian yang mempelajari pengelolaan hotel, pelayanan tamu, housekeeping, dan industri hospitality.',
                'icon' => 'hotel',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}