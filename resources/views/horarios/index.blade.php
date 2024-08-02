@extends('adminlte::page')

@section('title', 'Horarios')

@section('content_header')
    <h1>Horarios</h1>
@stop

@section('content')
    <a href="{{ route('horarios.create') }}" class="btn btn-primary">Crear Horario</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Maestro</th>
                <th>Periodo</th>
                <th>Día</th>
                <th>Hora</th>
                <th>Aula</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($horarios as $horario)
                <tr>
                    <td>{{ $horario->id }}</td>
                    <td>{{ $horario->curso->nombre }}</td>
                    <td>{{ $horario->maestro->nombre }}</td>
                    <td>{{ $horario->periodo->nombre }}</td>
                    <td>{{ $horario->dia }}</td>
                    <td>{{ $horario->hora }}</td>
                    <td>{{ $horario->aula }}</td>
                    <td>
                        <a href="{{ route('horarios.edit', $horario->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('horarios.destroy', $horario->id) }}" method="POST" style="display:inline;">
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
