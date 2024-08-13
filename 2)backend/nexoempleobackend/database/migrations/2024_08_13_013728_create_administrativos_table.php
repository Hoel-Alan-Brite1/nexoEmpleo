<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativosTable extends Migration
{
    public function up()
    {
        Schema::create('administrativos', function (Blueprint $table) {
            $table->id('idadministrativos');
            $table->foreignId('usuario_idusuario')
                  ->constrained('usuarios', 'idusuario') // Cambia 'id' a 'idusuario'
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('administrativos');
    }
}
