<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapa;

class MapaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'restaurante_id' => 'required|exists:restaurantes,id',
            'config' => 'required|json',  // Asegúrate de que config es un JSON válido
        ]);

        // Decodificar el JSON de la configuración
        $config = json_decode($data['config'], true);

        // Guarda la configuración del mapa en la base de datos
        Mapa::create([
            'restaurante_id' => $data['restaurante_id'],
            'x' => $config['columnas'],   // Ejemplo de cómo guardar columnas
            'y' => $config['filas'],      // Ejemplo de cómo guardar filas
            'width' => $config['mesasCantidad'], // Ejemplo con mesas
            'height' => 0, // Agregar otras propiedades si es necesario
            'label' => 'Mapa del Restaurante', // Agregar el label o lo que sea necesario
            'type' => 'rectangular', // Esto puede ser ajustado según el tipo
            'styles' => json_encode($config), // Guardar el resto de la configuración si es necesario
        ]);

        return response()->json(['success' => true]);
    }
}
