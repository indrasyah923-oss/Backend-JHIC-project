<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LowonganKerja extends Model
{
    protected $table = 'lowongan_kerja';

    protected $primaryKey = 'id_lowongan_kerja';

    protected $fillable = [
        'id_perusahaan',
        'id_jurusan',
        'posisi',
        'deskripsi',
        'persyaratan',
        'lokasi',
        'tipe',
        'status',
    ];

    public function perusahaan(): BelongsTo
    {
        return $this->belongsTo(
            Perusahaan::class,
            'id_perusahaan',
            'id_perusahaan'
        );
    }

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(
            Jurusan::class,
            'id_jurusan',
            'id_jurusan'
        );
    }
}