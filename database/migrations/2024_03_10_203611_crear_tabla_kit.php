<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaKit extends Migration
{
    public function up()
    {
        Schema::create('kits', function (Blueprint $table) {
            $table->id(); 
            $table->string('clave')->unique();
            $table->text('contenido');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kits');
    }
}
