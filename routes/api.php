<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\AsignaturaController;
use App\Models\Alumno;
use App\Models\Post;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Alumnos
Route::get('/alumnos', [AlumnoController::class, 'index']);
Route::get('/alumnos/{id}', [AlumnoController::class, 'show']);
Route::post('/alumnos', [AlumnoController::class, 'store']);
Route::put('/alumnos/{id}', [AlumnoController::class, 'update']);
Route::delete('/alumnos/{id}', [AlumnoController::class, 'destroy']);

// Notas
Route::get('/notas', [NotaController::class, 'index']);
Route::get('/notas/{id}', [NotaController::class, 'show']);
Route::post('/notas', [NotaController::class, 'store']);
Route::put('/notas/{id}', [NotaController::class, 'update']);
Route::delete('/notas/{id}', [NotaController::class, 'destroy']);


// Asignaturas
Route::get('/asignaturas', [AsignaturaController::class, 'index']);
Route::get('/asignaturas/{id}', [AsignaturaController::class, 'show']);
Route::post('/asignaturas', [AsignaturaController::class, 'store']);
Route::put('/asignaturas/{id}', [AsignaturaController::class, 'update']);
Route::delete('/asignaturas/{id}', [AsignaturaController::class, 'destroy']);

// Relación Alumnos ↔ Asignaturas
Route::get('/alumnos/{id}/asignaturas', [AlumnoController::class, 'getAsignaturas']);
Route::post('/alumnos/{id}/asignaturas', [AlumnoController::class, 'addAsignatura']);
Route::delete('/alumnos/{id}/asignaturas/{asignatura_id}', [AlumnoController::class, 'removeAsignatura']);

Route::get('/asignaturas/{id}/alumnos', [AsignaturaController::class, 'getAlumnos']);



Route::get('/alumnos/{id}/posts', function ($id) {
    $alumno = Alumno::findOrFail($id);
    return response()->json($alumno->posts);
});

Route::get('/posts/{id}/alumno', function ($id) {
    $post = Post::findOrFail($id);
    return response()->json($post->alumno);
});
