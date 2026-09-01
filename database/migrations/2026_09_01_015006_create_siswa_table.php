<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id('id_siswa');

            $table->foreignId('id_jurusan')
                ->constrained('jurusan', 'id_jurusan')
                ->restrictOnDelete();

            $table->string('nama');
            $table->string('kelas');
            $table->year('tahun_masuk');
            $table->year('tahun_lulus')->nullable();
            $table->string('foto')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};