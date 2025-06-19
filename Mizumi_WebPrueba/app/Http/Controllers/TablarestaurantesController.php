<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaRestaurantesController extends Controller
{
    /**
     * Muestra la vista tablarestaurantes.blade.
     */
    public function tablarestaurantes()
    {
        // Verificar si el usuario está autenticado
        $user = auth()->user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión primero.');
        }

        // Pasar datos a la vista si es necesario
        return view('tablarestaurantes', compact('user'));
    }
    public function index()
    {
        $restaurantes = Restaurante::all(); // Retrieve all restaurants from the database
        return view('tablarestaurantes', compact('restaurantes')); // Pass the data to the view 'tablarestaurantes'
    }
    
}