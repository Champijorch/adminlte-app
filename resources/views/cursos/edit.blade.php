@extends('adminlte::page')

@section('title', 'Editar Curso')

@section('content_header')
    <h1>Editar Curso</h1>
@endsection

@section('content')
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $curso->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control">{{ $curso->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="creditos">Créditos:</label>
            <input type="number" name="creditos" class="form-control" value="{{ $curso->creditos }}" required>
        </div>
        <div class="form-group">
            <label for="periodo_id">Periodo:</label>
            <select name="periodo_id" class="form-control" required>
                @foreach ($periodos as $periodo)
                    <option value="{{ $periodo->id }}" {{ $curso->periodo_id == $periodo->id ? 'selected' : '' }}>{{ $periodo->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="plan_estudio_id">Plan de Estudio:</label>
            <select name="plan_estudio_id" class="form-control" required>
                @foreach ($planes as $plan)
                    <option value="{{ $plan->id }}" {{ $curso->plan_estudio_id == $plan->id ? 'selected' : '' }}>{{ $plan->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
