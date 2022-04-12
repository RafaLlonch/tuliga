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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //Integer Unsigned AutoIncrement
            $table->string('name', 100); //varchar 255 caracteres
            $table->string('email')->unique(); //email unico
            $table->timestamp('email_verified_at')->nullable(); //almacena la fecha que se verifico el mail
            $table->string('password'); 
            $table->rememberToken(); //varchar toquen de 100
            $table->timestamps(); //crea dos columnas timestamp //create_at //update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
