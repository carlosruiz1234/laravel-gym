<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RutinaPersonalizada extends Model
{
    protected $table = 'rutinas_personalizadas';

    protected $fillable = [
        'user_id',
        'dia',
        'ejercicio',
        'series',
        'notas',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}