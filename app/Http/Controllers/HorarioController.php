<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Curso;
use App\Models\Maestro;
use App\Models\Periodo;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index()
    {
        $horarios = Horario::with(['curso', 'maestro', 'periodo'])->get();
        return view('horarios.index', compact('horarios'));
    }

    public function create()
    {
        $cursos = Curso::all();
        $maestros = Maestro::all();
        $periodos = Periodo::all();
        return view('horarios.create', compact('cursos', 'maestros', 'periodos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'curso_id' => 'required|exists:cursos,id',
            'maestro_id' => 'required|exists:maestros,id',
            'periodo_id' => 'required|exists:periodos,id',
            'dia' => 'required|string',
            'hora' => 'required|string',
            'aula' => 'required|string',
        ]);

        Horario::create($request->all());

        return redirect()->route('horarios.index')->with('success', 'Horario creado exitosamente.');
    }

    public function edit(Horario $horario)
    {
        $cursos = Curso::all();
        $maestros = Maestro::all();
        $periodos = Periodo::all();
        return view('horarios.edit', compact('horario', 'cursos', 'maestros', 'periodos'));
    }

    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            'curso_id' => 'required|exists:cursos,id',
            'maestro_id' => 'required|exists:maestros,id',
            'periodo_id' => 'required|exists:periodos,id',
            'dia' => 'required|string',
            'hora' => 'required|string',
            'aula' => 'required|string',
        ]);

        $horario->update($request->all());

        return redirect()->route('horarios.index')->with('success', 'Horario actualizado exitosamente.');
    }

    public function destroy(Horario $horario)
    {
        $horario->delete();
        return redirect()->route('horarios.index')->with('success', 'Horario eliminado exitosamente.');
    }
}
