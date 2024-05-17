@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Productos</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Crear Producto</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->base_price }}</td>
                        <td>{{ $product->supplier_id }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">
                            <img src="{{ asset('imagenes/ver.png') }}" style="width: 25px; height: 25px;">
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">
                            <img src="{{ asset('imagenes/editar.png') }}" style="width: 25px; height: 25px;">
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">
                                <img src="{{ asset('imagenes/eliminar.png') }}" style="width: 25px; height: 25px;">
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
