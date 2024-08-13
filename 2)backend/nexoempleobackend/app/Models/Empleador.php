<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleador extends Model
{
    use HasFactory;

    protected $table = 'empleadores';
    protected $primaryKey = 'idempleadores';

    // Relación con Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_idusuario');
    }

    // Relación con Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categorias_idcategorias');
    }

    // Relación con Ofertas
    public function ofertas()
    {
        return $this->hasMany(Oferta::class, 'empleadores_idempleadores');
    }
}

