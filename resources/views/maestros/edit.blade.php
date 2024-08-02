@extends('adminlte::page')

@section('title', 'Editar Maestro')

@section('content_header')
    <h1>Editar Maestro</h1>
@endsection

@section('content')
    <form action="{{ route('maestros.update', $maestro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $maestro->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="{{ $maestro->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $maestro->telefono }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $maestro->email }}" required>
        </div>
        <div class="form-group">
            <label for="domicilio">Domicilio</label>
            <input type="text" name="domicilio" class="form-control" value="{{ $maestro->domicilio }}" required>
        </div>
        <div class="form-group">
            <label for="carrera">Carrera</label>
            <input type="text" name="carrera" class="form-control" value="{{ $maestro->carrera }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
