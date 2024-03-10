<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAministrador extends Migration
{
    public function up()
{
    Schema::create('aministrador', function (Blueprint $table) {
        $table->id();
        $table->string('rol');
        $table->unsignedBigInteger('FK_IdTipoUsuario');
        $table->foreign('FK_IdTipoUsuario')->references('id')->on('usuarios');
        $table->timestamps();
    });
}

}

