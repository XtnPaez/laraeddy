<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuiController extends Controller
{
    public function showBuscar()
    {
        return view('buscar');
    }

    public function buscar(Request $request)
    {
        $request->validate([
            'cui' => 'required|numeric'
        ]);

        $cui = $request->input('cui');

        $result = DB::selectOne("
            SELECT 
                e.id, e.cui, e.estado, e.sector,
                CASE WHEN e.institucion IS NULL THEN 'Sin Institución Asociada' ELSE e.institucion END as institucion,
                CASE WHEN e.gestionado = true THEN 'Gestionado' ELSE 'No Gestionado' END as gestionado,
                e.x_wgs84, e.y_wgs84,
                CASE WHEN pre.cup IS NULL THEN 'Sin Predio' ELSE pre.cup END as codpre,
                CASE WHEN pre.nombre IS NULL THEN 'Sin Predio' ELSE pre.nombre END as predio,
                d.calle, d.altura,
                ua.comuna, ua.barrio, ua.comisaria, ua.area_hospitalaria, ua.region_sanitaria,
                ua.distrito_escolar, ua.comisaria_vecinal, ua.codigo_postal, ua.codigo_postal_argentino,
                rel.operativo_1 as op1, rel.operativo_2 as op2
            FROM cuis.edificios e
            LEFT JOIN cuis.predios pre ON e.predio_id = pre.id
            JOIN cuis.edificios_direcciones ed ON e.id = ed.edificio_id
            JOIN cuis.direcciones d ON ed.direccion_id = d.id
            LEFT JOIN cuis.v_edificios_relevamientos rel ON rel.id_edificio = e.id
            LEFT JOIN cuis.ubicacion_administrativa ua ON d.ubicacion_administrativa_id = ua.id
            WHERE e.cui = ?
        ", [$cui]);

        return view('buscar', [
            'result' => $result,
            'cuiBuscado' => $cui
        ]);
    }
}
