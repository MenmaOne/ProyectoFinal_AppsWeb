@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nueva Categoría</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="notes">Descripción:</label>
                <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear Categoría</button>
        </form>
    </div>
@endsection
