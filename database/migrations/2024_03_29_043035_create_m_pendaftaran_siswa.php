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
        Schema::create('m_pendaftaran_siswa', function (Blueprint $table) {
            $table->smallIncrements('pendaftaran_siswa_id');
            $table->unsignedSmallInteger('periode_jalur_id');
            $table->unsignedSmallInteger('siswa_id');
            $table->unsignedSmallInteger('status_kelulusan_id');
            $table->unsignedSmallInteger('sekolah_id');
            $table->foreign('periode_jalur_id')->references('periode_jalur_id')->on('m_periode_jalur'); 
            $table->foreign('siswa_id')->references('siswa_id')->on('m_siswa');
            $table->foreign('status_kelulusan_id')->references('status_kelulusan_id')->on('m_status_kelulusan');
            $table->foreign('sekolah_id')->references('sekolah_id')->on('m_sekolah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_pendaftaran_siswa');
    }
};
