@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-3">
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Inventario</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Comprado el</th>
                                    <th scope="col">ultima actualización</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventories as $inventory)
                                    <tr>
                                        <th scope="row">{{ $inventory->id }}</th>
                                        <td>{{ $inventory->product->name }}</td>
                                        <td>{{ $inventory->amount }}</td>
                                        <td>{{ $inventory->created_at }}</td>
                                        <td>{{ $inventory->updated_at }}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
