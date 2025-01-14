<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // GET /api/alumnos
    public function index()
    {
        return Alumno::all();
    }

    // GET /api/alumnos/{id}
    public function show($id)
    {
        return Alumno::findOrFail($id);
    }

    // POST /api/alumnos
    public function store(Request $request)
    {
        // Valida los datos antes de procesarlos
        $validated = $request->validate([
            'nombre' => 'required|string', // El nombre es obligatorio y debe ser texto
            'email' => 'required|email|unique:alumnos', // El email es obligatorio y debe ser único
        ]);

        // Crea un nuevo registro en la tabla alumnos
        $alumno = Alumno::create($validated);

        // Devuelve el alumno creado con un código 201
        return response()->json($alumno, 201);
    }

    // PUT /api/alumnos/{id}
    public function update(Request $request, $id)
    {
        // Busca el alumno por su ID
        $alumno = Alumno::findOrFail($id);
    
        // Valida los datos
        $validated = $request->validate([
            'nombre' => 'sometimes|string',
            'email' => 'sometimes|email|unique:alumnos,email,' . $id,
        ]);
    
        // Actualiza los datos del alumno
        $alumno->update($validated);
    
        // Forzar la actualización del timestamp de updated_at
        $alumno->touch();
    
        // Devuelve el alumno actualizado
        return response()->json($alumno, 200);
    }
    

    // DELETE /api/alumnos/{id}
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return response()->json(null, 204);
    }
}