<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Periodo;
use App\Models\PlanEstudio;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::with('periodo', 'planEstudio')->get();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        $periodos = Periodo::all();
        $planes = PlanEstudio::all();
        return view('cursos.create', compact('periodos', 'planes'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creditos' => 'required|integer',
            'periodo_id' => 'required|exists:periodos,id',
            'plan_estudio_id' => 'required|exists:plan_de_estudios,id', // Asegúrate de que el nombre de la tabla es correcto
        ]);

        Curso::create($validatedData);
        return redirect()->route('cursos.index')->with('success', 'Curso creado exitosamente');
    }

    public function edit(Curso $curso)
    {
        $periodos = Periodo::all();
        $planes = PlanEstudio::all();
        return view('cursos.edit', compact('curso', 'periodos', 'planes'));
    }

    public function update(Request $request, Curso $curso)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'creditos' => 'required|integer',
            'periodo_id' => 'required|exists:periodos,id',
            'plan_estudio_id' => 'required|exists:plan_de_estudios,id', 
        ]);

        $curso->update($validatedData);
        return redirect()->route('cursos.index')->with('success', 'Curso actualizado exitosamente');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'Curso eliminado exitosamente');
    }
}
