<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Gestión de CUI')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Estilos adicionales (Leaflet, etc) --}}
    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Gestión de CUI</span>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('buscar.form') }}">Buscar CUI</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Editar CUI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Alta de CUI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gestión de Tablas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Descargas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ABM Usuarios</a></li>
                </ul>
                <span class="navbar-text me-3">
                    {{ auth()->user()->nombre ?? 'Usuario' }}
                </span>
                <a class="btn btn-outline-light" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </nav>

    {{-- Contenido dinámico --}}
    <main class="container my-4 flex-grow-1">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-light text-center py-3 mt-auto border-top">
        <small>© 2025 - UEICEE - MAPA - Gestión de CUI</small>
    </footer>

    {{-- Scripts adicionales (Leaflet, etc) --}}
    @stack('scripts')
</body>
</html>
