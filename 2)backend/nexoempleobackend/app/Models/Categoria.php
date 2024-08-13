<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $primaryKey = 'idcategorias';

    // Relación con Especialidades
    public function especialidades()
    {
        return $this->hasMany(Especialidad::class, 'categorias_idcategorias');
    }

    // Relación con Empleadores
    public function empleadores()
    {
        return $this->hasMany(Empleador::class, 'categorias_idcategorias');
    }
}

