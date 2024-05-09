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
        Schema::create('m_siswas', function (Blueprint $table) {
            $table->increments('siswa_id');
            $table->unsignedSmallInteger('banjar_id');
            $table->unsignedSmallInteger('desa_id');
            $table->unsignedSmallInteger('kecamatan_id');
            $table->unsignedSmallInteger('kabupaten_id');
            $table->unsignedTinyInteger('provinsi_id');
            $table->foreign('banjar_id')->references('banjar_id')->on('m_banjars');
            $table->foreign('desa_id')->references('desa_id')->on('m_desas');
            $table->foreign('kecamatan_id')->references('kecamatan_id')->on('m_kecamatans');
            $table->foreign('kabupaten_id')->references('kabupaten_id')->on('m_kabupatens');
            $table->foreign('provinsi_id')->references('provinsi_id')->on('m_provinsis');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('nik', 16);
            $table->string('nisn', 10);
            $table->string('alamat_jalan');
            $table->string('nama_ibu_kandung');
            $table->string('pekerjaan_ibu');
            $table->unsignedInteger('penghasilan_ibu');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->unsignedInteger('penghasilan_ayah');
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->unsignedInteger('penghasilan_wali')->nullable();
            $table->boolean('kebutuhan_khusus');
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
        Schema::dropIfExists('m_siswas');
    }
};
