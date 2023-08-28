<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $fillable = [
        'nombre', 'direccion', 'logotipo', 'correo', 'telefono', 'pagina_web',
    ];

    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
}
