<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEstatusAndMontajeToRestaurantesTable extends Migration
{
    public function up()
    {
        Schema::table('restaurantes', function (Blueprint $table) {
            $table->string('estatus')->nullable(); // Campo para el estatus
            $table->text('montaje')->nullable();   // Campo para el montaje
        });
    }

    public function down()
    {
        Schema::table('restaurantes', function (Blueprint $table) {
            $table->dropColumn(['estatus', 'montaje']);
        });
    }

};
