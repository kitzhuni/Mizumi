<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Agregar esta línea para importar la clase User

class TablaUsuariosController extends Controller
{
    /**
     * Muestra la vista tablarestaurantes.blade.
     */
    public function tablausuarios()
    {
        // Verificar si el usuario está autenticado
        $user = auth()->user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión primero.');
        }

        // Pasar datos a la vista si es necesario
        return view('tablausuarios', compact('user'));
    }

    public function index()
    {
        $user = User::all(); // Retrieve all users from the database
        return view('tablausuarios', compact('user')); // Pass the data to the view 'tablarestaurantes no me escuchas?'
    }
}