<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecialidadesTable extends Migration
{
    public function up()
    {
        Schema::create('especialidades', function (Blueprint $table) {
            $table->id('idEspecialidades');
            $table->string('nombre_espec', 80);
            $table->foreignId('categorias_idcategorias')->constrained('categorias')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('especialidades');
    }
}
