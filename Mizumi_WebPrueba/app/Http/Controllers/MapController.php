<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MapController extends Controller
{
    public function create()
    {
        return view('maps.create');
    }

    public function store(Request $request)
    {
        \Log::debug('Datos recibidos en store:', $request->all());

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'columns' => 'required|integer|min:1|max:20',
                'rows' => 'required|integer|min:1|max:20',
                'objects' => 'required|json',
                'scenario_quantity' => 'required|integer|min:1|max:2',
                'clue_quantity' => 'required|integer|min:0',
                'table_quantity' => 'required|integer|min:1',
                'chairs_per_table' => 'required|integer|min:1|max:10',
                'adult_chair_price' => 'required|numeric|min:0',
                'child_chair_price' => 'required|numeric|min:0',
                'infant_chair_price' => 'required|numeric|min:0',
            ]);
            \Log::debug('Datos validados:', $validated);

            $map = Map::create($validated);
            
            \Log::info('Mapa creado:', $map->toArray());
    
            return response()->json([
                'success' => true,
                'message' => 'Mapa guardado correctamente',
                'data' => $map
            ]);
        }

         catch (\Illuminate\Validation\ValidationException $e) {
        \Log::error('Error de validación:', $e->errors());
        return response()->json([
            'success' => false,
            'message' => 'Error de validación',
            'errors' => $e->errors()
        ], 422);
        
    } catch (\Exception $e) {
        \Log::error('Error al guardar mapa:', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        
        return response()->json([
            'success' => false,
            'message' => 'Error al guardar el mapa: ' . $e->getMessage()
        ], 500);
    }
    }

   // En MapController.php, método show()
    public function show($id)
    {
        $map = Map::findOrFail($id);
        
        // Decodificar el JSON de objects si existe
        $map->objects = $map->objects ? json_decode($map->objects, true) : [
            'tables' => [],
            'scenarios' => [],
            'clues' => [],
            'chairs' => []
        ];
        
        return view('show', compact('map'));
    }

    public function index()
    {
        $maps = Map::select('id', 'name', 'created_at')->latest()->get();
        return view('index', compact('maps'));
    }




    // --- NUEVOS MÉTODOS PARA MIZUMI ---
    
    /**
     * Mostrar vista de reservación para Mizumi
     */
    public function showMizumi()
    {
        return view('reservacionmesa'); // Vista que mostrará el mapa
    }

    /**
     * Obtener datos del mapa Mizumi en formato JSON
     */
    public function getMizumiMap()
{
    try {
        $map = Map::where('name', 'Mizumi')->first();
        
        if (!$map) {
            Log::error('Mapa Mizumi no encontrado en la base de datos');
            return response()->json([
                'error' => 'Mapa Mizumi no encontrado'
            ], 404);
        }

        return response()->json([
            'id' => $map->id,
            'name' => $map->name,
            'rows' => $map->rows,
            'columns' => $map->columns,
            'objects' => $map->objects ? json_decode($map->objects, true) : [
                'tables' => [],
                'scenarios' => [],
                'clues' => []
            ]
        ]);
        
    } catch (\Exception $e) {
        Log::error('Error al obtener mapa Mizumi', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ]);
        
        return response()->json([
            'error' => 'Error interno al cargar el mapa'
        ], 500);
    }
}
public function update(Request $request, $id)
{
    // Validar los datos recibidos
    $validated = $request->validate([
        'name' => 'sometimes|required|string|max:255',
        'description' => 'nullable|string',
        'columns' => 'sometimes|required|integer|min:1|max:21',
        'rows' => 'sometimes|required|integer|min:1|max:21',
        'objects' => 'sometimes|required|array'
    ]);

    // Buscar el mapa a actualizar
    $map = Map::findOrFail($id);

    // Actualizar los campos
    $map->update([
        'description' => $validated['description'] ?? $map->description,
        'columns' => $validated['columns'] ?? $map->columns,
        'rows' => $validated['rows'] ?? $map->rows,
        'objects' => $validated['objects'] ?? $map->objects
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Mapa actualizado correctamente',
        'data' => $map
    ]);
}
    
}
