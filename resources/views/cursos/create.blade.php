@extends('adminlte::page')

@section('title', 'Crear Curso')

@section('content_header')
    <h1>Crear Curso</h1>
@endsection

@section('content')
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
        </div>
        <div class="form-group">
            <label for="creditos">Créditos:</label>
            <input type="number" class="form-control" id="creditos" name="creditos" required>
        </div>
        <div class="form-group">
            <label for="periodo_id">Periodo:</label>
            <select class="form-control" id="periodo_id" name="periodo_id" required>
                @foreach ($periodos as $periodo)
                    <option value="{{ $periodo->id }}">{{ $periodo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="plan_estudio_id">Plan de Estudios:</label>
            <select class="form-control" id="plan_estudio_id" name="plan_estudio_id" required>
                @foreach ($planes as $plan)
                    <option value="{{ $plan->id }}">{{ $plan->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection

