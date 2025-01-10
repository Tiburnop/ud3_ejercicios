<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlumnosTableSeeder extends Seeder
{
    public function run(): void
    {
        // Comprobar si el alumno ya existe antes de insertarlo
        if (!DB::table('alumnos')->where('email', 'juan.perez@example.com')->exists()) {
            DB::table('alumnos')->insert([
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        // Repetir lo mismo para los otros alumnos
        if (!DB::table('alumnos')->where('email', 'maria.gonzalez@example.com')->exists()) {
            DB::table('alumnos')->insert([
                'nombre' => 'María González',
                'email' => 'maria.gonzalez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        if (!DB::table('alumnos')->where('email', 'carlos.lopez@example.com')->exists()) {
            DB::table('alumnos')->insert([
                'nombre' => 'Carlos López',
                'email' => 'carlos.lopez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
