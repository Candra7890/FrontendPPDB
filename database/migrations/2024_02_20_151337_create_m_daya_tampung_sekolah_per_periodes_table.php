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
        Schema::create('m_daya_tampung_sekolah_per_periodes', function (Blueprint $table) {
            $table->smallIncrements('daya_tampung_sekolah_per_periode_id');
            $table->unsignedSmallInteger('sekolah_id');
            $table->unsignedInteger('periode_id');
            $table->unsignedTinyInteger('jalur_id');
            $table->foreign('sekolah_id')->references('sekolah_id')->on('m_sekolahs');
            $table->foreign('periode_id')->references('periode_id')->on('m_periodes');
            $table->foreign('jalur_id')->references('jalur_id')->on('m_jalurs');
            $table->unsignedSmallInteger('daya_tampung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_daya_tampung_sekolah_per_periodes');
    }
};
