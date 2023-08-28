@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles de la Escuela</h2>
        <div class="card">
            <div class="card-header">
                {{ $escuela->nombre }}
            </div>
            <div class="card-body">
                <p><strong>Dirección:</strong> {{ $escuela->direccion }}</p>
                <p><strong>Logotipo:</strong></p>
                @if($escuela->logotipo)
                    <img src="{{ Storage::url($escuela->logotipo) }}" alt="Logotipo" class="img-thumbnail" width="100">
                @else
                    No disponible
                @endif
                <p><strong>Correo:</strong> {{ $escuela->correo }}</p>
                <p><strong>Teléfono:</strong> {{ $escuela->telefono }}</p>
                <p><strong>Página Web:</strong> {{ $escuela->pagina_web }}</p>
            </div>
        </div>
        <a href="{{ route('escuelas.index') }}" class="btn btn-secondary mt-3">Volver a la Lista</a>
    </div>
@endsection
