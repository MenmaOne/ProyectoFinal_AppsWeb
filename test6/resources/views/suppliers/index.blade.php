@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">Lista de Proveedores</div>

                <div class="card-body">
                    <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-3">Crear Proveedor</a>
                    <a href="{{ route('suppliersLogs.index') }}" class="btn btn-primary justify-content-end mb-3">Bitacora de proveedores</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Notas</th>
                                <th>Teléfono de Contacto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->address }}</td>
                                <td>{{ $supplier->notes }}</td>
                                <td>{{ $supplier->contact_phone }}</td>
                                <td>
                                    <a href="{{ route('suppliers.show', $supplier->id) }}" class="btn btn-info btn-sm">
                                    <img src="{{ asset('imagenes/ver.png') }}" style="width: 25px; height: 25px;">
                                    </a>
                                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-primary btn-sm">
                                    <img src="{{ asset('imagenes/editar.png') }}" style="width: 25px; height: 25px;">
                                    </a>
                                    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este proveedor?')">
                                        <img src="{{ asset('imagenes/eliminar.png') }}" style="width: 25px; height: 25px;">
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
