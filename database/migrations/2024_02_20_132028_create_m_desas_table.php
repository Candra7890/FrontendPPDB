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
        Schema::create('m_desas', function (Blueprint $table) {
            $table->smallIncrements('desa_id');
            $table->unsignedSmallInteger('kecamatan_id');
            $table->foreign('kecamatan_id')->references('kecamatan_id')->on('m_kecamatans');
            $table->string('desa_nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_desas');
    }
};
