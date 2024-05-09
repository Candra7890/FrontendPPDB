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
        Schema::create('m_jalur_berkas', function (Blueprint $table) {
            $table->smallIncrements('jalur_berkas_id');
            $table->unsignedTinyInteger('jalur_id');
            $table->unsignedTinyInteger('jenjang_sekolah_id');
            $table->foreign('jalur_id')->references('jalur_id')->on('m_jalurs');
            $table->foreign('jenjang_sekolah_id')->references('jenjang_sekolah_id')->on('m_jenjang_sekolahs');
            $table->string('berkas_nama');
            $table->unsignedSmallInteger('max_upload');
            $table->boolean('isMandatory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_jalur_berkas');
    }
};
