<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Empleador;
use App\Models\Trabajador;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear 10 usuarios con sus relaciones
        Usuario::factory(10)
            ->has(Empleador::factory()->count(1), 'empleador')
            ->has(Trabajador::factory()->count(1), 'trabajador')
            ->create();
    }
}

