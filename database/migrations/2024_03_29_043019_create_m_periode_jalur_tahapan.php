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
        Schema::create('m_periode_jalur_tahapan', function (Blueprint $table) {
            $table->smallIncrements('periode_jalur_tahapan_id');
            $table->unsignedSmallInteger('periode_jalur_id');
            $table->unsignedSmallInteger('tahapan_id');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->foreign('periode_jalur_id')->references('periode_jalur_id')->on('m_periode_jalur'); 
            $table->foreign('tahapan_id')->references('tahapan_id')->on('m_tahapan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_periode_jalur_tahapan');
    }
};
