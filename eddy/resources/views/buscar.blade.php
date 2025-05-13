@extends('layouts.app')

@section('title', 'Buscar CUI')

@section('content')
<div class="container mt-4">
    <h2>Buscar CUI</h2>

    <form method="POST" action="{{ route('buscar.cui') }}" autocomplete="off">
        @csrf
        <div class="input-group mb-3">
            <input type="number" name="cui" class="form-control" placeholder="Ingresá el CUI" required>
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </form>

    @isset($result)
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><strong>CUI:</strong> {{ $result->cui }}</li>
                    <li class="list-group-item"><strong>Estado:</strong> {{ $result->estado }}</li>
                    <li class="list-group-item"><strong>Sector:</strong> {{ $result->sector }}</li>
                    <li class="list-group-item"><strong>Dirección:</strong> {{ $result->calle }} {{ $result->altura }}</li>
                    <li class="list-group-item"><strong>Predio:</strong> {{ $result->predio }} ({{ $result->codpre }})</li>
                    <li class="list-group-item"><strong>Gestionado:</strong> {{ $result->gestionado }}</li>
                    <li class="list-group-item"><strong>Barrio:</strong> {{ $result->barrio }}</li>
                    <li class="list-group-item"><strong>Comuna:</strong> {{ $result->comuna }}</li>
                    <li class="list-group-item"><strong>Código Postal:</strong> {{ $result->codigo_postal }}</li>
                    <li class="list-group-item"><strong>Código Postal Argentino:</strong> {{ $result->codigo_postal_argentino }}</li>
                    <li class="list-group-item"><strong>Comisaría:</strong> {{ $result->comisaria }}</li>
                    <li class="list-group-item"><strong>Comisaría Vecinal:</strong> {{ $result->comisaria_vecinal }}</li>
                    <li class="list-group-item"><strong>Área Hospitalaria:</strong> {{ $result->area_hospitalaria }}</li>
                    <li class="list-group-item"><strong>Región Sanitaria:</strong> {{ $result->region_sanitaria }}</li>
                    <li class="list-group-item"><strong>CENIE 2010:</strong> {{ $result->op1 }}</li>
                    <li class="list-group-item"><strong>CIE 2017:</strong> {{ $result->op2 }}</li>
                    <li class="list-group-item"><strong>Ubicación:</strong> {{ $result->x_wgs84 }}, {{ $result->y_wgs84 }}</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div id="map" data-x="{{ $result->x_wgs84 }}" data-y="{{ $result->y_wgs84 }}" style="height: 400px;"></div>

            </div>
        </div>

        {{-- Agregamos scripts de Leaflet --}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

        {{-- Inicialización del mapa --}}
        
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Obtener las coordenadas desde los atributos 'data-x' y 'data-y'
                var mapElement = document.getElementById('map');
                var x = parseFloat(mapElement.getAttribute('data-x'));
                var y = parseFloat(mapElement.getAttribute('data-y'));

                // Inicializar el mapa con las coordenadas obtenidas
                var map = L.map('map').setView([y, x], 17);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
                }).addTo(map);

                // Crear un círculo amarillo en las coordenadas y asignarle un popup
                var circle = L.circle([y, x], {
                    color: 'yellow',
                    fillColor: 'yellow',
                    fillOpacity: 0.5,
                    radius: 12 // Ajusta el tamaño del círculo si es necesario
                }).addTo(map);

                // El contenido del popup con el CUI y la dirección
                var cui = "{{ $result->cui }}";
                var direccion = "{{ $result->calle }} {{ $result->altura }}";
                var popupContent = "<strong>CUI:</strong> " + cui + "<br><strong>Dirección:</strong> " + direccion;

                // Asociar el popup al círculo
                circle.bindPopup(popupContent);
            });
        </script>

    @elseif(isset($cuiBuscado))
        <div class="alert alert-warning mt-3">
            El CUI <strong>{{ $cuiBuscado }}</strong> no se encuentra en la base. Probá con otro.
        </div>
    @endisset

</div>

@endsection