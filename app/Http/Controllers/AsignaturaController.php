<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        return Asignatura::all();
    }

    public function show($id)
    {
        return Asignatura::findOrFail($id);
    }

    public function store(Request $request)
    {
        // Requiere $fillable en Asignatura
        $asignatura = Asignatura::create($request->all());
        return response()->json($asignatura, 201);
    }

    public function update(Request $request, $id)
    {
        // Busca la asignatura por ID
        $asignatura = Asignatura::findOrFail($id);

        // Valida los datos que se envían
        $validated = $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'descripcion' => 'sometimes|string',
        ]);

        // Actualiza los campos que llegaron en el request (si los hay)
        if (!empty($validated)) {
            $asignatura->update($validated);
        }

        // Forzar la actualización del campo updated_at
        $asignatura->touch();

        // Devuelve la asignatura actualizada
        return response()->json($asignatura, 200);
    }

    public function destroy($id)
    {
        // Busca la asignatura por ID
        $asignatura = Asignatura::findOrFail($id);

        // Actualiza el campo updated_at antes de eliminar
        $asignatura->updated_at = now();
        $asignatura->save();

        // Elimina la asignatura
        $asignatura->delete();

        // Devuelve una respuesta con un mensaje personalizado
        return response()->json(['message' => 'Asignatura eliminada correctamente'], 200);
    }

}