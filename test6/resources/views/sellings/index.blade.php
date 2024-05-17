@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Lista de Ventas</div>

                    <div class="card-body">
                    <a href="{{ route('sellings.create') }}" class="btn btn-primary mb-3">Registrar Nueva Venta</a>
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Tipo de Pago</th>
                                    <th scope="col">Notas</th>
                                    <th scope="col">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($sellings as $selling)
                                    <tr>
                                        <th scope="row">{{ $selling->id }}</th>
                                        <td>{{ $selling->product->name }}</td>
                                        <td>{{ $selling->amount }}</td>
                                        <td>{{ $selling->total }}</td>
                                        <td>{{ $selling->payment_type }}</td>
                                        <td>{{ $selling->notes }}</td>
                                        <td>{{ $selling->created_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7">No hay ventas registradas.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
