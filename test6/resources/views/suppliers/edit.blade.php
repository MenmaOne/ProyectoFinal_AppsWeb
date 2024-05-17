@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Proveedor</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('suppliers.update', $supplier->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $supplier->name }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $supplier->address }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="contact_phone">Teléfono de Contacto:</label>
                            <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ $supplier->contact_phone }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="notes">Notas:</label>
                            <textarea class="form-control" id="notes" name="notes">{{ $supplier->notes }}</textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
