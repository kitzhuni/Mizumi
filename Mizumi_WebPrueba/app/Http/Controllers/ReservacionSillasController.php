<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservacionSillasController extends Controller
{
    public function index()
    {
        
        return view('reservacionsillas');
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'cantidad' => 'required|integer|min:1',
        ]);

        
        return redirect()->back()->with('success', 'Reservación realizada correctamente.');
    }
}