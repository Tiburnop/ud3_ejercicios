<?php

// app/Models/Nota.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'notas';
    protected $fillable = ['alumno_id','asignatura_id','nota'];

    // Cada nota pertenece a un alumno
    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }

    // Cada nota pertenece a una asignatura
    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }
}