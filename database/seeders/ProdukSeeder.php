<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $jurusan = DB::table('jurusan')
            ->pluck('id_jurusan', 'slug');

        DB::table('produk')->insert([
            [
                'id_jurusan' => $jurusan['tata-boga'],
                'nama' => 'Produk Bakery Sekolah',
                'kategori' => 'Kuliner',
                'deskripsi' => 'Produk bakery hasil praktik siswa Tata Boga.',
                'harga' => 15000,
                'gambar' => null,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jurusan' => $jurusan['desain-komunikasi-visual'],
                'nama' => 'Jasa Desain Grafis',
                'kategori' => 'Jasa',
                'deskripsi' => 'Layanan desain grafis yang dikembangkan oleh siswa.',
                'harga' => null,
                'gambar' => null,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}