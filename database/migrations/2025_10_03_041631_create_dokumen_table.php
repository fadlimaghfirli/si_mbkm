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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id('id_dokumen', 11);
            $table->foreignId('id_pendaftar', 11);
            $table->string('perizinan', 100);
            $table->string('portofolio', 100);
            $table->string('cv', 100);
            $table->string('transkrip', 100);
            $table->string('proposal', 100);
            $table->string('pengantar', 100);
            $table->string('foto', 100);
            $table->string('ket_diterima', 100);
            $table->string('lap_akhir', 100);
            $table->string('sertifikat', 100);
            $table->string('sk_selesai', 100);
            $table->string('form_penilaian', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
