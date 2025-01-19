<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfiles'; // Especifica el nombre correcto de la tabla

    protected $fillable = ['usuario_id', 'biografia'];

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'usuario_id');
    }
}

