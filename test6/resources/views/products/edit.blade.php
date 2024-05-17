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

                            <div class="form-group row">
                                <label for="supplier_id" class="col-md-4 col-form-label text-md-right">Proveedor</label>
                                <div class="col-md-6">
                                    <select id="supplier_id" class="form-control" name="supplier_id" required>
                                        <option value="">Seleccione un proveedor</option>
                                        @foreach ($suppliers as $supplier)
                                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="notes" class="col-md-4 col-form-label text-md-right">Notas</label>
                                <div class="col-md-6">
                                    <textarea id="notes" class="form-control" name="notes" required></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
