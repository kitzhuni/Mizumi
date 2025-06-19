<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Reservacion;


class ReservacionController extends Controller

{
    public function mostrarReservacion(Request $request)
    {
        
        // Obtener los datos del código QR (si es necesario)
        $data = $request->input('data');

        // Pasar los datos a la vista
        return view('reservacion', compact('data'));
    }


   // En ReservacionController.php
public function mostrarMesas()
{
    return view('reservacionmesa'); // Ajusta el nombre de tu vista
}
    
public function reservarSillas(Request $request)
{
    // Obtener el número de mesa desde la URL
    $mesaId = $request->query('mesa');
    
    // Validar que la mesa existe y tiene tiempo disponible
    $expiresAt = Cache::get('reservation_timer_'.$mesaId);
    
    if (!$expiresAt || now()->gt($expiresAt)) {
        return redirect()->route('reservar.mesa')->with('error', 'El tiempo para reservar esta mesa ha expirado');
    }

    // Pasar los datos a la vista
    return view('reservacionsillas', [
        'mesaId' => $mesaId,
        'expiresAt' => $expiresAt
    ]);
}


public function index()
{
    // Asegúrate de que las fechas se carguen como objetos Carbon
    $reservaciones = Reservacion::orderBy('fecha', 'desc')->get();
    
    return view('tablareservaciones', [
        'reservaciones' => $reservaciones,
        'user' => auth()->user()
    ]);
}


public function destroy(Reservacion $reservacion)
{
    try {
        $reservacion->delete();
        return redirect()->route('reservaciones.index')
            ->with('success', 'Reservación eliminada correctamente');
    } catch (\Exception $e) {
        return redirect()->route('reservaciones.index')
            ->with('error', 'Error al eliminar la reservación: '.$e->getMessage());
    }
}
  


public function startTimer(Request $request)
{
    $data = $request->validate([
        'mesa_id' => 'required|integer',
        'expires_at' => 'required|date'
    ]);

    Cache::put('reservation_timer_'.$data['mesa_id'], $data['expires_at'], now()->addMinutes(2));
    
    return response()->json(['success' => true]);
}

public function checkTime(Request $request)
{
    $mesaId = $request->query('mesa');
    $expiresAt = Cache::get('reservation_timer_'.$mesaId);

    if (!$expiresAt || now()->gt($expiresAt)) {
        return response()->json(['expired' => true]);
    }

    return response()->json([
        'expired' => false,
        'expires_at' => $expiresAt
    ]);
}

public function cancel(Request $request)
{
    $mesaId = $request->input('mesa_id');
    Cache::forget('reservation_timer_'.$mesaId);
    
    return response()->json(['success' => true]);
}

public function store(Request $request)
{
    $validated = $request->validate([
        'fecha' => 'required|date',
        'meal' => 'required|in:desayuno,comida,cena',
        'schedule' => 'required|string',
        'mesa' => 'required|integer',
        'asientos' => 'required|integer|min:1|max:10',
        'adults' => 'required|integer|min:1',
        'children' => 'required|integer',
        'nombre' => 'required|string|max:100',
        'telefono' => 'required|string|max:15',
        'email' => 'required|email|max:100',
        'tipo' => 'required|in:huesped,visitante',
        'habitacion' => 'nullable|string|required_if:tipo,huesped'
    ]);

        $reservacion = Reservacion::create([
            'fecha' => $validated['fecha'],
            'comida' => $validated['meal'],
            'horario' => $validated['schedule'],
            'mesa' => $validated['mesa'],
            'asientos' => $validated['asientos'],
            'adultos' => $validated['adults'],
            'menores' => $validated['children'],
            'nombre_completo' => $validated['nombre'],
            'telefono' => $validated['telefono'],
            'email' => $validated['email'],
            'tipo' => $validated['tipo'] == 'huesped' ? 'huésped' : 'visitante',
            'habitacion' => $validated['habitacion'] ?? null
        ]);

        return redirect()->back()->with('success', 'Reservación creada exitosamente!');
    }
public function update(Request $request, $id)
    {
        $request->validate([
            'comida' => 'required|in:desayuno,comida,cena',
            'horario' => 'required|string',
        ]);

        $reservacion = Reservacion::findOrFail($id);
        $reservacion->update([
            'comida' => $request->comida,
            'horario' => $request->horario,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Reservación actualizada correctamente',
            'data' => $reservacion
        ]);
    }
}




    






    
