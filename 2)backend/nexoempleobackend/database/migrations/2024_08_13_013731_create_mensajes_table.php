<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    public function up()
    {
        Schema::create('mensaje', function (Blueprint $table) {
            $table->id('idMensaje');
            $table->string('fecha', 45);
            $table->string('contenido', 10000)->nullable();
            $table->foreignId('empleadores_idempleadores')->constrained('empleadores')->onDelete('cascade');
            $table->foreignId('solicitudes_idSolicitudes')->constrained('solicitudes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mensaje');
    }
}
