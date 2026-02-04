<?php

namespace App\Http\Controllers;

use App\Models\DeporteAventura;
use Illuminate\Http\Request;

class DeporteAventuraController extends Controller
{
    // Obtener todos
    public function index()
    {
        return DeporteAventura::with('locality')->get();
    }

    // Guardar desde Excel / formulario
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'locality_id' => 'required|exists:localities,id',
            'descripcion' => 'nullable|string',
        ]);

        return DeporteAventura::create($request->all());
    }

    // Mostrar uno
    public function show($id)
    {
        return DeporteAventura::with('locality')->findOrFail($id);
    }

    // Actualizar
    public function update(Request $request, $id)
    {
        $deporte = DeporteAventura::findOrFail($id);

        $deporte->update($request->all());

        return $deporte;
    }

    // Eliminar
    public function destroy($id)
    {
        DeporteAventura::destroy($id);

        return response()->json(['message' => 'Eliminado correctamente']);
    }
}
