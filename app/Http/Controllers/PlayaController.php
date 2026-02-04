<?php

namespace App\Http\Controllers;

use App\Models\Playa;
use Illuminate\Http\Request;

class PlayaController extends Controller
{
    public function index()
    {
        return Playa::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'locality_id' => 'required|integer',
            'country_id' => 'required|integer',
        ]);

        return Playa::create($request->all());
    }

    public function show($id)
    {
        return Playa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $playa = Playa::findOrFail($id);
        $playa->update($request->all());

        return $playa;
    }

    public function destroy($id)
    {
        Playa::findOrFail($id)->delete();
        return response()->json(['ok' => true]);
    }
}
