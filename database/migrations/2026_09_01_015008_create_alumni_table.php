<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id('id_alumni');

            $table->foreignId('id_siswa')
                ->unique()
                ->constrained('siswa', 'id_siswa')
                ->cascadeOnDelete();

            $table->year('tahun_lulus');
            $table->string('pekerjaan')->nullable();
            $table->string('perusahaan')->nullable();
            $table->text('deskripsi')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alumni');
    }
};