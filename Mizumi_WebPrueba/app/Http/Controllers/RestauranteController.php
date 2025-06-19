<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class RestauranteController extends Controller
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

    return response()->json(['message' => 'Restaurante añadido exitosamente.']);

}
    


public function obtenerRestaurantes()
{
    $restaurantes = Restaurante::all(); // O usa select() para campos específicos
    return response()->json($restaurantes);
}

    // Método para obtener todos los restaurantes
    public function getRestaurants()
    {
        try {
            $restaurantes = Restaurante::all();
            return response()->json($restaurantes);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener los restaurantes: ' . $e->getMessage()], 500);
        }
    }
    
    public function panoramaGeneral()
    {
        $restaurantes = Restaurante::all();
        
        return view('panoramageneral', compact('restaurantes'));
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

    public function editar($id)
{
    $restaurante = Restaurante::findOrFail($id); // Encuentra el restaurante por ID
    return view('restaurantes.edit', compact('restaurante'));
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
      


public function index()
{
    $restaurantes = Restaurante::all(); // Obtiene todos los restaurantes de la BD
    return view('panoramageneral', compact('restaurantes'));
}

public function listadoRestaurantes()
    {
        // Forzar carga de datos para prueba
        $restaurantes = Restaurante::all();
        
        if($restaurantes->isEmpty()) {
            // Crear datos de prueba si no hay registros
            Restaurante::create([
                'nombre' => 'Ejemplo 1',
                'descripcion' => 'Descripción de prueba',
                'imagen' => ''
            ]);
            
            $restaurantes = Restaurante::all(); // Recargar después de crear
        }
        die(dump($restaurantes->toArray()));
        return view('panoramageneral', [
            'restaurantes' => $restaurantes,
            'debug_info' => [
                'route_name' => \Route::currentRouteName(),
                'controller' => __METHOD__
            ]
        ]);
    }

}