<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    protected $table = 'mensajes';
    protected $primaryKey = 'idMensaje';

    // Relación con Empleador
    public function empleador()
    {
        return $this->belongsTo(Empleador::class, 'empleadores_idempleadores');
    }

    // Relación con Solicitud
    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class, 'solicitudes_idSolicitudes');
    }
}
