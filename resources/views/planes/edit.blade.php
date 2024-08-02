@extends('adminlte::page')

@section('title', 'Editar Plan de Estudio')

@section('content_header')
    <h1>Editar Plan de Estudio</h1>
@endsection

@section('content')
    <form action="{{ route('planes.update', $plan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $plan->nombre) }}">
        </div>
        <div class="form-group">
            <label for="siglas">Siglas:</label>
            <input type="text" class="form-control" id="siglas" name="siglas" value="{{ old('siglas', $plan->siglas) }}" required>
        </div>
        <div class="form-group">
            <label for="num_periodos">Número de Periodos:</label>
            <input type="number" class="form-control" id="num_periodos" name="num_periodos" value="{{ old('num_periodos', $plan->num_periodos) }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $plan->fecha_inicio) }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_fin">Fecha de Fin:</label>
            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{ old('fecha_fin', $plan->fecha_fin) }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
