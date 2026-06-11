<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clase;

class ClaseSeeder extends Seeder
{
    public function run(): void
    {
        Clase::create(['nombre' => 'Pesas',   'horario' => 'Lunes 7am',     'instructor' => 'Luis',  'cupos' => 10, 'membresia_id' => 1]);
        Clase::create(['nombre' => 'Cardio',  'horario' => 'Miercoles 8am', 'instructor' => 'Ana',   'cupos' => 10, 'membresia_id' => 1]);
        Clase::create(['nombre' => 'Zumba',   'horario' => 'Viernes 5pm',   'instructor' => 'Sofia', 'cupos' => 10, 'membresia_id' => 1]);


        Clase::create(['nombre' => 'Spinning', 'horario' => 'Martes 6pm',    'instructor' => 'Pedro', 'cupos' => 8, 'membresia_id' => 2]);
        Clase::create(['nombre' => 'Yoga',     'horario' => 'Jueves 7am',    'instructor' => 'Ana',   'cupos' => 8, 'membresia_id' => 2]);
        Clase::create(['nombre' => 'Pilates',  'horario' => 'Sabado 9am',    'instructor' => 'Maria', 'cupos' => 8, 'membresia_id' => 2]);


        Clase::create(['nombre' => 'Crossfit',       'horario' => 'Lunes 8am',    'instructor' => 'Luis',  'cupos' => 6, 'membresia_id' => 3]);
        Clase::create(['nombre' => 'Artes Marciales','horario' => 'Miercoles 6pm','instructor' => 'Carlos','cupos' => 6, 'membresia_id' => 3]);
        Clase::create(['nombre' => 'Natacion',        'horario' => 'Viernes 7am',  'instructor' => 'Pedro', 'cupos' => 6, 'membresia_id' => 3]);
    }
}