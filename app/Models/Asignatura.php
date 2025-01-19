<?php

// app/Models/Asignatura.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';
    protected $fillable = ['nombre', 'descripcion'];

    // Relación 1:N con Nota
    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

    // Relación N:N con Alumno
    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_asignatura');
    }
}
