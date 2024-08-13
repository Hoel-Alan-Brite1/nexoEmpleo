<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoresTable extends Migration
{
    public function up()
    {
        Schema::create('empleadores', function (Blueprint $table) {
            $table->id('idempleadores');
            $table->integer('tipo_empleador');
            $table->integer('nit');
            $table->string('razon_social', 100);
            $table->tinyInteger('validacion');
            $table->foreignId('usuario_idusuario')->constrained('usuarios', 'idusuario')->onDelete('cascade');
            $table->foreignId('categorias_idcategorias')->constrained('categorias', 'idcategorias')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleadores');
    }
}

