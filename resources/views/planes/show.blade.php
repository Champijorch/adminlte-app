@extends('adminlte::page')

@section('title', 'Detalles del Plan de Estudio')

@section('content_header')
    <h1>Detalles del Plan de Estudio</h1>
@stop

@section('content')
    <h3>Nombre: {{ $plan->nombre }}</h3>
    <p>Fecha Inicio: {{ $plan->fecha_inicio }}</p>
    <p>Fecha Fin: {{ $plan->fecha_fin }}</p>
    <a href="{{ route('planes.index') }}" class="btn btn-secondary">Volver</a>
@stop
