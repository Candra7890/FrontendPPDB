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
        Schema::create('m_banjars', function (Blueprint $table) {
            $table->smallIncrements('banjar_id');
            $table->unsignedSmallInteger('desa_id');
            $table->foreign('desa_id')->references('desa_id')->on('m_desas');
            $table->string('banjar_nama');
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
        Schema::dropIfExists('m_banjars');
    }
};
