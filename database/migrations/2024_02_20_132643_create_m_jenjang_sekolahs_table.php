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
        Schema::create('m_jenjang_sekolahs', function (Blueprint $table) {
            $table->tinyIncrements('jenjang_sekolah_id');
            $table->string('jenjang_sekolah');
            $table->unsignedSmallInteger('max_siswa_per_kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_jenjang_sekolahs');
    }
};
