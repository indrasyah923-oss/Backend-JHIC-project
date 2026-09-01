<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kompetensi extends Model
{
    protected $table = 'kompetensi';

    protected $primaryKey = 'id_kompetensi';

    protected $fillable = [
        'id_jurusan',
        'nama',
        'deskripsi',
    ];

    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(
            Jurusan::class,
            'id_jurusan',
            'id_jurusan'
        );
    }
}