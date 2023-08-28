@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Escuela</h2>
        <form action="{{ route('escuelas.update', $escuela->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $escuela->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $escuela->direccion }}" required>
            </div>
            <div class="form-group">
                <label for="logotipo">Logotipo:</label>
                <input type="file" name="logotipo" id="logotipo" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" class="form-control" value="{{ $escuela->correo }}">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $escuela->telefono }}">
            </div>
            <div class="form-group">
                <label for="pagina_web">Página Web:</label>
                <input type="url" name="pagina_web" id="pagina_web" class="form-control" value="{{ $escuela->pagina_web }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Escuela</button>
        </form>
    </div>
@endsection
