<?php

namespace App\Http\Controllers;

use App\Models\Departamento;

class DepartamentoController extends Controller
{
    // Mostrar todos los departamentos
    public function index()
    {
        $departamentos = Departamento::orderBy('nombre_departamento')->get();
        return view('pages.departamentos.index', compact('departamentos'));
    }

    // Mostrar un departamento
    public function show($id)
    {
        $departamento = Departamento::where('id_departamento', $id)->firstOrFail();
        return view('pages.departamentos.show', compact('departamento'));
    }
}
