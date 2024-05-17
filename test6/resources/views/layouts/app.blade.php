<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid d-flex justify-content-between">
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <img src="{{ asset('imagenes/menu.png') }}" style="width: 32px; height: 32px;">
    </button>
    <div class="p-2">
      <img src="{{ asset('imagenes/logo.png') }}" style="width: 150px; height: 46px;">
    </div>
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit" class="btn btn-primary text-dark fw-bold">Cerrar sesión</button>
    </form>
  </div>
</nav>

<div>
</div>
    <div id="app">
        @yield('content')
    </div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú de navegación</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div>
          ¿A donde te quieres mover?
        </div>
        <div class="dropdown mt-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Selección
          </button>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('home') }}">Home</a></li>
          <li><a class="dropdown-item" href="{{ route('users.index') }}">Usuarios</a></li>
          <li><a class="dropdown-item" href="{{ route('products.index') }}">Productos</a></li>
            <li><a class="dropdown-item" href="{{ route('categories.index') }}">Categorias</a></li>
            <li><a class="dropdown-item" href="{{ route('suppliers.index') }}">Proveedores</a></li>
            <li><a class="dropdown-item" href="{{ route('sellings.index') }}">Ventas</a></li>
            <li><a class="dropdown-item" href="{{ route('buyings.index') }}">Compras</a></li>
            <li><a class="dropdown-item" href="{{ route('inventories.index') }}">Inventario</a></li>
          </ul>
        </div>
      </div>
    </div>
    </span>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
