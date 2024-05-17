@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Bitacora de proveedores</div>

                <div>
                <a href="{{ route('suppliers.index') }}" class="btn btn-primary mt-2">Regresar a Proveedores</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Acción</th>
                                    <th>Notas</th>
                                    <th>Fecha de acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($supplierLogs as $supplierLog)
                                <tr>
                                    <td>{{ $supplierLog->id }}</td>
                                    <td>{{ $supplierLog->action }}</td>
                                    <td>{{ $supplierLog->notes }}</td>
                                    <td>{{ $supplierLog->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
