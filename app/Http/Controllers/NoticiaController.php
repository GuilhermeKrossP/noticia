<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
        public function index()
    {
        $noticia = Noticia::all();
        return view('noticia.index', compact('noticia'));
    }

    public function create()
    {
        $autores=Autor::all();
        $categorias=Categoria::all();
        return view('noticia.create', compact('autores', 'categorias'));
    }

    public function store(Request $request)
    {
        Noticia::create($request->all());
        return redirect('noticia')->with('success', 'Noticia created successfully.');
    }

    public function edit($id)
    {
        $noticia = Noticia::findOrFail($id);
        return view('noticia.edit', compact('Noticia'));
    }

    public function update(Request $request, $id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->update($request->all());
        return redirect('noticia')->with('success', 'Noticia updated successfully.');
    }

    public function destroy($id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return redirect('noticia')->with('success', 'Noticia deleted successfully.');
    }
}
