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
        Schema::create('reservacion', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('comida');
            $table->string('horario');
            $table->integer('mesa');
            $table->integer('asientos');
            $table->integer('adultos');
            $table->integer('menores');
            $table->string('nombre_completo');
            $table->string('telefono');
            $table->string('email');
            $table->string('tipo'); // 'huesped' o 'visitante'
            $table->string('habitacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservacion');
    }
};
