<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido1' => $this->faker->lastName,
            'apellido2' => $this->faker->lastName,
            'ci' => $this->faker->unique()->numerify('#########'),
            'correo' => $this->faker->unique()->safeEmail,
            'contrasena' => bcrypt('password'), // Puedes usar Hash::make('password')
            'fecha_nac' => $this->faker->date(),
            'foto_validacion' => $this->faker->imageUrl(100, 100),
            'validacion' => $this->faker->boolean,
            'rol' => $this->faker->randomElement(['empleador', 'trabajador', 'administrativo']),
            'telf_celular' => $this->faker->numerify('##########'),
            'descripcion' => $this->faker->sentence,
            'estado' => $this->faker->boolean,
            'idusuario_mod' => 1, // Asume que el usuario modificador es 1
        ];
    }
}

