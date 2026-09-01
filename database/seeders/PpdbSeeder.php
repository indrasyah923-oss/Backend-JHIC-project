<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpdbSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ppdb')->insert([
            [
                'tahun_ajaran' => '2026/2027',
                'tanggal_mulai' => '2026-05-01',
                'tanggal_selesai' => '2026-07-15',
                'deskripsi' => 'Penerimaan Peserta Didik Baru Tahun Ajaran 2026/2027.',
                'persyaratan' => 'Lulusan SMP/MTs sederajat dan memenuhi persyaratan administrasi.',
                'status' => 'dibuka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}