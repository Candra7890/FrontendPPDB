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
        Schema::create('m_kecamatans', function (Blueprint $table) {
            $table->smallIncrements('kecamatan_id');
            $table->unsignedSmallInteger('kabupaten_id');
            $table->foreign('kabupaten_id')->references('kabupaten_id')->on('m_kabupatens');
            $table->string('kecamatan_nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_kecamatans');
    }
};
