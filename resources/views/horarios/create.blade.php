@extends('adminlte::page')

@section('title', 'Crear Horario')

@section('content_header')
    <h1>Crear Horario</h1>
@stop

@section('content')
    <form action="{{ route('horarios.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="curso_id">Curso</label>
            <select name="curso_id" id="curso_id" class="form-control" required>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="maestro_id">Maestro</label>
            <select name="maestro_id" id="maestro_id" class="form-control" required>
                @foreach ($maestros as $maestro)
                    <option value="{{ $maestro->id }}">{{ $maestro->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="periodo_id">Periodo</label>
            <select name="periodo_id" id="periodo_id" class="form-control" required>
                @foreach ($periodos as $periodo)
                    <option value="{{ $periodo->id }}">{{ $periodo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="dia">Día</label>
            <input type="text" name="dia" id="dia" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="text" name="hora" id="hora" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="aula">Aula</label>
            <input type="text" name="aula" id="aula" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop
