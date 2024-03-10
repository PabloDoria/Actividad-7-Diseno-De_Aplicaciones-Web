<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCursoGrupo extends Migration
{
    public function up()
    {
        Schema::create('curso_grupo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('FK_IdCurso');
            $table->unsignedBigInteger('FK_IdGrupo');
            $table->foreign('FK_IdCurso')->references('id')->on('cursos');
            $table->foreign('FK_IdGrupo')->references('id')->on('grupos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('curso_grupo');
    }
}
