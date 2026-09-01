<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    protected $table = 'jurusan';

    protected $primaryKey = 'id_jurusan';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'icon',
        'gambar',
    ];

    public function kompetensi(): HasMany
    {
        return $this->hasMany(Kompetensi::class, 'id_jurusan', 'id_jurusan');
    }

    public function siswa(): HasMany
    {
        return $this->hasMany(Siswa::class, 'id_jurusan', 'id_jurusan');
    }

    public function lowonganPkl(): HasMany
    {
        return $this->hasMany(LowonganPkl::class, 'id_jurusan', 'id_jurusan');
    }

    public function lowonganKerja(): HasMany
    {
        return $this->hasMany(LowonganKerja::class, 'id_jurusan', 'id_jurusan');
    }

    public function produk(): HasMany
    {
        return $this->hasMany(Produk::class, 'id_jurusan', 'id_jurusan');
    }
}