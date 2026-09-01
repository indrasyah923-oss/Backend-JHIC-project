<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';

    protected $primaryKey = 'id_perusahaan';

    protected $fillable = [
        'nama',
        'slug',
        'industri',
        'alamat',
        'kota',
        'provinsi',
        'website',
        'logo',
        'deskripsi',
    ];

    public function mitraIndustri(): HasMany
    {
        return $this->hasMany(
            MitraIndustri::class,
            'id_perusahaan',
            'id_perusahaan'
        );
    }

    public function lowonganPkl(): HasMany
    {
        return $this->hasMany(
            LowonganPkl::class,
            'id_perusahaan',
            'id_perusahaan'
        );
    }

    public function lowonganKerja(): HasMany
    {
        return $this->hasMany(
            LowonganKerja::class,
            'id_perusahaan',
            'id_perusahaan'
        );
    }

    public function penempatanPkl(): HasMany
    {
        return $this->hasMany(
            PenempatanPkl::class,
            'id_perusahaan',
            'id_perusahaan'
        );
    }
}