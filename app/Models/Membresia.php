<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    protected $fillable = [
        'nombre',
        'rango',
        'precio',
        'beneficios',
        'icono',
    ];

    public function clases()
    {
        return $this->hasMany(Clase::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function rutinas()
    {
        return $this->hasMany(Rutina::class);
    }
}