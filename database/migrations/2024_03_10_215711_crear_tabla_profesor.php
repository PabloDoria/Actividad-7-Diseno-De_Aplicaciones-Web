<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProfesor extends Migration
{
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_de_nacimiento');
            $table->unsignedBigInteger('FK_IdTipoUsuario');
            $table->foreign('FK_IdTipoUsuario')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}

