@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Editar Rol</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('roles.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
                            </div>
                            <div class="form-group">
                                <label for="notes">Descripción:</label>
                                <input type="text" class="form-control" id="notes" name="notes" value="{{ $role->notes }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
