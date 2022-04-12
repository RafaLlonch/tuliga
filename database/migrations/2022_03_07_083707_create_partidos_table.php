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
        Schema::create('partidos', function (Blueprint $table) {

            //borrado de cascada
            $table->engine="InnoDB";

            $table->id();
            $table->string('dia', 50)->nullable();
            $table->string('hora', 50)->nullable();
            $table->string('resultado', 50)->nullable();
            $table->bigInteger('id_equipo1')->unsigned();
            $table->bigInteger('id_equipo2')->unsigned();  
            
            //indico las llaves foráneas
            $table->foreign('id_equipo1')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('id_equipo2')->references('id')->on('equipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partidos');
    }
};
