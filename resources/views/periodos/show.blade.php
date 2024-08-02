@extends('adminlte::page')

@section('title', 'Detalles del Período')

@section('content_header')
    <h1>Detalles del Período</h1>
@stop

@section('content')
    <h3>Nombre: {{ $periodo->nombre }}</h3>
    <p>Fecha Inicio: {{ $periodo->fecha_inicio }}</p>
    <p>Fecha Fin: {{ $periodo->fecha_fin }}</p>
    <a href="{{ route('periodos.index') }}" class="btn btn-secondary">Volver</a>
@stop
