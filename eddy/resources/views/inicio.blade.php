<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a EDDY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">

<nav class="navbar navbar-light bg-light px-4">
    <span class="navbar-text">
        Bienvenido {{ session('usuario_nombre') }} ({{ session('usuario_rol') }})
    </span>
    <a href="{{ route('logout') }}" class="btn btn-outline-danger">Cerrar sesión</a>
</nav>

<div class="container mt-4">
    <h2 class="mb-4">Panel principal de EDDY</h2>
    <p>Desde aquí podrás acceder a los distintos ABMs según tu rol.</p>
</div>

</body>
</html>
