@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $product->name }}</div>

                <div class="card-body">
                    <p><strong>Descripción:</strong> {{ $product->description }}</p>
                    <p><strong>Precio:</strong> ${{ $product->base_price }}</p>
                    <p><strong>Categoría:</strong> {{ $product->category_id }}</p>
                    <p><strong>Notas:</strong> {{ $product->notes }}</p>
                    <!-- Otros detalles del producto -->
                </div>
                <a href="{{ route('products.index') }}" class="btn btn-primary">Volver a la lista de productos</a>
            </div>
        </div>
    </div>
</div>
@endsection
