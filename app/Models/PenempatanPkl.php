<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenempatanPkl extends Model
{
    protected $table = 'penempatan_pkl';

    protected $primaryKey = 'id_penempatan';

    protected $fillable = [
        'id_siswa',
        'id_perusahaan',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'pembimbing',
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(
            Siswa::class,
            'id_siswa',
            'id_siswa'
        );
    }

    public function perusahaan(): BelongsTo
    {
        return $this->belongsTo(
            Perusahaan::class,
            'id_perusahaan',
            'id_perusahaan'
        );
    }
}