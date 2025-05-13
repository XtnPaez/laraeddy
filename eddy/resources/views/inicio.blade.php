@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Buscar CUI</h5>
                        <p class="card-text">Ingresá un Código Único de Infraestructura (CUI) y accedé a toda la información disponible del edificio educativo.</p>
                        <a href="{{ route('buscar.cui') }}" class="btn btn-primary">Buscar CUI</a>
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

@endsection