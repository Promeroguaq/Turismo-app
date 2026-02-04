<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    // LISTAR TODOS
    public function index()
    {
        return Municipio::all();
    }

    // GUARDAR
    public function store(Request $request)
    {
        $request->validate([
            'nombre_municipios' => 'required|string|max:255',
            'id_localities' => 'required|integer',
            'descripcion' => 'nullable|string'
        ]);

        return Municipio::create($request->all());
    }

    // MOSTRAR UNO
    public function show($id)
    {
        return Municipio::findOrFail($id);
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $municipio = Municipio::findOrFail($id);
        $municipio->update($request->all());

        return $municipio;
    }

    // ELIMINAR
    public function destroy($id)
    {
        Municipio::destroy($id);
        return response()->json(['message' => 'Municipio eliminado']);
    }
}
