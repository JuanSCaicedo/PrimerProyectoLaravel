<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuro;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function store(StoreCuro $request)
    {
        $curso = Curso::create($request->all());

        if ($curso) {
            return redirect()->route('cursos.show', $curso);
        }
    }
    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'slug' => 'required|unique:cursos,slug,' . $curso->id,
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $curso->update($request->all());

        if ($curso) {
            return redirect()->route('cursos.show', $curso);
        }
    }
    public function destroy(curso $curso)
    {
        $curso->delete();

        if ($curso) {
            return redirect()->route('cursos.index');
        }
    }
}

