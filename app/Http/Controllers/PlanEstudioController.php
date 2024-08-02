<?php

namespace App\Http\Controllers;

use App\Models\PlanEstudio;
use Illuminate\Http\Request;

class PlanEstudioController extends Controller
{
    public function index()
    {
        $planes = PlanEstudio::all();
        return view('planes.index', compact('planes'));
    }

    public function create()
    {
        return view('planes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
            'siglas' => 'required|string|max:10',
            'num_periodos' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date',
        ]);

        PlanEstudio::create($request->all());

        return redirect()->route('planes.index')
            ->with('success', 'Plan de estudios creado exitosamente.');
    }

    public function edit($id)
    {
        $plan = PlanEstudio::findOrFail($id);
        return view('planes.edit', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'nullable|string|max:255',
            'siglas' => 'required|string|max:10',
            'num_periodos' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date',
        ]);

        $plan = PlanEstudio::findOrFail($id);
        $plan->update($request->all());

        return redirect()->route('planes.index')
            ->with('success', 'Plan de estudios actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $plan = PlanEstudio::findOrFail($id);
        $plan->delete();

        return redirect()->route('planes.index')
            ->with('success', 'Plan de estudios eliminado exitosamente.');
    }
}
