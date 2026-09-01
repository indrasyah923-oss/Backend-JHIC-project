<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('fasilitas')->insert([
            [
                'nama' => 'Laboratorium Komputer',
                'deskripsi' => 'Laboratorium untuk pembelajaran teknologi informasi dan pengembangan perangkat lunak.',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio Desain',
                'deskripsi' => 'Ruang praktik untuk kegiatan desain dan produksi konten kreatif.',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Laboratorium Tata Boga',
                'deskripsi' => 'Fasilitas praktik pengolahan makanan dan bakery.',
                'gambar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}