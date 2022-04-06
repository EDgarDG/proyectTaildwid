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

    /***** ESTE METODO CREA TABLAS ******/
    public function up() {
        
        /***** CREA TABLA LLAMADA USERS CON LOS SIGUIENTES CAMPOS name, email, email_verified... ******/
        /***** DOS METODOS LLAMADOS rememberToken y timestamps******/
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    /***** ESTE METODO ELIMINA TABLAS ******/
    public function down() {
        Schema::dropIfExists('users');
    }
};
