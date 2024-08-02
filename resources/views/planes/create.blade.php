@extends('adminlte::page')

@section('title', 'Crear Plan de Estudios')

@section('content_header')
    <h1>Crear Plan de Estudios</h1>
@endsection

@section('content')
    <form action="{{ route('planes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
        </div>
        <div class="form-group">
            <label for="siglas">Siglas</label>
            <input type="text" name="siglas" id="siglas" class="form-control" value="{{ old('siglas') }}" required>
        </div>
        <div class="form-group">
            <label for="num_periodos">Número de Periodos</label>
            <input type="number" name="num_periodos" id="num_periodos" class="form-control" value="{{ old('num_periodos') }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{ old('fecha_inicio') }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin (opcional)</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" value="{{ old('fecha_fin') }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
