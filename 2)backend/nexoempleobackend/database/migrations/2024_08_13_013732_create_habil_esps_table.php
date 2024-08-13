<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilEspsTable extends Migration
{
    public function up()
    {
        Schema::create('habil_esp', function (Blueprint $table) {
            $table->foreignId('Especialidades_idEspecialidades')->constrained('especialidades')->onDelete('cascade');
            $table->foreignId('habilidades_idhabilidades')->constrained('habilidades')->onDelete('cascade');
            $table->primary(['Especialidades_idEspecialidades', 'habilidades_idhabilidades']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('habil_esp');
    }
}
