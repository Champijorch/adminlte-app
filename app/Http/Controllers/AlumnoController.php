<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\PlanEstudio;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::with('planEstudio')->get();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        $planes = PlanEstudio::all();
        return view('alumnos.create', compact('planes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'direccion' => 'required',
            'telefono' => 'required',
            'carrera' => 'required',
            'plan_estudio_id' => 'required|exists:plan_de_estudios,id',
        ]);

        Alumno::create($request->all());

        return redirect()->route('alumnos.index')->with('success', 'Alumno creado exitosamente.');
    }

    public function edit(Alumno $alumno)
    {
        $planes = PlanEstudio::all();
        return view('alumnos.edit', compact('alumno', 'planes'));
    }

    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'matricula' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'direccion' => 'required',
            'telefono' => 'required',
            'carrera' => 'required',
            'plan_estudio_id' => 'required|exists:plan_de_estudios,id',
        ]);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado exitosamente.');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado exitosamente.');
    }
}
