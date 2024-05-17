@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registrar Compra</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('buyings.store') }}">
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
                                    <input id="amount" type="number" class="form-control" name="amount" min="1" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="payment_type" class="col-md-4 col-form-label text-md-right">Tipo de Pago</label>
                                <div class="col-md-6">
                                    <select id="payment_type" class="form-control" name="payment_type" required>
                                        <option value="">Seleccione un tipo de pago</option>
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Tarjeta de Crédito/Débito">Tarjeta de Crédito/Débito</option>
                                        <option value="Cheque">Cheque</option>
                                    </select>
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
                                    <a class="btn btn-secondary" href="{{ route('buyings.index') }}">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
