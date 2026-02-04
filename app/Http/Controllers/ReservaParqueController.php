<?php

namespace App\Http\Controllers;

use App\Models\ReservaParque;
use Illuminate\Http\Request;

class ReservaParqueController extends Controller
{
    public function index()
    {
        return ReservaParque::all();
    }

    public function show($id)
    {
        return ReservaParque::findOrFail($id);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string',
            'locality_id' => 'required|integer',
            'descripcion' => 'nullable|string',
            'region_id' => 'required|integer',
        ]);

        return ReservaParque::create($data);
    }

    public function update(Request $request, $id)
    {
        $reserva = ReservaParque::findOrFail($id);

        $reserva->update($request->all());

        return $reserva;
    }

    public function destroy($id)
    {
        ReservaParque::findOrFail($id)->delete();

        return response()->json(['message' => 'Eliminado correctamente']);
    }
}
