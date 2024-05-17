@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registrar Venta</div>
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('sellings.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="product_id">Producto</label>
                                <select class="form-control" id="product_id" name="product_id" required>
                                    <option value="">Seleccione un producto</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="amount">Cantidad</label>
                                <input type="number" class="form-control" id="amount" name="amount" required>
                            </div>

                            <div class="form-group">
                                <label for="payment_type">Tipo de Pago</label>
                                <select class="form-control" id="payment_type" name="payment_type" required>
                                    <option value="">Seleccione un tipo de pago</option>
                                    <option value="Efectivo">Efectivo</option>
                                    <option value="Tarjeta de Crédito/Débito">Tarjeta de Crédito/Débito</option>
                                    <option value="Cheque">Cheque</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="notes">Notas</label>
                                <textarea class="form-control" id="notes" name="notes"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('sellings.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
