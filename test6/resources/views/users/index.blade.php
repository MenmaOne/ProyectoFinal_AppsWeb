@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h2>Listado de Usuarios</h2>
                        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Notas</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->last_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->notes }}</td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">
                                            <img src="{{ asset('imagenes/ver.png') }}" style="width: 25px; height: 25px;">
                                            </a>
                                            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">
                                            <img src="{{ asset('imagenes/editar.png') }}" style="width: 25px; height: 25px;">
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')" class="btn btn-danger">
                                            <img src="{{ asset('imagenes/eliminar.png') }}" style="width: 25px; height: 25px;">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
