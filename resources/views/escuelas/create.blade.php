@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Nueva Escuela</h2>
        <form action="{{ route('escuelas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="logotipo">Logotipo:</label>
                <input type="file" name="logotipo" id="logotipo" class="form-control">
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" class="form-control">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control">
            </div>
            <div class="form-group">
                <label for="pagina_web">Página Web:</label>
                <input type="text" name="pagina_web" id="pagina_web" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Crear Escuela</button>
        </form>
    </div>
@endsection
