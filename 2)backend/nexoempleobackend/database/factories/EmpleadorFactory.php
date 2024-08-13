<?php

namespace Database\Factories;

use App\Models\Empleador;
use App\Models\Usuario;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadorFactory extends Factory
{
    protected $model = Empleador::class;

    public function definition()
    {
        return [
            'tipo_empleador' => $this->faker->randomElement([1, 2]), // 1 para persona, 2 para empresa
            'nit' => $this->faker->numerify('########'),
            'razon_social' => $this->faker->company,
            'validacion' => $this->faker->boolean,
            'usuario_idusuario' => Usuario::factory(), // Crea un usuario relacionado
            'categorias_idcategorias' => Categoria::factory(), // Crea una categoría relacionada
        ];
    }
}

