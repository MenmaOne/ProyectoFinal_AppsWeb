@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Categoría</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $category->name }}</h5>
                <p class="card-text">Notas: {{ $category->notes }}</p>
            </div>
        </div>
        <a href="{{ route('categories.index') }}" class="btn btn-primary mt-3">Regresar</a>
    </div>
@endsection
