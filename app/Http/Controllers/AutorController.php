<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
        public function index()
    {
        $autor = Autor::all();
        return view('autor.index', compact('autor'));
    }

    public function create()
    {
        return view('autor.create');
    }

    public function store(Request $request)
    {
        Autor::create($request->all());
        return redirect('autor')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $autor = Autor::findOrFail($id);
        return view('autor.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::findOrFail($id);
        $autor->update($request->all());
        return redirect('autor')->with('success', 'autor updated successfully.');
    }

    public function destroy($id)
    {
        $autor = Autor::findOrFail($id);
        $autor->delete();
        return redirect('autor')->with('success', 'autor deleted successfully.');
    }
}
