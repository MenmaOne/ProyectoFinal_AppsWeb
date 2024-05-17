@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Producto</div>

                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="base_cost">Costo base</label>
                                <input type="text" name="base_cost" id="base_cost" class="form-control" value="{{ $product->base_cost }}">
                            </div>

                            <div class="form-group">
                                <label for="base_price">Precio base</label>
                                <input type="text" name="base_price" id="base_price" class="form-control" value="{{ $product->base_price }}">
                            </div>

                            <div class="form-group">
                                <label for="category_id">Categoría</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
