<?php

namespace App\Http\Controllers;

use App\Models\Museo;
use Illuminate\Http\Request;

class MuseoController extends Controller
{
    // Listar todos los museos
    public function index()
    {
        return Museo::all();
    }

    // Guardar museo
    public function store(Request $request)
    {
        $request->validate([
            'nombre_museo'   => 'required|string|max:255',
            'id_localities'  => 'required|integer',
            'descripcion'    => 'nullable|string',
            'id_country'     => 'required|integer',
        ]);

        return Museo::create($request->all());
    }

    // Mostrar un museo
    public function show($id)
    {
        return Museo::findOrFail($id);
    }

    // Actualizar museo
    public function update(Request $request, $id)
    {
        $museo = Museo::findOrFail($id);
        $museo->update($request->all());

        return $museo;
    }

    // Eliminar museo
    public function destroy($id)
    {
        Museo::destroy($id);
        return response()->json(['message' => 'Museo eliminado']);
    }
}
