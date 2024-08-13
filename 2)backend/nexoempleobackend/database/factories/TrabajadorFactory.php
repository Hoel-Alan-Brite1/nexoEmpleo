<?php

namespace Database\Factories;

use App\Models\Trabajador;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrabajadorFactory extends Factory
{
    protected $model = Trabajador::class;

    public function definition()
    {
        return [
            'sueldo_aspirado' => $this->faker->numberBetween(1000, 5000),
            'anos_experiencia' => $this->faker->numberBetween(1, 20),
            'nivel_estudio' => $this->faker->randomElement(['Secundaria', 'Técnico', 'Universitario']),
            'disponibilidad_viaje' => $this->faker->boolean,
            'disponibilidad_mudanza' => $this->faker->boolean,
            'cur_vit' => $this->faker->url,
            'usuario_idusuario' => Usuario::factory(), // Crea un usuario relacionado
        ];
    }
}

