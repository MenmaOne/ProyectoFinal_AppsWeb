@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Producto al Inventario</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('inventories.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="product_id" class="col-md-4 col-form-label text-md-right">Producto</label>
                                <div class="col-md-6">
                                    <select id="product_id" class="form-control" name="product_id" required>
                                        <option value="">Seleccione un producto</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="amount" class="col-md-4 col-form-label text-md-right">Cantidad</label>
                                <div class="col-md-6">
                                    <input id="amount" type="number" class="form-control" name="amount" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="notes" class="col-md-4 col-form-label text-md-right">Notas</label>
                                <div class="col-md-6">
                                    <textarea id="notes" class="form-control" name="notes"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a class="btn btn-secondary" href="{{ route('inventories.index') }}">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
