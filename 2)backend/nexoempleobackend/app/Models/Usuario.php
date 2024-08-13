<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';  // Define la tabla asociada
    protected $primaryKey = 'idusuario';  // Define la clave primaria

    // Puedes agregar propiedades como fillable o guarded para protección de asignación masiva
    protected $fillable = [
        'nombre', 
        'apellido1', 
        'apellido2', 
        'ci', 
        'correo', 
        'contrasena', 
        'fecha_nac', 
        'foto_validacion', 
        'validacion', 
        'rol', 
        'telf_celular', 
        'descripcion', 
        'estado', 
        'idusuario_mod'
    ];

    // Puedes definir las relaciones aquí
    // Relación con Empleador
    public function empleador()
    {
        return $this->hasOne(Empleador::class, 'usuario_idusuario');
    }

    // Relación con Trabajador
    public function trabajador()
    {
        return $this->hasOne(Trabajador::class, 'usuario_idusuario');
    }

    // Relación con Administrativo
    public function administrativo()
    {
        return $this->hasOne(Administrativo::class, 'usuario_idusuario');
    }
}
