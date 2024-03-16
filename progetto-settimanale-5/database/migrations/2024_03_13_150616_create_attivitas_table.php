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
        Schema::create('attivitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('progetto_id');
            $table->foreign('progetto_id')->references('id')->on('progettos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome');
            $table->string('descrizione');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attivitas');
    }
};
