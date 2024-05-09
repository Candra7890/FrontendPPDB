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
        Schema::create('m_periode_jalur', function (Blueprint $table) {
            $table->smallIncrements('periode_jalur_id');
            $table->unsignedSmallInteger('periode_id');
            $table->unsignedSmallInteger('jalur_id');
            $table->foreign('periode_id')->references('periode_id')->on('m_periode'); 
            $table->foreign('jalur_id')->references('jalur_id')->on('m_jalur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_periode_jalur');
    }
};
