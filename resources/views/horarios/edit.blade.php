@extends('adminlte::page')

@section('title', 'Editar Horario')

@section('content_header')
    <h1>Editar Horario</h1>
@stop

@section('content')
    <form action="{{ route('horarios.update', $horario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="curso_id">Curso</label>
            <select name="curso_id" id="curso_id" class="form-control" required>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ $horario->curso_id == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="maestro_id">Maestro</label>
            <select name="maestro_id" id="maestro_id" class="form-control" required>
                @foreach ($maestros as $maestro)
                    <option value="{{ $maestro->id }}" {{ $horario->maestro_id == $maestro->id ? 'selected' : '' }}>
                        {{ $maestro->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="periodo_id">Periodo</label>
            <select name="periodo_id" id="periodo_id" class="form-control" required>
                @foreach ($periodos as $periodo)
                    <option value="{{ $periodo->id }}" {{ $horario->periodo_id == $periodo->id ? 'selected' : '' }}>
                        {{ $periodo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="dia">Día</label>
            <input type="text" name="dia" id="dia" class="form-control" value="{{ $horario->dia }}" required>
        </div>

        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="text" name="hora" id="hora" class="form-control" value="{{ $horario->hora }}" required>
        </div>

        <div class="form-group">
            <label for="aula">Aula</label>
            <input type="text" name="aula" id="aula" class="form-control" value="{{ $horario->aula }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop
