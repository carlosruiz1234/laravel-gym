<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $fillable = [
        'nombre',
        'horario',
        'instructor',
        'cupos',
        'membresia_id',
    ];

    public function membresia()
    {
        return $this->belongsTo(Membresia::class);
    }
}