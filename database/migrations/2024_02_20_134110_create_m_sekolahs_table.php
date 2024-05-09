<?php

use App\Models\Jenjang_sekolah;
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
        Schema::create('m_sekolahs', function (Blueprint $table) {
            $table->smallIncrements('sekolah_id');
            $table->string('sekolah_nama');
            $table->string('npsn', 8);
            $table->unsignedTinyInteger('jenjang_sekolah_id');
            $table->unsignedSmallInteger('banjar_id');
            $table->unsignedSmallInteger('desa_id');
            $table->unsignedSmallInteger('kecamatan_id');
            $table->unsignedSmallInteger('kabupaten_id');
            $table->unsignedTinyInteger('provinsi_id');
            $table->foreign('jenjang_sekolah_id')->references('jenjang_sekolah_id')->on('m_jenjang_sekolahs');
            $table->foreign('banjar_id')->references('banjar_id')->on('m_banjars');
            $table->foreign('desa_id')->references('desa_id')->on('m_desas');
            $table->foreign('kecamatan_id')->references('kecamatan_id')->on('m_kecamatans');
            $table->foreign('kabupaten_id')->references('kabupaten_id')->on('m_kabupatens');
            $table->foreign('provinsi_id')->references('provinsi_id')->on('m_provinsis');
            $table->unsignedSmallInteger('jumlah_kelas');
            $table->unsignedSmallInteger('total_daya_tampung');
            $table->decimal('lintang', 12, 9);
            $table->decimal('bujur', 12, 9);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_sekolahs');
    }
};
