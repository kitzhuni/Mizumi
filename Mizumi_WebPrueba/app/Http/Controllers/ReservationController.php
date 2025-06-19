<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservacion;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha' => 'required|date',
            'comida' => 'required|string|in:desayuno,comida,cena',
            'horario' => 'required|string',
            'mesa' => 'required|integer',
            'asientos' => 'required|integer|min:1|max:10',
            'adultos' => 'required|integer|min:1',
            'menores' => 'required|integer|min:0',
            'nombre_completo' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'tipo' => 'required|string|in:huesped,visitante',
            'habitacion' => 'nullable|string|required_if:tipo,huesped'
        ]);

        $reservacion = Reservacion::create($validated);

        return response()->json([
            'success' => true,
            'id' => $reservacion->id,
            'message' => 'Reservación creada exitosamente'
        ]);
    }
}