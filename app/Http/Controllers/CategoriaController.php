<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
{
    $categoria = Categoria::all();
    return view('categoria.index', compact('categoria'));
}

public function create()
{
    return view('categoria.create');
}

public function store(Request $request)
{
    Categoria::create($request->all());
    return redirect('categoria')->with('success', 'Categoria created successfully.');
}

public function edit($id)
{
    $categoria = Categoria::findOrFail($id);
    return view('categoria.edit', compact('categoria'));
}

public function update(Request $request, $id)
{
    $categoria = Categoria::findOrFail($id);
    $categoria->update($request->all());
    return redirect('categoria')->with('success', 'Categoria updated successfully.');
}

public function destroy($id)
{
    $categoria = Categoria::findOrFail($id);
    $categoria->delete();
    return redirect('categoria')->with('success', 'Categoria deleted successfully.');
}
}
