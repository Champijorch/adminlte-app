@extends('adminlte::page')

@section('title', 'Detalles del Alumno')

@section('content_header')
    <h1>Detalles del Alumno</h1>
@stop

@section('content')
    <h3>Matrícula: {{ $alumno->matricula }}</h3>
    <p>Nombre: {{ $alumno->nombre }}</p>
    <p>Apellidos: {{ $alumno->apellidos }}</p>
    <p>Correo: {{ $alumno->correo }}</p>
    <p>Domicilio: {{ $alumno->domicilio }}</p>
    <p>Teléfono: {{ $alumno->telefono }}</p>
    <p>Carrera: {{ $alumno->carrera }}</p>
    <p>Plan de Estudio: {{ $alumno->planEstudio->nombre }}</p>
    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Volver</a>
@stop
