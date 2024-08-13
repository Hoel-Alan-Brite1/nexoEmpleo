<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('idusuario');
            $table->string('nombre', 50);
            $table->string('apellido1', 50);
            $table->string('apellido2', 50)->nullable();
            $table->string('ci', 50);
            $table->string('correo', 100);
            $table->string('contrasena', 50);
            $table->date('fecha_nac');
            $table->string('foto_validacion', 100);
            $table->tinyInteger('validacion');
            $table->string('rol', 50);
            $table->integer('telf_celular');
            $table->string('descripcion', 80);
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();
            $table->smallInteger('idusuario_mod');
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
