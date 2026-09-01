<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mitra_industri', function (Blueprint $table) {
            $table->id('id_mitra');

            $table->foreignId('id_perusahaan')
                ->constrained('perusahaan', 'id_perusahaan')
                ->cascadeOnDelete();

            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->string('status')->default('aktif');
            $table->text('deskripsi')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mitra_industri');
    }
};