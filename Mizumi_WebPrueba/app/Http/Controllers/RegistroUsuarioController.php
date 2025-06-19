<?php

namespace App\Http\Controllers;

use App\Models\User; // Asegúrate de tener el modelo User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroUsuarioController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'puesto' => 'required|string|max:255',
            'permisos' => 'required|string',
        ]);

        // Crear el usuario
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encriptar la contraseña
            'puesto' => $request->puesto,
            'permisos' => $request->permisos,
        ]);

        // Redireccionar o devolver respuesta
        return redirect()->route('iniciosesion')->with('success', 'Usuario registrado correctamente.');


    }

    public function showDashboard()
{
    $user = auth()->user(); // Obtén el usuario autenticado
    return view('dashboard', compact('user'));
}

public function obtenerUsuarios()
{
    $usuarios = User::all(['id', 'name', 'email', 'puesto']);
    return response()->json($usuarios);
}
}

