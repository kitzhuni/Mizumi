<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PanoramaGeneralController extends Controller
{
public function index()
{
    $resumen = DB::table('reservacions as res')
        ->join('restaurantes as r', 'res.id_reservacion', '=', 'r.id')
        ->select(
            'r.nombre as nombre_restaurante',
            'res.fecha',
            DB::raw('COUNT(res.id) as reservaciones_totales')
        )
        ->groupBy('r.nombre', 'res.fecha')
        ->orderBy('res.fecha', 'asc')
        ->get();

    return view('panoramageneral', compact('resumen'));
}




}