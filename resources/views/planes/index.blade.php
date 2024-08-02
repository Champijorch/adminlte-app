@extends('adminlte::page')

@section('title', 'Planes de Estudio')

@section('content_header')
    <h1>Planes de Estudio</h1>
    <a href="{{ route('planes.create') }}" class="btn btn-primary">Agregar Nuevo Plan de Estudio</a>
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Siglas</th>
                <th>Número de Periodos</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($planes as $plan)
                <tr>
                    <td>{{ $plan->id }}</td>
                    <td>{{ $plan->nombre }}</td>
                    <td>{{ $plan->siglas }}</td>
                    <td>{{ $plan->num_periodos }}</td>
                    <td>{{ \Carbon\Carbon::parse($plan->fecha_inicio)->format('d/m/Y') }}</td>
                    <td>{{ $plan->fecha_fin ? \Carbon\Carbon::parse($plan->fecha_fin)->format('d/m/Y') : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('planes.edit', $plan->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('planes.destroy', $plan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
