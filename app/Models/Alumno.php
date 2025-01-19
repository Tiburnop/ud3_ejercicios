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

    // Relación 1:N con Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Relación N:N con Asignatura
    public function asignaturas()
    {
        return $this->belongsToMany(Asignatura::class, 'alumno_asignatura');
    }
    public function perfil()
    {
        return $this->hasOne(Perfil::class, 'usuario_id');
    }

}
