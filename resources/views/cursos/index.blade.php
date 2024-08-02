@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <h1>Cursos</h1>
    <a href="{{ route('cursos.create') }}" class="btn btn-primary">Agregar Nuevo Curso</a>
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Créditos</th>
                <th>Periodo</th>
                <th>Plan de Estudio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->descripcion }}</td>
                    <td>{{ $curso->creditos }}</td>
                    <td>{{ $curso->periodo->nombre }}</td>
                    <td>{{ $curso->planEstudio->nombre }}</td>
                    <td>
                        <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display:inline;">
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
