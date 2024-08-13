<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajadoresTable extends Migration
{
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id('idtrabajadores');
            $table->unsignedInteger('sueldo_aspirado');
            $table->unsignedInteger('anos_experiencia');
            $table->string('nivel_estudio', 100);
            $table->tinyInteger('disponibilidad_viaje');
            $table->tinyInteger('disponibilidad_mudanza');
            $table->string('cur_vit', 100);
            $table->foreignId('usuario_idusuario')->constrained('usuarios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('trabajadores');
    }
}
