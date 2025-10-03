<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('program_mbkm', function (Blueprint $table) {
            $table->id('id_program');
            $table->string('nama_mbkm', 100);
            $table->text('deskripsi');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->integer('kuota');
            $table->enum('status', ['Buka', 'Tutup']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_mbkm');
    }
};
