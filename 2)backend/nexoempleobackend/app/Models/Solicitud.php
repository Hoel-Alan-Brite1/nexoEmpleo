<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';
    protected $primaryKey = 'idSolicitudes';

    // Relación con Trabajador
    public function trabajador()
    {
        return $this->belongsTo(Trabajador::class, 'trabajadores_idtrabajadores');
    }

    // Relación con Oferta
    public function oferta()
    {
        return $this->belongsTo(Oferta::class, 'ofertas_idofertas');
    }
}
