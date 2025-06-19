<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Asegúrate de que el archivo de vista se llame login.blade.php
    }

    public function login(Request $request)
    {
        // Validar las credenciales
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar el usuario por correo
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Iniciar sesión al usuario
            Auth::login($user);

            // Redirigir a panoramageneral
            return redirect()->route('panoramageneral');
        }

        // Redirigir con mensaje de error si las credenciales son incorrectas
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function panoramaGeneral()
    {
        $user = Auth::user(); // Obtener el usuario autenticado
        return view('panoramageneral', compact('user')); // Pasar el usuario a la vista
    }

    public function editar($id)
    {
        $user = Auth::user(); // Obtener el usuario autenticado
        return view('editar', compact('user')); // Pasar el usuario a la vista
    }

    public function añadirrestaurante()
    {
        $user = Auth::user(); // Obtener el usuario autenticado
        return view('añadirrestaurante', compact('user')); // Pasar el usuario a la vista
    }

    public function tablarestaurantes()
    {
        $user = Auth::user(); // Obtener el usuario autenticado
        return view('tablarestaurantes', compact('user')); // Pasar el usuario a la vista
    }

    
}
