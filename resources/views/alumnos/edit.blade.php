@extends('adminlte::page')

@section('title', 'Editar Alumno')

@section('content_header')
    <h1>Editar Alumno</h1>
@endsection

@section('content')
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input type="text" name="matricula" class="form-control" value="{{ $alumno->matricula }}" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $alumno->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="{{ $alumno->apellido }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $alumno->email }}" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="{{ $alumno->direccion }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $alumno->telefono }}" required>
        </div>
        <div class="form-group">
            <label for="carrera">Carrera</label>
            <input type="text" name="carrera" class="form-control" value="{{ $alumno->carrera }}" required>
        </div>
        <div class="form-group">
            <label for="plan_estudio_id">Plan de Estudio</label>
            <select name="plan_estudio_id" class="form-control" required>
                @foreach ($planes as $plan)
                    <option value="{{ $plan->id }}" {{ $alumno->plan_estudio_id == $plan->id ? 'selected' : '' }}>{{ $plan->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
