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
        Schema::create('m_persentases', function (Blueprint $table) {
            $table->increments('persentase_id');
            $table->unsignedInteger('periode_id');
            $table->unsignedTinyInteger('jalur_id');
            $table->foreign('periode_id')->references('periode_id')->on('m_periodes');
            $table->foreign('jalur_id')->references('jalur_id')->on('m_jalurs');
            $table->decimal('persentase',  5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_persentases');
    }
};
