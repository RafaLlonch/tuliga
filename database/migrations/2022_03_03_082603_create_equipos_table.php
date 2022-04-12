<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {

            //borrado de cascada
            $table->engine="InnoDB";

            $table->id();
            $table->string('nombre_equipo', 50);
            $table->string('entrenador', 50);
            $table->string('presidente', 50); 
            $table->string('anio_fundacion', 4);
            $table->string('localidad', 50);
            $table->string('provincia', 50);
            $table->string('campo', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
};
