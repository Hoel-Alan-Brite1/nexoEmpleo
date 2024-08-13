<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $table = 'especialidades';
    protected $primaryKey = 'idEspecialidades';

    // Relación con Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categorias_idcategorias');
    }

    // Relación con Trabajadores
    public function trabajadores()
    {
        return $this->belongsToMany(Trabajador::class, 'esp_trab', 'Especialidades_idEspecialidades', 'trabajadores_idtrabajadores');
    }

    // Relación con Habilidades
    public function habilidades()
    {
        return $this->belongsToMany(Habilidad::class, 'habil_esp', 'Especialidades_idEspecialidades', 'habilidades_idhabilidades');
    }
}
