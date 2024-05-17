@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
            <div class="card">
            <img src="{{ asset('imagenes/producto.png') }}" style="width: 250px; height: 250px;" class="card-img-top mx-auto d-block" alt="Imagen CRUD Roles">
                <div class="card-body">
                    <h5 class="card-title">Productos</h5>
                    <p class="card-text">Administra los productos del sistema.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Ir a Prodcutos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <img src="{{ asset('imagenes/proveedor.png') }}" style="width: 250px; height: 250px;" class="card-img-top mx-auto d-block" alt="Imagen CRUD Roles">
                <div class="card-body">
                    <h5 class="card-title">Proveedores</h5>
                    <p class="card-text">Administra los proveedores del sistema.</p>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-primary">Ir a Proveedores</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <img src="{{ asset('imagenes/categorias.png') }}" style="width: 250px; height: 250px;" class="card-img-top mx-auto d-block" alt="Imagen CRUD Roles">
                <div class="card-body">
                    <h5 class="card-title">Categorias</h5>
                    <p class="card-text">Administra las categorias del sistema.</p>
                    <a href="{{ route('categories.index') }}" class="btn btn-primary">Ir a Categorías</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <img src="{{ asset('imagenes/ventas.png') }}" style="width: 250px; height: 250px;" class="card-img-top mx-auto d-block" alt="Imagen CRUD Roles">
                <div class="card-body">
                    <h5 class="card-title">Ventas</h5>
                    <p class="card-text">Administra las ventas del sistema.</p>
                    <a href="{{ route('sellings.index') }}" class="btn btn-primary">Ir a Ventas</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <img src="{{ asset('imagenes/compras.png') }}" style="width: 250px; height: 250px;" class="card-img-top mx-auto d-block" alt="Imagen CRUD Roles">
                <div class="card-body">
                    <h5 class="card-title">Compras</h5>
                    <p class="card-text">Administra las compras del sistema.</p>
                    <a href="{{ route('buyings.index') }}" class="btn btn-primary">Ir a Compras</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <img src="{{ asset('imagenes/inventario.png') }}" style="width: 250px; height: 250px;" class="card-img-top mx-auto d-block" alt="Imagen CRUD Roles">
                <div class="card-body">
                    <h5 class="card-title">Inventario</h5>
                    <p class="card-text">Administra el inventario.</p>
                    <a href="{{ route('inventories.index') }}" class="btn btn-primary">Ir al Inventario</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
                <img src="{{ asset('imagenes/usuario.png') }}" style="width: 250px; height: 250px;" class="card-img-top mx-auto d-block" alt="Imagen CRUD Usuarios">
                <div class="card-body">
                    <h5 class="card-title">Usuarios</h5>
                    <p class="card-text">Administra los usuarios del sistema.</p>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Ir a Usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
