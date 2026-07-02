<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rutina;

class RutinaSeeder extends Seeder
{
    public function run(): void
    {
        Rutina::create(['dia' => 'Lunes',     'ejercicio' => 'Pecho y triceps',  'series' => '3x10', 'membresia_id' => 1]);
        Rutina::create(['dia' => 'Miercoles', 'ejercicio' => 'Piernas',          'series' => '3x12', 'membresia_id' => 1]);
        Rutina::create(['dia' => 'Viernes',   'ejercicio' => 'Cardio',           'series' => '20 min', 'membresia_id' => 1]);

        Rutina::create(['dia' => 'Lunes',     'ejercicio' => 'Pecho y triceps',  'series' => '4x12', 'membresia_id' => 2]);
        Rutina::create(['dia' => 'Martes',    'ejercicio' => 'Espalda y biceps', 'series' => '4x10', 'membresia_id' => 2]);
        Rutina::create(['dia' => 'Miercoles', 'ejercicio' => 'Piernas',          'series' => '5x12', 'membresia_id' => 2]);
        Rutina::create(['dia' => 'Jueves',    'ejercicio' => 'Hombros',          'series' => '4x12', 'membresia_id' => 2]);
        Rutina::create(['dia' => 'Viernes',   'ejercicio' => 'Cardio',           'series' => '30 min', 'membresia_id' => 2]);


        Rutina::create(['dia' => 'Lunes',     'ejercicio' => 'Pecho y triceps',  'series' => '5x12', 'membresia_id' => 3]);
        Rutina::create(['dia' => 'Martes',    'ejercicio' => 'Espalda y biceps', 'series' => '5x10', 'membresia_id' => 3]);
        Rutina::create(['dia' => 'Miercoles', 'ejercicio' => 'Piernas',          'series' => '6x12', 'membresia_id' => 3]);
        Rutina::create(['dia' => 'Jueves',    'ejercicio' => 'Hombros',          'series' => '5x12', 'membresia_id' => 3]);
        Rutina::create(['dia' => 'Viernes',   'ejercicio' => 'Cardio',           'series' => '45 min', 'membresia_id' => 3]);
        Rutina::create(['dia' => 'Sabado',    'ejercicio' => 'Funcional',        'series' => '4x15', 'membresia_id' => 3]);
    }
}