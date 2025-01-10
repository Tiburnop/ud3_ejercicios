<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AsignaturasTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('asignaturas')->insert([
            ['nombre' => 'Matemáticas', 'descripcion' => 'Asignatura de matemáticas básicas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Lengua', 'descripcion' => 'Asignatura de lengua y literatura', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['nombre' => 'Ciencias', 'descripcion' => 'Asignatura de ciencias naturales', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
