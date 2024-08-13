<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspTrabTable extends Migration
{
    public function up()
    {
        Schema::create('esp_trab', function (Blueprint $table) {
            $table->foreignId('Especialidades_idEspecialidades')->constrained('especialidades')->onDelete('cascade');
            $table->foreignId('trabajadores_idtrabajadores')->constrained('trabajadores')->onDelete('cascade');
            $table->primary(['Especialidades_idEspecialidades', 'trabajadores_idtrabajadores']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('esp_trab');
    }
}
