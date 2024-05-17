@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Roles</h2>
                    <a href="{{ route('roles.create') }}" class="btn btn-primary float-right">Crear Nuevo Rol</a>
                </div>
                <div class="card-body">
                    @if ($roles->isEmpty())
                    <p>No hay roles disponibles.</p>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->notes }}</td>
                                <td>
                                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info btn-sm">
                                    <img src="{{ asset('imagenes/ver.png') }}" style="width: 25px; height: 25px;">
                                    </a>
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm">
                                    <img src="{{ asset('imagenes/editar.png') }}" style="width: 25px; height: 25px;">
                                    </a>
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este rol?')">
                                        <img src="{{ asset('imagenes/eliminar.png') }}" style="width: 25px; height: 25px;">
                                        </button>
                                    </form>
                                </td>
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
