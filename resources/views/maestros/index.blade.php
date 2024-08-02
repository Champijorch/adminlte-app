@extends('adminlte::page')

@section('title', 'Maestros')

@section('content_header')
    <h1>Maestros</h1>
    <a href="{{ route('maestros.create') }}" class="btn btn-primary">Agregar Nuevo Maestro</a>
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Domicilio</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($maestros as $maestro)
                <tr>
                    <td>{{ $maestro->nombre }}</td>
                    <td>{{ $maestro->apellido }}</td>
                    <td>{{ $maestro->telefono }}</td>
                    <td>{{ $maestro->email }}</td>
                    <td>{{ $maestro->domicilio }}</td>
                    <td>{{ $maestro->carrera }}</td>
                    <td>
                        <a href="{{ route('maestros.edit', $maestro) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('maestros.destroy', $maestro) }}" method="POST" style="display:inline;">
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
