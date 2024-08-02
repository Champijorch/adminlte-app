@extends('adminlte::page')

@section('title', 'Editar Periodo')

@section('content_header')
    <h1>Editar Periodo</h1>
@stop

@section('content')
    <form action="{{ route('periodos.update', $periodo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $periodo->nombre) }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{ old('fecha_inicio', $periodo->fecha_inicio) }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" value="{{ old('fecha_fin', $periodo->fecha_fin) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop

