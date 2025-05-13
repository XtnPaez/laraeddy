<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Gestión de CUI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Gestión de CUI</span>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Buscar CUI</a></li>
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

    {{-- Tarjetas de acceso --}}
    <main class="container my-4 flex-grow-1">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Buscar CUI</h5>
                        <p class="card-text">Ingresá un Código Único de Infraestructura (CUI) y accedé a toda la información disponible del edificio educativo.</p>
                        <a href="#" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Editar CUI</h5>
                        <p class="card-text">Modificá los datos de un edificio educativo ingresando su CUI. Ideal para mantener la información actualizada.</p>
                        <a href="#" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Alta de CUI</h5>
                        <p class="card-text">Dar el alta de un nuevo edificio educativo.</p>
                        <a href="#" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Tablas</h5>
                        <p class="card-text">Agregá o modificá Predios, Operativos, Direcciones u Observaciones.</p>
                        <a href="#" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Descargas</h5>
                        <p class="card-text">Accedé a reportes o archivos relevantes del sistema. Ideal para trabajo offline o informes.</p>
                        <a href="#" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">ABM Usuarios</h5>
                        <p class="card-text">Accedé al ABM de Usuarios.</p>
                        <a href="#" class="btn btn-primary">Acceder</a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    {{-- Footer --}}
    <footer class="bg-light text-center py-3 mt-auto border-top">
        <small>© 2025 - UEICEE - MAPA - Gestión de CUI</small>
    </footer>

</body>
</html>

