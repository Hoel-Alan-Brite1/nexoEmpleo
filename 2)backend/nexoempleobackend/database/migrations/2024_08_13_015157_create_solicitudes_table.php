<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('idSolicitudes');
            $table->date('fecha_solicitud');
            $table->tinyInteger('estado_aceptacion')->default(0);
            $table->foreignId('trabajadores_idtrabajadores')->constrained('trabajadores')->onDelete('cascade');
            $table->foreignId('ofertas_idofertas')->constrained('ofertas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
