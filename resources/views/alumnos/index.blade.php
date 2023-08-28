@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Alumnos</h2>
        <a href="{{ route('alumnos.create') }}" class="btn btn-success mb-2">Crear Alumno</a>
        <a href="{{ route('escuelas.index') }}" class="btn btn-info mb-2 float-right">Ver Escuelas</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Escuela</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Ciudad Natal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellidos }}</td>
                        <td>{{ $alumno->escuela->nombre }}</td>
                        <td>{{ $alumno->fecha_nacimiento }}</td>
                        <td>{{ $alumno->ciudad_natal }}</td>
                        <td>
                            <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar a este alumno?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $alumnos->links() }}
    </div>
@endsection
