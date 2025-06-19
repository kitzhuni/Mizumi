<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistroUsuariosController extends Controller
{
    public function index()
    {
        return view('registrousuarios'); // Vista del formulario
    }

    public function store(Request $request)
{
    // Validación de los datos
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'puesto' => 'required|string|max:255',
        'permisos' => 'required|string',
    ]);

    // Agrega esto para depurar y ver los datos validados
    dd($validatedData);

    // Creación del usuario en la base de datos
    User::create([
        'name' => $validatedData['name'], // Cambié 'nombre' a 'name'
        'email' => $validatedData['email'], // Cambié 'correo' a 'email'
        'password' => Hash::make($validatedData['password']),
        'puesto' => $validatedData['puesto'],
        'role' => $validatedData['permisos'],
    ]);

    return redirect()->route('login')->with('success', 'Registro exitoso. Ahora puede iniciar sesión.');
}

public function showDashboard()
{
    $user = auth()->user(); // Obtén el usuario autenticado
    return view('dashboard', compact('user'));
}
}
