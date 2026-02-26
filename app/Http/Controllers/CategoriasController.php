<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
public function index()
{
    $categorias = Categoria::all();
    return view('categorias.index', compact('categorias'));
}
public function create()
{
    return view('categorias.create');

}

public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
    ]);

    $categorias =  new Categoria();
    $categorias->nombre = $request->nombre;
    $categorias->save();

    return redirect()->route('categorias.index')->with('success', 'Categoría creada exitosamente.');
}
}

