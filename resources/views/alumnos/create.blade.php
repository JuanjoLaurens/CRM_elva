@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Nuevo Alumno</h2>
        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="escuela_id">Escuela:</label>
                <select name="escuela_id" id="escuela_id" class="form-control" required>
                    <option value="" disabled selected>Seleccione una escuela</option>
                    @foreach($escuelas as $escuelaId => $escuelaNombre)
                        <option value="{{ $escuelaId }}">{{ $escuelaNombre }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ciudad_natal">Ciudad Natal:</label>
                <input type="text" name="ciudad_natal" id="ciudad_natal" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Crear Alumno</button>
        </form>
    </div>
@endsection
