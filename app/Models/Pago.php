<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'user_id',
        'membresia_id',
        'estado',
        'metodo_pago',
        'monto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function membresia()
    {
        return $this->belongsTo(Membresia::class);
    }
}