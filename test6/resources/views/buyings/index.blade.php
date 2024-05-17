@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Lista de Compras</div>

                    <div class="card-body">
                    <a href="{{ route('buyings.create') }}" class="btn btn-primary mb-3">Registrar Nueva Compra</a>
                        @if ($buyings->isEmpty())
                            <p>No hay compras registradas.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th>Tipo de Pago</th>
                                        <th>Notas</th>
                                        <th>Fecha de Creación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buyings as $buying)
                                        <tr>
                                            <td>{{ $buying->id }}</td>
                                            <td>{{ $buying->product->name }}</td>
                                            <td>{{ $buying->amount }}</td>
                                            <td>{{ $buying->total }}</td>
                                            <td>{{ $buying->payment_type }}</td>
                                            <td>{{ $buying->notes }}</td>
                                            <td>{{ $buying->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
