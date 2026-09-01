<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lowongan_kerja', function (Blueprint $table) {
            $table->id('id_lowongan_kerja');
            $table->foreignId('id_perusahaan')
                ->constrained('perusahaan', 'id_perusahaan')
                ->cascadeOnDelete();

            $table->foreignId('id_jurusan')
                ->constrained('jurusan', 'id_jurusan')
                ->restrictOnDelete();

            $table->string('posisi');
            $table->text('deskripsi')->nullable();
            $table->text('persyaratan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('tipe')->nullable();
            $table->string('status')->default('dibuka');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lowongan_kerja');
    }
};