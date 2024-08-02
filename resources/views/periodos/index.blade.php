@extends('adminlte::page')

@section('title', 'Periodos')

@section('content_header')
    <h1>Periodos</h1>
    <a href="{{ route('periodos.create') }}" class="btn btn-primary">Agregar Nuevo Periodo</a>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($periodos as $periodo)
                <tr>
                    <td>{{ $periodo->id }}</td>
                    <td>{{ $periodo->nombre }}</td>
                    <td>{{ $periodo->fecha_inicio }}</td>
                    <td>{{ $periodo->fecha_fin }}</td>
                    <td>
                        <a href="{{ route('periodos.edit', $periodo->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('periodos.destroy', $periodo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

