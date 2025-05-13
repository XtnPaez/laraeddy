@extends('layouts.app')

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
                <div id="map" style="height: 400px;"></div>
            </div>
        </div>
    @elseif(isset($cuiBuscado))
        <div class="alert alert-warning mt-3">
            El CUI <strong>{{ $cuiBuscado }}</strong> no se encuentra en la base. Probá con otro.
        </div>
    @endisset
</div>