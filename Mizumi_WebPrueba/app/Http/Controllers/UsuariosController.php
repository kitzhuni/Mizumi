<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:500',
            'imagen' => 'required|image',
        ]);

        // Guardar imagen
        $imagePath = $request->file('imagen')->store('images', 'public');

        // Crear el restaurante
        $restaurante = new Restaurante();
        $restaurante->nombre = $request->nombre;
        $restaurante->descripcion = $request->descripcion;
        $restaurante->imagen = $imagePath;
        $restaurante->save();

        // return response()->json(['message' => 'Restaurante añadido exitosamente.']);
        
    return view('añadirrestaurante');
    }

    // Método para obtener todos los restaurantes
    public function getRestaurants()
    {
        try {
            $user = User::all();
            return response()->json($user);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener los restaurantes: ' . $e->getMessage()], 500);
        }
    }

    // Método para obtener todos los usuarios
    public function obtenerUsuarios()
    {
        $user = User::select('id', 'name', 'email', 'puesto')->get();
        return response()->json($user);
    }

    // Método para obtener todos los usuarios (alternativa)
    public function obtener()
    {
        $users = User::select('id', 'name', 'email', 'puesto')->get();
        return response()->json($users);
    }

    public function actualizarEstatus(Request $request)
    {
        $data = $request->input('restaurantes');

        foreach ($data as $restauranteData) {
            // Buscar restaurante por ID
            $restaurante = Restaurante::find($restauranteData['id']);

            if ($restaurante) {
                // Actualizar el estatus
                $restaurante->estatus = $restauranteData['estatus'];
                $restaurante->montaje = implode(", ", $restauranteData['montaje']); // Unir los valores del montaje con una coma

                $restaurante->save();
            }
        }

        return response()->json(['success' => true]);
    }

   

    public function infoRestaurantes($id)
    {
        $restaurante = Restaurante::find($id);  // Obtén el restaurante por ID
        if ($restaurante) {
            return response()->json($restaurante);  // Devuelve los datos del restaurante en formato JSON
        } else {
            return response()->json(['message' => 'Restaurante no encontrado'], 404);  // Si no se encuentra el restaurante
        }
    }

// METODO PARA EDITAR USUARIOS Y ELIMIAR

public function editar($id)
{
    // Buscar el usuario por ID
    $usuario = User::findOrFail($id);

    // Pasar el usuario a la vista de edición
    return view('usuarios.editar_usuario', compact('usuario'));
}

public function index()
{
    // Obtener todos los usuarios
    $user = User::all();

    // Pasar los usuarios a la vista
    return view('tablausuarios', compact('user'));
}

public function eliminar($id)
{
    // Buscar el usuario por ID
    $usuario = User::findOrFail($id);

    // Eliminar el usuario
    $usuario->delete();

    // Devolver una respuesta JSON
    return response()->json(['success' => true]);
}

public function actualizar(Request $request, $id)
{
    // Validar los datos del formulario
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'puesto' => 'required|string|max:255',
        'permisos' => 'required|string|in:Administrador,Master',
        'password' => 'nullable|string|min:8',
    ]);

    // Buscar el usuario por ID
    $usuario = User::findOrFail($id);

    // Actualizar los datos del usuario
    $usuario->name = $request->name;
    $usuario->email = $request->email;
    $usuario->puesto = $request->puesto;
    $usuario->permisos = $request->permisos;

    // Actualizar la contraseña si se proporciona
    if ($request->password) {
        $usuario->password = bcrypt($request->password);
    }

    $usuario->save();

    // Redirigir a la lista de usuarios con un mensaje de éxito
    return redirect()->route('tablausuarios')->with('success', 'Usuario actualizado correctamente.');
}


}