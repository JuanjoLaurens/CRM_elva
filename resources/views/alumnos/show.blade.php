@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Alumno</h2>
        <div class="card">
            <div class="card-header">
                {{ $alumno->nombre }} {{ $alumno->apellidos }}
            </div>
            <div class="card-body">
                <p><strong>Escuela:</strong> {{ $alumno->escuela->nombre }}</p>
                <p><strong>Fecha de Nacimiento:</strong> {{ $alumno->fecha_nacimiento }}</p>
                <p><strong>Ciudad Natal:</strong> {{ $alumno->ciudad_natal }}</p>
            </div>
        </div>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary mt-3">Volver a la Lista</a>
    </div>
@endsection
