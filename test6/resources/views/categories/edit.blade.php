@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Categoría</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">Notas</label>
                <textarea class="form-control" id="notes" name="notes" rows="3">{{ $category->notes }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
