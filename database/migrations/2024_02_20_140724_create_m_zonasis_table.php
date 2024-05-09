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
        Schema::create('m_zonasis', function (Blueprint $table) {
            $table->smallIncrements('zonasi_id');
            $table->unsignedSmallInteger('sekolah_id');
            $table->unsignedSmallInteger('banjar_id');
            $table->unsignedTinyInteger('jenjang_sekolah_id');
            $table->foreign('sekolah_id')->references('sekolah_id')->on('m_sekolahs');
            $table->foreign('banjar_id')->references('banjar_id')->on('m_banjars');
            $table->foreign('jenjang_sekolah_id')->references('jenjang_sekolah_id')->on('m_jenjang_sekolahs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_zonasis');
    }
};
