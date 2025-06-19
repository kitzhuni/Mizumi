<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizador de Mapa: {{ $map->name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .map-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        
        .map-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .map-title {
            font-size: 24px;
            color: #333;
            margin: 0;
        }
        
        .map-info {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            font-size: 16px;
        }
        
        .map-info span {
            font-weight: bold;
            color: #444;
        }
        
        .map-grid {
            position: relative;
            display: grid;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            margin: 0 auto;
            width: fit-content;
        }
        
        .grid-cell {
            background-color: white;
            border: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 40px;
            min-height: 40px;
            position: relative;
        }
        
        .axis-label {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #555;
        }
        
        .map-object {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            z-index: 10;
            border: 1px solid rgba(0,0,0,0.2);
            box-sizing: border-box;
            cursor: pointer;
            transition: all 0.2s;
        }

        .map-object:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        .table {
            background-color: #28a745;
            border-radius: 50%;
        }

        .table.reserved {
            background-color: #dc3545 !important;
        }

        .table.partial {
            background-color: #f6c23e !important;
        }

        .scenario {
            background-color: #6f42c1;
        }

        .clue {
            background-color: #fd7e14;
        }
        
        .btn-back {
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        
        .btn-back:hover {
            background-color: #5a6268;
        }
        
        .map-legend {
            display: flex;
            gap: 15px;
            margin-top: 20px;
            justify-content: center;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 14px;
        }
        
        .legend-color {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            border: 1px solid rgba(0,0,0,0.2);
        }

        /* Estilos del formulario y detalles */
        .basic_info {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .sideform, .right_form {
            flex: 1;
            padding: 0 10px;
        }

        .infomesas {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 8px;
        }

        .info_mesa {
            font-weight: bold;
            font-size: 18px;
        }

        .vendidas {
            color: #dc3545;
        }

        .disponibles {
            color: #28a745;
        }

        .details {
            display: flex;
            margin-top: 20px;
        }

        .info {
            flex: 2;
            position: relative;
            min-height: 500px;
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 10px;
        }

        .info_details {
            flex: 1;
            margin-left: 20px;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 8px;
        }

        .element {
            margin-bottom: 15px;
        }

        .info_mesaReservar {
            margin-top: 30px;
        }

        .submit_button {
            background-color: #17a2b8;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }

        .submit_button:hover {
            background-color: #138496;
        }

        #mesaSelected {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        /* Nuevos estilos para el date picker */
        .date-picker {
            display: inline-block;
            margin-left: 20px;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="map-container">
    <div class="map-header">
        <h1 class="map-title">Editando Mapa: {{ $map->name }}</h1>
        <a href="{{ route('maps.index') }}" class="btn-back">
            ← Volver
        </a>
    </div>
    
    <!-- Información básica del mapa -->
    <form class="basic_info">
        <div class="sideform">
            <label for="descripcion">Descripción:</label>
            <input type="text" name="descripcion" id="descripcion" value="{{ $map->description ?? '' }}">
        </div>

        <div class="right_form">
            <div class="options_conteiner">
                <label for="fecha">Fecha de creación</label>
                <div class="options date_start">
                    <input type="text" id="date_start" value="{{ $map->created_at->format('Y-m-d') }}" readonly disabled>
                </div>
            </div>
        </div>
    </form>

    <!-- Contenedor principal -->
    <div class="details">
        <!-- Contenedor del mapa -->
        <div class="info" id="mapContainer"></div>
        
        <!-- Panel de edición -->
        <div class="info_details">
            <h3>Editor de Mapa</h3>
            
            <div class="edit-section">
                <h4>Dimensiones del Mapa</h4>
                <div class="form-group">
                    <label for="columns">Columnas:</label>
                    <input type="number" id="columns" name="columns" min="1" max="21" value="{{ $map->columns }}">
                </div>
                
                <div class="form-group">
                    <label for="rows">Filas:</label>
                    <input type="number" id="rows" name="rows" min="1" max="21" value="{{ $map->rows }}">
                </div>
                
                <button id="update-dimensions" class="submit_button">Actualizar Dimensiones</button>
            </div>
            
            <div class="edit-section">
                <h4>Agregar Elementos</h4>
                
                <div class="form-group">
                    <label>Tipo de Elemento:</label>
                    <select id="element-type" class="form-control">
                        <option value="table">Mesa</option>
                        <option value="scenario">Escenario</option>
                        <option value="clue">Pista</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="element-label">Etiqueta:</label>
                    <input type="text" id="element-label" placeholder="Ej: M1, E1, P1">
                </div>
                
                <div class="form-group">
                    <label for="element-x">Posición X:</label>
                    <input type="number" id="element-x" min="1" max="21" value="1">
                </div>
                
                <div class="form-group">
                    <label for="element-y">Posición Y:</label>
                    <input type="number" id="element-y" min="1" max="21" value="1">
                </div>
                
                <div class="form-group" id="capacity-group" style="display: none;">
                    <label for="element-capacity">Capacidad:</label>
                    <input type="number" id="element-capacity" min="1" value="4">
                </div>
                
                <button id="add-element" class="submit_button">Agregar Elemento</button>
            </div>
            
            <div class="edit-section">
                <h4>Eliminar Elemento</h4>
                <div class="form-group">
                    <label for="delete-x">Coordenada X:</label>
                    <input type="number" id="delete-x" min="1" max="21">
                </div>
                <div class="form-group">
                    <label for="delete-y">Coordenada Y:</label>
                    <input type="number" id="delete-y" min="1" max="21">
                </div>
                <button id="delete-element" class="submit_button">Eliminar</button>
            </div>
            
            <div class="edit-section">
                <h4>Guardar Cambios</h4>
                <button id="save-map" class="submit_button" style="background-color: #28a745;">Guardar Mapa</button>
            </div>
        </div>
    </div>
    
    <!-- Leyenda -->
    <div class="map-legend">
        <div class="legend-item">
            <div class="legend-color" style="background-color: #28a745;"></div>
            <span>Mesas</span>
        </div>
        <div class="legend-item">
            <div class="legend-color" style="background-color: #6f42c1;"></div>
            <span>Escenarios</span>
        </div>
        <div class="legend-item">
            <div class="legend-color" style="background-color: #fd7e14;"></div>
            <span>Pistas</span>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Datos del mapa
    let mapData = {
        id: {{ $map->id }},
        name: "{{ $map->name }}",
        description: "{{ $map->description }}",
        columns: {{ $map->columns }},
        rows: {{ $map->rows }},
        objects: @json($map->objects)
    };

    const container = document.getElementById('mapContainer');
    let selectedElement = null;

    // Inicializar el mapa
    function initializeMap() {
        // Limpiar contenedor
        container.innerHTML = '';
        
        // Configurar el grid
        container.style.display = 'grid';
        container.style.gridTemplateColumns = `repeat(${mapData.columns}, 40px)`;
        container.style.gridTemplateRows = `repeat(${mapData.rows}, 40px)`;
        container.style.position = 'relative';
        
        // Crear celdas del grid
        for (let y = 0; y < mapData.rows; y++) {
            for (let x = 0; x < mapData.columns; x++) {
                const cell = document.createElement('div');
                cell.className = 'grid-cell';
                cell.dataset.x = x + 1;
                cell.dataset.y = y + 1;
                
                // Permitir hacer clic en las celdas para agregar elementos
                cell.addEventListener('click', function() {
                    document.getElementById('element-x').value = x + 1;
                    document.getElementById('element-y').value = y + 1;
                });
                
                container.appendChild(cell);
            }
        }
        
        // Dibujar objetos existentes
        drawMapObjects();
    }

    // Función para dibujar objetos del mapa
    function drawMapObjects() {
        // Eliminar objetos existentes primero
        document.querySelectorAll('.map-object').forEach(el => el.remove());
        
        // Combinar todos los objetos en un solo array para procesarlos
        const allObjects = [
            ...(mapData.objects.tables || []).map(obj => ({ ...obj, type: 'table' })),
            ...(mapData.objects.scenarios || []).map(obj => ({ ...obj, type: 'scenario' })),
            ...(mapData.objects.clues || []).map(obj => ({ ...obj, type: 'clue' })),
            ...(mapData.objects.chairs || [])
        ];
        
        if (allObjects.length === 0) return;
        
        allObjects.forEach(obj => {
            const element = document.createElement('div');
            element.className = 'map-object';
            element.dataset.type = obj.type;
            element.dataset.x = obj.x;
            element.dataset.y = obj.y;
            
            // Configurar posición y tamaño
            const left = (obj.x - 1) * 40;
            const top = (obj.y - 1) * 40;
            const width = (obj.width || 1) * 40;
            const height = (obj.height || 1) * 40;
            
            element.style.left = `${left}px`;
            element.style.top = `${top}px`;
            element.style.width = `${width}px`;
            element.style.height = `${height}px`;
            
            // Configurar estilo según el tipo
            if (obj.type === 'table') {
                element.style.backgroundColor = '#28a745';
                element.style.borderRadius = '50%';
                element.title = `Mesa ${obj.label}\nCapacidad: ${obj.capacity || 4}`;
            } 
            else if (obj.type === 'scenario') {
                element.style.backgroundColor = '#6f42c1';
                element.title = `Escenario ${obj.label}`;
            } 
            else if (obj.type === 'clue') {
                element.style.backgroundColor = '#fd7e14';
                element.title = `Pista ${obj.label}`;
            } 
            else {
                element.style.backgroundColor = '#6c757d';
            }
            
            // Texto del objeto
            element.textContent = obj.label || '';
            element.style.display = 'flex';
            element.style.alignItems = 'center';
            element.style.justifyContent = 'center';
            element.style.color = 'white';
            element.style.fontWeight = 'bold';
            element.style.fontSize = '12px';
            element.style.border = '1px solid rgba(0,0,0,0.2)';
            element.style.cursor = 'pointer';
            
            // Seleccionar elemento al hacer clic
            element.addEventListener('click', function() {
                selectElement(element, obj);
            });
            
            container.appendChild(element);
        });
    }
    
    // Seleccionar un elemento
    function selectElement(element, obj) {
        // Deseleccionar el elemento anterior
        if (selectedElement) {
            selectedElement.style.boxShadow = 'none';
        }
        
        // Seleccionar el nuevo elemento
        selectedElement = element;
        element.style.boxShadow = '0 0 0 3px #007bff';
        
        // Mostrar información en el panel de edición
        document.getElementById('delete-x').value = obj.x;
        document.getElementById('delete-y').value = obj.y;
    }
    
    // Actualizar dimensiones del mapa
    document.getElementById('update-dimensions').addEventListener('click', function() {
        const newColumns = parseInt(document.getElementById('columns').value);
        const newRows = parseInt(document.getElementById('rows').value);
        
        if (newColumns > 0 && newRows > 0 && newColumns <= 21 && newRows <= 21) {
            mapData.columns = newColumns;
            mapData.rows = newRows;
            initializeMap();
            alert('Dimensiones actualizadas correctamente');
        } else {
            alert('Por favor ingrese valores válidos (1-21)');
        }
    });
    
    // Cambiar visibilidad del campo de capacidad
    document.getElementById('element-type').addEventListener('change', function() {
        const type = this.value;
        document.getElementById('capacity-group').style.display = type === 'table' ? 'block' : 'none';
    });
    
    // Agregar nuevo elemento
    document.getElementById('add-element').addEventListener('click', function() {
        const type = document.getElementById('element-type').value;
        const label = document.getElementById('element-label').value.trim();
        const x = parseInt(document.getElementById('element-x').value);
        const y = parseInt(document.getElementById('element-y').value);
        const capacity = type === 'table' ? parseInt(document.getElementById('element-capacity').value) : null;
        
        if (!label) {
            alert('Por favor ingrese una etiqueta para el elemento');
            return;
        }
        
        if (isNaN(x) || isNaN(y) || x < 1 || y < 1 || x > mapData.columns || y > mapData.rows) {
            alert('Por favor ingrese coordenadas válidas dentro de las dimensiones del mapa');
            return;
        }
        
        if (type === 'table' && (isNaN(capacity) || capacity < 1)) {
            alert('Por favor ingrese una capacidad válida para la mesa');
            return;
        }
        
        // Crear el nuevo objeto
        const newObj = {
            id: Date.now(), // ID temporal
            x: x,
            y: y,
            width: 1,
            height: 1,
            label: label,
            capacity: capacity
        };
        
        // Agregar al tipo correspondiente
        if (!mapData.objects[type + 's']) {
            mapData.objects[type + 's'] = [];
        }
        
        mapData.objects[type + 's'].push(newObj);
        
        // Redibujar el mapa
        drawMapObjects();
        
        // Limpiar campos
        document.getElementById('element-label').value = '';
        document.getElementById('element-x').value = '1';
        document.getElementById('element-y').value = '1';
        
        alert('Elemento agregado correctamente');
    });
    
    // Eliminar elemento
    document.getElementById('delete-element').addEventListener('click', function() {
        const x = parseInt(document.getElementById('delete-x').value);
        const y = parseInt(document.getElementById('delete-y').value);
        
        if (isNaN(x) || isNaN(y)) {
            alert('Por favor ingrese coordenadas válidas');
            return;
        }
        
        // Buscar y eliminar el elemento en todas las categorías
        let found = false;
        ['tables', 'scenarios', 'clues'].forEach(type => {
            if (mapData.objects[type]) {
                const index = mapData.objects[type].findIndex(obj => obj.x === x && obj.y === y);
                if (index !== -1) {
                    mapData.objects[type].splice(index, 1);
                    found = true;
                }
            }
        });
        
        if (found) {
            drawMapObjects();
            alert('Elemento eliminado correctamente');
            
            // Limpiar campos
            document.getElementById('delete-x').value = '';
            document.getElementById('delete-y').value = '';
            
            // Deseleccionar elemento
            if (selectedElement) {
                selectedElement.style.boxShadow = 'none';
                selectedElement = null;
            }
        } else {
            alert('No se encontró ningún elemento en las coordenadas especificadas');
        }
    });
    
    // Guardar mapa
    document.getElementById('save-map').addEventListener('click', function() {
        // Actualizar descripción
        mapData.description = document.getElementById('descripcion').value;
        
        // Enviar datos al servidor
        fetch("{{ route('maps.update', $map->id) }}", {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            body: JSON.stringify(mapData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Mapa guardado correctamente');
                window.location.href = "{{ route('maps.index') }}";
            } else {
                throw new Error(data.message || 'Error al guardar el mapa');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al guardar el mapa: ' + error.message);
        });
    });
    
    // Inicializar el mapa al cargar la página
    initializeMap();
});
</script>

<style>
.map-container {
    font-family: 'Arial', sans-serif;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.map-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.map-title {
    font-size: 24px;
    color: #333;
}

.btn-back {
    display: inline-block;
    padding: 8px 15px;
    background-color: #6c757d;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.btn-back:hover {
    background-color: #5a6268;
}

.basic_info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 5px;
}

.sideform, .right_form {
    flex: 1;
    padding: 0 10px;
}

.infomesas {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 5px;
}

.infomesas p {
    margin: 0;
    font-weight: bold;
    color: #495057;
}

.infomesas span {
    display: block;
    font-size: 24px;
    font-weight: bold;
    color: #28a745;
}

.details {
    display: flex;
    gap: 20px;
}

.info {
    flex: 3;
    min-height: 500px;
    background-color: #f8f9fa;
    border-radius: 5px;
    position: relative;
    overflow: hidden;
}

.info_details {
    flex: 1;
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 5px;
}

.grid-cell {
    border: 1px solid #ddd;
    background-color: white;
}

.map-object {
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 12px;
    border: 1px solid rgba(0,0,0,0.2);
    cursor: pointer;
}

.edit-section {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #dee2e6;
}

.edit-section h4 {
    margin-top: 0;
    color: #495057;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #495057;
}

.form-control, .submit_button {
    width: 100%;
    padding: 8px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    box-sizing: border-box;
}

.submit_button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.submit_button:hover {
    background-color: #0069d9;
}

.map-legend {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 5px;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: 5px;
}

.legend-color {
    width: 20px;
    height: 20px;
    border-radius: 3px;
}

.row_extra {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
    margin-bottom: 10px;
    align-items: center;
}

.row_extra .left {
    flex: 1;
    min-width: 100px;
}

.row_extra label {
    margin-right: 5px;
}

.row_extra input {
    width: 50px;
}

.row_extra button {
    padding: 5px 10px;
}
</style>
</body>
</html>