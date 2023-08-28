@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Escuelas</h2>
        <a href="{{ route('escuelas.create') }}" class="btn btn-success mb-2">Crear Escuela</a>
        <a href="{{ route('alumnos.index') }}" class="btn btn-info mb-2 float-right">Ver Alumnos</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Logotipo</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Página Web</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($escuelas as $escuela)
                    <tr>
                        <td>{{ $escuela->id }}</td>
                        <td>{{ $escuela->nombre }}</td>
                        <td>{{ $escuela->direccion }}</td>
                        <td>
                            @if($escuela->logotipo)
                                <img src="{{ Storage::url($escuela->logotipo) }}" alt="Logotipo" class="img-thumbnail" width="50">
                            @else
                                No disponible
                            @endif
                        </td>
                        <td>{{ $escuela->correo }}</td>
                        <td>{{ $escuela->telefono }}</td>
                        <td>{{ $escuela->pagina_web }}</td>
                        <td>
                            <a href="{{ route('escuelas.show', $escuela->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('escuelas.edit', $escuela->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('escuelas.destroy', $escuela->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta escuela?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $escuelas->links() }}
    </div>
@endsection
