<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        return Nota::all();
    }

    public function show($id)
    {
        return Nota::findOrFail($id);
    }

    public function store(Request $request)
    {
        $nota = Nota::create($request->all());
        return response()->json($nota, 201);
    }

    public function update(Request $request, $id)
    {
        // Encuentra la nota por ID
        $nota = Nota::findOrFail($id);

        // Valida los datos (opcional, dependiendo de tus reglas)
        $validated = $request->validate([
            'alumno_id' => 'sometimes|exists:alumnos,id',
            'asignatura_id' => 'sometimes|exists:asignaturas,id',
            'nota' => 'sometimes|numeric|min:0|max:10',
        ]);

        // Actualiza los campos que llegaron en el request (si los hay)
        if (!empty($validated)) {
            $nota->update($validated);
        }

        // Forzar la actualización del campo updated_at
        $nota->touch();

        // Retornar la nota actualizada
        return response()->json($nota, 200);
    }

    public function destroy($id)
    {
        // Busca la nota por ID
        $nota = Nota::findOrFail($id);

        // Actualiza el campo updated_at antes de eliminar
        $nota->updated_at = now();
        $nota->save();

        // Elimina la nota
        $nota->delete();

        // Devuelve una respuesta de éxito
        return response()->json(['message' => 'Nota eliminada correctamente'], 200);
    }

}