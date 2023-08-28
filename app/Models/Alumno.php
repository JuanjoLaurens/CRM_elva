<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombre', 'apellidos', 'escuela_id', 'fecha_nacimiento', 'ciudad_natal',
    ];

    public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }
}
