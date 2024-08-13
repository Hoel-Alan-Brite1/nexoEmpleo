<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id('idofertas');
            $table->string('titulo', 80);
            $table->string('descripcion', 200);
            $table->unsignedInteger('cant_vacantes');
            $table->unsignedInteger('sueldo');
            $table->string('nivel_estudio_requerido', 100);
            $table->unsignedInteger('anos_experiencia_requerido');
            $table->tinyInteger('disponibilidad_viaje');
            $table->tinyInteger('disponibilidad_mudanza');
            $table->tinyInteger('estado');
            $table->date('fecha_creacion');
            $table->string('idusuario_mod', 45);
            $table->foreignId('empleadores_idempleadores')
                  ->constrained('empleadores', 'idempleadores') // Asegúrate de que esté apuntando a 'idempleadores'
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ofertas');
    }
}

