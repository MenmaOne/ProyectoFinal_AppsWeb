@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Categorías</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Crear Categoría</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->notes }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">
                            <img src="{{ asset('imagenes/ver.png') }}" style="width: 25px; height: 25px;">
                            </a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">
                            <img src="{{ asset('imagenes/editar.png') }}" style="width: 25px; height: 25px;">
                            </a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar esta categoría?')">
                                <img src="{{ asset('imagenes/eliminar.png') }}" style="width: 25px; height: 25px;"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
