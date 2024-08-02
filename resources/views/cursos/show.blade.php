@extends('adminlte::page')

@section('title', 'Detalles del Curso')

@section('content_header')
    <h1>Detalles del Curso</h1>
@stop

@section('content')
    <h3>Nombre: {{ $curso->nombre }}</h3>
    <p>Descripción: {{ $curso->descripcion }}</p>
    <p>Créditos: {{ $curso->creditos }}</p>
    <p>Periodo: {{ $curso->periodo->nombre }}</p>
    <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Volver</a>
@stop
