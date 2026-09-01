<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('perusahaan')->insert([
            [
                'nama' => 'PT Teknologi Nusantara',
                'slug' => 'pt-teknologi-nusantara',
                'industri' => 'Teknologi Informasi',
                'alamat' => 'Jl. Industri Digital No. 10',
                'kota' => 'Surabaya',
                'provinsi' => 'Jawa Timur',
                'website' => 'https://example.com',
                'logo' => null,
                'deskripsi' => 'Perusahaan yang bergerak di bidang pengembangan perangkat lunak dan solusi digital.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Digital Creative Studio',
                'slug' => 'digital-creative-studio',
                'industri' => 'Kreatif',
                'alamat' => 'Jl. Kreatif No. 21',
                'kota' => 'Malang',
                'provinsi' => 'Jawa Timur',
                'website' => 'https://example.com',
                'logo' => null,
                'deskripsi' => 'Studio kreatif yang bergerak di bidang desain dan produksi konten digital.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'PT Hospitality Indonesia',
                'slug' => 'pt-hospitality-indonesia',
                'industri' => 'Hospitality',
                'alamat' => 'Jl. Raya Hospitality No. 5',
                'kota' => 'Yogyakarta',
                'provinsi' => 'DI Yogyakarta',
                'website' => 'https://example.com',
                'logo' => null,
                'deskripsi' => 'Perusahaan yang bergerak di bidang hospitality dan pengelolaan hotel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}