@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>Bienvenido a CRM_Elva</h1>
            <p>Un gestor de escuelas y alumnos</p>
            <p>
                <a href="{{ route('escuelas.index') }}" class="btn btn-primary btn-lg">Ver Escuelas</a>
                <a href="{{ route('alumnos.index') }}" class="btn btn-success btn-lg">Ver Alumnos</a>
            </p>
        </div>
    </div>
@endsection
