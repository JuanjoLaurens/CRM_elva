@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Alumno</h2>
        <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $alumno->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{ $alumno->apellidos }}" required>
            </div>
            <div class="form-group">
                <label for="escuela_id">Escuela:</label>
                <select name="escuela_id" id="escuela_id" class="form-control" required>
                    @foreach($escuelas as $escuelaId => $escuelaNombre)
                        <option value="{{ $escuelaId }}" {{ $alumno->escuela_id == $escuelaId ? 'selected' : '' }}>{{ $escuelaNombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $alumno->fecha_nacimiento }}" required>
            </div>
            <div class="form-group">
                <label for="ciudad_natal">Ciudad Natal:</label>
                <input type="text" name="ciudad_natal" id="ciudad_natal" class="form-control" value="{{ $alumno->ciudad_natal }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Alumno</button>
        </form>
    </div>
@endsection
