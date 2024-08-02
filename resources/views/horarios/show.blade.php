@extends('adminlte::page')

@section('title', 'Detalles del Horario')

@section('content_header')
    <h1>Detalles del Horario</h1>
@stop

@section('content')
    <h3>Curso: {{ $horario->curso->nombre }}</h3>
    <p>Maestro: {{ $horario->maestro->nombre }} {{ $horario->maestro->apellidos }}</p>
    <p>Hora Inicio: {{ $horario->hora_inicio }}</p>
    <p>Hora Fin: {{ $horario->hora_fin }}</p>
    <p>Día: {{ $horario->dia }}</p>
    <a href="{{ route('horarios.index') }}" class="btn btn-secondary">Volver</a>
@stop
