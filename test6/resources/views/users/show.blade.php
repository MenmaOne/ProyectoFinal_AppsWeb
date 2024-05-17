@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Detalles del Usuario</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $user->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $user->role_id}}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $user->notes }}
                        </div>
                    </div>
                    <a class="btn btn-primary" href="{{ route('users.index') }}">Volver a la lista de usuarios</a>
                </div>
            </div>
        </div>
    </div>
@endsection
