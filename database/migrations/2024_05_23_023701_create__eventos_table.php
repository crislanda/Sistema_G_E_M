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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id('evento_id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->dateTime('fecha');
            $table->unsignedBigInteger('locacion_id');
            $table->unsignedBigInteger('artista_id');
            $table->foreign('locacion_id')->references('id')->on('_locaciones');
            $table->foreign('artista_id')->references('artista_id')->on('_artistas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_eventos');
    }
};
