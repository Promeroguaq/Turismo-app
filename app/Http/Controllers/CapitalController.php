<?php

namespace App\Http\Controllers;

use App\Models\Capital;
use Illuminate\Http\Request;

class CapitalController extends Controller
{
    public function index()
    {
        $capitales = Capital::all();
        return view('capitales.index', compact('capitales'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        Capital::create($request->all());

        return redirect()->back();
    }
}
