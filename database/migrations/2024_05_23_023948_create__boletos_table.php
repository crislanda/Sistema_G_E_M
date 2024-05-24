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
        Schema::create('boletos', function (Blueprint $table) {
            $table->id('boleto_id');
            $table->unsignedBigInteger('evento_id');
            $table->foreign('evento_id')->references('evento_id')->on('_eventos');
            $table->decimal('precio_boleto', 10, 2);
            $table->string('tipo_boleta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_boletos');
    }
};
