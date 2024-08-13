<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;

    protected $table = 'trabajadores';
    protected $primaryKey = 'idtrabajadores';

    // Relación con Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_idusuario');
    }

    // Relación con Especialidades
    public function especialidades()
    {
        return $this->belongsToMany(Especialidad::class, 'esp_trab', 'trabajadores_idtrabajadores', 'Especialidades_idEspecialidades');
    }

    // Relación con Solicitudes
    public function solicitudes()
    {
        return $this->hasMany(Solicitud::class, 'trabajadores_idtrabajadores');
    }
}
