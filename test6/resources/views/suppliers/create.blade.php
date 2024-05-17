@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Proveedor</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('suppliers.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        
                        <div class="form-group">
                            <label for="address">Dirección:</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        
                        <div class="form-group">
                            <label for="contact_phone">Teléfono de Contacto:</label>
                            <input type="text" class="form-control" id="contact_phone" name="contact_phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="notes">Notas:</label>
                            <textarea class="form-control" id="notes" name="notes"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Agregar Proveedor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
