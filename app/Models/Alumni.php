<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumni extends Model
{
    protected $table = 'alumni';

    protected $primaryKey = 'id_alumni';

    protected $fillable = [
        'id_siswa',
        'tahun_lulus',
        'pekerjaan',
        'perusahaan',
        'deskripsi',
    ];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(
            Siswa::class,
            'id_siswa',
            'id_siswa'
        );
    }
}