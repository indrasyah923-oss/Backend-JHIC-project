<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'id_jurusan',
        'nama',
        'kelas',
        'tahun_masuk',
        'tahun_lulus',
        'foto',
    ];

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(
            Jurusan::class,
            'id_jurusan',
            'id_jurusan'
        );
    }

    public function prestasi(): HasMany
    {
        return $this->hasMany(
            Prestasi::class,
            'id_siswa',
            'id_siswa'
        );
    }

    public function alumni(): HasOne
    {
        return $this->hasOne(
            Alumni::class,
            'id_siswa',
            'id_siswa'
        );
    }

    public function penempatanPkl(): HasMany
    {
        return $this->hasMany(
            PenempatanPkl::class,
            'id_siswa',
            'id_siswa'
        );
    }
}