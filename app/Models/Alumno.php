<?php

// app/Models/Alumno.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // (Opcional si el nombre de la tabla es "alumnos")
    protected $table = 'alumnos';

    protected $fillable = ['nombre', 'email'];

    // Relaciones
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }
}