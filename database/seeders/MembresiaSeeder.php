<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membresia;

class MembresiaSeeder extends Seeder
{
    public function run(): void
    {
        Membresia::create([
            'nombre'     => 'Pirata',
            'rango'      => 'Básico',
            'precio'     => '30.000',
            'beneficios' => 'Acceso a zona de pesas, Vestuarios, Acceso en horario regular',
            'icono'      => '🏴‍☠️',
        ]);

        Membresia::create([
            'nombre'     => 'Shichibukai',
            'rango'      => 'Intermedio',
            'precio'     => '60.000',
            'beneficios' => 'Todo lo del plan Pirata, Acceso a clases grupales, Asesoría nutricional',
            'icono'      => '⚔️',
        ]);

        Membresia::create([
            'nombre'     => 'Yonkou',
            'rango'      => 'Premium',
            'precio'     => '90.000',
            'beneficios' => 'Todo lo del plan Shichibukai, Entrenador personal, Acceso 24/7, Zona VIP',
            'icono'      => '👑',
        ]);
    }
}