<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    protected $fillable = [
        'dia',
        'ejercicio',
        'series',
        'membresia_id',
    ];

    public function membresia()
    {
        return $this->belongsTo(Membresia::class);
    }
}