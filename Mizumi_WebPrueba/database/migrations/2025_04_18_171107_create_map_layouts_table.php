<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('map_layouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->json('layout_data'); // Guardará mesas, escenarios, etc.
            $table->integer('grid_columns'); // Valor de "columnas (X)"
            $table->integer('grid_rows');    // Valor de "filas (Y)"
            $table->integer('chairs_per_table'); // Select de "sillasxmesa"
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('map_layouts');
    }
};