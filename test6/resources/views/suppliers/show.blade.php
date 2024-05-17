@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Proveedor</div>

                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $supplier->name }}</p>
                    <p><strong>Dirección:</strong> {{ $supplier->address }}</p>
                    <p><strong>Teléfono de Contacto:</strong> {{ $supplier->contact_phone }}</p>
                    <p><strong>Notas:</strong> {{ $supplier->notes }}</p>
                </div>
                <a href="{{ route('suppliers.index') }}" class="btn btn-primary">Volver a la lista de proveedores</a>
            </div>
        </div>
    </div>
</div>
@endsection
