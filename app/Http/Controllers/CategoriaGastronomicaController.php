<?php

namespace App\Http\Controllers;

use App\Models\CategoriaGastronomica;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoriaGastronomicaController extends Controller
{
    /**
     * Mostrar todas las categorías gastronómicas.
     */
    public function index()
    {
        $categorias = CategoriaGastronomica::all();
        return response()->json($categorias);
    }

    /**
     * Crear una nueva categoría gastronómica.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_categoria_gastronomica' => 'required|string|max:255|unique:categorias_gastronomicas,nombre_categoria_gastronomica',
            'id_localities' => 'required|integer|exists:localities,id',
        ]);

        $categoria = CategoriaGastronomica::create($request->all());

        return response()->json([
            'message' => 'Categoría creada correctamente',
            'data' => $categoria
        ], 201);
    }

    /**
     * Mostrar una categoría específica.
     */
    public function show($id)
    {
        $categoria = CategoriaGastronomica::find($id);

        if (!$categoria) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }

        return response()->json($categoria);
    }

    /**
     * Actualizar una categoría existente.
     */
    public function update(Request $request, $id)
    {
        $categoria = CategoriaGastronomica::find($id);

        if (!$categoria) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }

        $request->validate([
            'nombre_categoria_gastronomica' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categorias_gastronomicas')->ignore($categoria->id_categoria_gastronomica, 'id_categoria_gastronomica'),
            ],
            'id_localities' => 'required|integer|exists:localities,id',
        ]);

        $categoria->update($request->all());

        return response()->json([
            'message' => 'Categoría actualizada correctamente',
            'data' => $categoria
        ]);
    }

    /**
     * Eliminar una categoría.
     */
    public function destroy($id)
    {
        $categoria = CategoriaGastronomica::find($id);

        if (!$categoria) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }

        $categoria->delete();

        return response()->json(['message' => 'Categoría eliminada correctamente']);
    }
}
