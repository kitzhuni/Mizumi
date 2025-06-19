<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('maps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('columns');
            $table->integer('rows');
            $table->json('objects'); // Almacenará los objetos del mapa en formato JSON
            $table->integer('scenario_quantity');
            $table->integer('clue_quantity');
            $table->integer('table_quantity');
            $table->integer('chairs_per_table');
            $table->decimal('adult_chair_price', 8, 2);
            $table->decimal('child_chair_price', 8, 2);
            $table->decimal('infant_chair_price', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maps');
    }
};