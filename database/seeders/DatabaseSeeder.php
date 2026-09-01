<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            KompetensiSeeder::class,

            SiswaSeeder::class,
            PrestasiSeeder::class,
            AlumniSeeder::class,

            PerusahaanSeeder::class,
            MitraIndustriSeeder::class,

            LowonganPklSeeder::class,
            LowonganKerjaSeeder::class,

            PenempatanPklSeeder::class,

            ProdukSeeder::class,
            BeritaSeeder::class,
            FasilitasSeeder::class,
            PpdbSeeder::class,
        ]);
    }
}