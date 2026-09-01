<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lowongan_pkl', function (Blueprint $table) {
            $table->id('id_lowongan_pkl');

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

            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();

            $table->string('status')->default('dibuka');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lowongan_pkl');
    }
};