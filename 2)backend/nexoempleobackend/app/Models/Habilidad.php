<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;

    protected $table = 'habilidades';
    protected $primaryKey = 'idhabilidades';

    // Relación con Especialidades
    public function especialidades()
    {
        return $this->belongsToMany(Especialidad::class, 'habil_esp', 'habilidades_idhabilidades', 'Especialidades_idEspecialidades');
    }
}
