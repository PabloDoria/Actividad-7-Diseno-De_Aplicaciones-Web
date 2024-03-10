<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTipogrupo extends Migration
{
    public function up()
    {
        Schema::create('tipo_grupos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_grupos');
    }
}
