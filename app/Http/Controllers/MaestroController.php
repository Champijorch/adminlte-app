<?php

namespace App\Http\Controllers;

use App\Models\Maestro;
use Illuminate\Http\Request;

class MaestroController extends Controller
{
    public function index()
    {
        $maestros = Maestro::all();
        return view('maestros.index', compact('maestros'));
    }

    public function create()
    {
        return view('maestros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'domicilio' => 'required',
            'carrera' => 'required',
        ]);

        Maestro::create($request->all());

        return redirect()->route('maestros.index')->with('success', 'Maestro creado exitosamente.');
    }

    public function edit(Maestro $maestro)
    {
        return view('maestros.edit', compact('maestro'));
    }

    public function update(Request $request, Maestro $maestro)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'domicilio' => 'required',
            'carrera' => 'required',
        ]);

        $maestro->update($request->all());

        return redirect()->route('maestros.index')->with('success', 'Maestro actualizado exitosamente.');
    }

    public function destroy(Maestro $maestro)
    {
        $maestro->delete();
        return redirect()->route('maestros.index')->with('success', 'Maestro eliminado exitosamente.');
    }
}
