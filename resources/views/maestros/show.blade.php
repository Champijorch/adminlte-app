@extends('adminlte::page')

@section('title', 'Detalles del Maestro')

@section('content_header')
    <h1>Detalles del Maestro</h1>
@stop

@section('content')
    <h3>Nombre: {{ $maestro->nombre }}</h3>
    <p>Apellidos: {{ $maestro->apellidos }}</p>
    <p>Correo: {{ $maestro->correo }}</p>
    <p>Teléfono: {{ $maestro->telefono }}</p>
    <a href="{{ route('maestros.index') }}" class="btn btn-secondary">Volver</a>
@stop
