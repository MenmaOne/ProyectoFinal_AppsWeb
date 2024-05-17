@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Detalles del Rol</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $role->id }}</p>
                        <p><strong>Nombre:</strong> {{ $role->name }}</p>
                        <p><strong>Descripción:</strong> {{ $role->notes }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('roles.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
