@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Producto</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Descripción</label>
                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" name="description" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="base_cost" class="col-md-4 col-form-label text-md-right">Costo de compra</label>
                                <div class="col-md-6">
                                    <input id="base_cost" type="number" class="form-control" name="base_cost" step="0.01" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="base_price" class="col-md-4 col-form-label text-md-right">Precio de venta</label>
                                <div class="col-md-6">
                                    <input id="base_price" type="number" class="form-control" name="base_price" step="0.01" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">Categoría</label>
                                <div class="col-md-6">
                                    <select id="category_id" class="form-control" name="category_id" required>
                                    <option value="">Seleccione una categoría</option>
                                        <option value="1">Ropa</option>
                                        <option value="2">Electrónicos</option>
                                        <option value="3">Hogar y jardín</option>
                                        <option value="4">Deportes y aire libre</option>
                                        <option value="5">Juguetes y juegos</option>
                                        <option value="6">Libros y media</option>
                                    </select>
                                </div>
                            </div>

                            

                            <!-- Agrega aquí los campos adicionales del formulario según tus necesidades -->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar Producto
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
