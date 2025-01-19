<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'alumno_id' => 1,
            'titulo' => 'Mi primer post',
            'contenido' => 'Este es el contenido de mi primer post'
        ]);

        Post::create([
            'alumno_id' => 2,
            'titulo' => 'Un post interesante',
            'contenido' => 'Este es el contenido de un post muy interesante'
        ]);
    }
}
