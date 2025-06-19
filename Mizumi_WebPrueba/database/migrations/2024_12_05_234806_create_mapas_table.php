<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('mapas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('restaurante_id')->constrained()->onDelete('cascade');
        $table->float('x');
        $table->float('y');
        $table->float('width');
        $table->float('height');
        $table->string('label');
        $table->string('type');
        $table->json('styles')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapas');
    }
};
