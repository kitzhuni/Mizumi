<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Mesa - Mizumi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        
        header {
            background: #033e59;    
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #e0e0e0;
        }
        
        .logo img {
            width: 100px;
            height: auto;
        }
        
        .inicio-button {
            background-color: transparent;
            color: #e0e0e0;
            padding: 0.4rem 1rem;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }
        
        .inicio-button i {
            margin-right: 0.5rem;
        }
        .map-and-panel-container {
    display: grid;
    grid-template-columns: auto 300px; /* Mapa ocupa el espacio restante, panel 300px */
    gap: 20px; /* Espacio entre mapa y panel */
    width: 100%;
}

#map {
    min-height: 500px;
    background-color: #BABABA;
    width: 100%; /* Mantiene su tamaño original */
}

.info-panel {
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Estilos opcionales para el panel (igual que antes) */
.info-item { margin-bottom: 15px; }
.submit-button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
        
        .map-container {
            max-width: 1200px;
            margin: 20px auto;
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
            color: #033e59;
            margin: 0;
        }
        
        .date-picker {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-left: 10px;
        }
        
        .map-grid {
            position: relative;
            display: grid;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            margin: 0 auto;
            width: fit-content;
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
        
        .table {
            background-color: #28a745;
            border-radius: 50%;
        }
        
        .table.reserved {
            background-color: #dc3545 !important;
        }
        
        .table.partial {
            background-color: #033E59 !important;
        }
        
        .table.processing {
            background-color: #033E59 !important;
            cursor: not-allowed;
        }
        
        .scenario {
            background-color: #033E59;
        }
        
        .clue {
            background-color: #033E59;
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
        
        .info-panel {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        
        .info-item {
            margin-bottom: 10px;
        }
        
        .submit-button {
            background-color: #033e59;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }
        
        .submit-button:hover {
            background-color: #022a3d;
        }
    </style>
</head>
<body>
<header class="flex items-center justify-between px-4 py-2 bg-[#1a1a1a]"> <!-- Ajusta el color de fondo según necesites -->
    <!-- Botón INICIO (a la izquierda) -->
    <div>
        <a href="{{ url('/restaurantsmundoimperial') }}" class="inicio-button flex items-center">
            <i class="fas fa-bars text-white text-[10px] mr-2"></i>
            <span class="text-white text-sm md:text-lg">INICIO</span>
        </a>
    </div>

    <!-- Logo (centrado) -->
    <div class="logo absolute left-1/2 transform -translate-x-1/2">
        <img src="https://image-tc.galaxy.tf/wisvg-125hwvcbqkjnp336krgjo43fb/palacio-logo2.svg?width=500" alt="Palacio Mundo Imperial" class="w-[100px] h-auto">
    </div>

    <!-- Espacio vacío para equilibrar el layout (opcional) -->
    <div class="invisible">
        
    </div>
</header>

<div class="map-container">
    <div class="map-header">
        <h1 class="map-title">Reservar Mesa
            <input type="date" class="date-picker" id="fechaReserva">
        </h1>
    </div>

    <!-- Contenedor principal (mapa + panel lado a lado) -->
    <div class="map-and-panel-container">
        <!-- Mapa (conserva su tamaño original) -->
        <div id="map"></div>

        <!-- Panel de información (fuera del mapa, a la derecha) -->
        <div class="info-panel">
            <div class="info-item">
                <p>Mesa seleccionada: <span id="mesaSelected">Ninguna</span></p>
            </div>
            <div class="info-item">
                <p>Fecha seleccionada: <span id="fechaSeleccionada">Ninguna</span></p>
            </div>
            <div class="info-item">
                <p>Estado: <span id="estadoMesa">No seleccionada</span></p>
            </div>
            <div class="info-item">
                <p>Capacidad: <span id="capacidadMesa">-</span></p>
            </div>
            
        </div>
    </div>
</div>

    
    <!-- Leyenda -->
    <div class="map-legend">
        <div class="legend-item">
            <div class="legend-color" style="background-color: #28a745;"></div>
            <span>Mesas disponibles</span>
        </div>
        <div class="legend-item">
            <div class="legend-color" style="background-color: #033E59;"></div>
            <span>Mesas reservadas</span>
       

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Constantes
    const processingTimeout = 5 * 60 * 1000; // 5 minutos en milisegundos
    const STORAGE_KEY = 'mesasStateMizumi';
    
    // Obtener o inicializar el estado de las mesas desde localStorage
    let mesasState = JSON.parse(localStorage.getItem(STORAGE_KEY)) || {};
    
    // Función para guardar el estado en localStorage
    function saveMesasState() {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(mesasState));
    }
    
    // Escuchar cambios en el almacenamiento para sincronizar entre pestañas
    window.addEventListener('storage', function(event) {
        if (event.key === STORAGE_KEY) {
            mesasState = JSON.parse(event.newValue);
            updateTablesState();
        }
    });
    
    // Obtener el mapa de Mizumi desde la base de datos
    $.ajax({
        url: '/api/maps/mizumi',
        method: 'GET',
        success: function(response) {
            renderMap(response);
            checkUrlParamsForReservedTable();
            // Verificar y actualizar estados de mesas al cargar
            updateTablesState();
        },
        error: function(error) {
            console.error('Error al cargar el mapa:', error);
            $('#map').html('<p style="text-align:center;padding:20px;color:red;">Error al cargar el mapa del restaurante</p>');
        }
    });
    
    // Manejar cambio de fecha
    $('#fechaReserva').change(function() {
        $('#fechaSeleccionada').text(this.value || 'Ninguna');
    });
    
    // Función para actualizar el estado visual de las mesas según mesasState
    function updateTablesState() {
        $('.map-object.table').each(function() {
            const mesaLabel = $(this).text().trim();
            const estado = mesasState[mesaLabel]?.estado || 'available';
            const timestamp = mesasState[mesaLabel]?.timestamp || 0;
            const now = Date.now();
            
            // Si el estado es processing pero ya pasó el tiempo, volver a available
            if (estado === 'processing' && now - timestamp > processingTimeout) {
                mesasState[mesaLabel] = { estado: 'available', timestamp: 0 };
                saveMesasState();
            }
            
            // Aplicar clases según estado
            $(this).removeClass('processing reserved').addClass('table');
            if (estado === 'processing') {
                $(this).addClass('processing');
                $(this).css('cursor', 'not-allowed');
            } else if (estado === 'reserved') {
                $(this).addClass('reserved');
                $(this).css('cursor', 'not-allowed');
            } else {
                $(this).css('cursor', 'pointer');
            }
        });
    }
    
    // Función para verificar parámetros de URL y marcar mesa como reservada
    function checkUrlParamsForReservedTable() {
        const urlParams = new URLSearchParams(window.location.search);
        const mesaReservada = urlParams.get('mesaReservada');
        
        if (mesaReservada) {
            // Marcar la mesa como reservada en el estado
            mesasState[mesaReservada] = { estado: 'reserved', timestamp: Date.now() };
            saveMesasState();
            
            // Actualizar visualmente
            updateTablesState();
            
            // Limpiar el parámetro de la URL
            const newUrl = window.location.pathname + window.location.search.replace(/mesaReservada=[^&]*&?/, '').replace(/&$/, '');
            window.history.replaceState({}, document.title, newUrl);
        }
    }
    
    // Función para renderizar el mapa
    function renderMap(mapData) {
        const container = $('#map');
        container.empty();
        
        // Configurar el grid
        container.css({
            'display': 'grid',
            'gridTemplateColumns': `repeat(${mapData.columns}, 40px)`,
            'gridTemplateRows': `repeat(${mapData.rows}, 40px)`,
            'position': 'relative'
        });
        
        // Crear celdas del grid
        for (let y = 0; y < mapData.rows; y++) {
            for (let x = 0; x < mapData.columns; x++) {
                $('<div>').addClass('grid-cell')
                    .attr('data-x', x + 1)
                    .attr('data-y', y + 1)
                    .appendTo(container);
            }
        }
        
        // Dibujar mesas
        mapData.objects.tables.forEach(table => {
            const mesaLabel = table.label || `M${table.id}`;
            const element = $('<div>').addClass('map-object table')
                .css({
                    'left': `${(table.x - 1) * 40}px`,
                    'top': `${(table.y - 1) * 40}px`,
                    'width': `${(table.width || 1) * 40}px`,
                    'height': `${(table.height || 1) * 40}px`
                })
                .text(mesaLabel)
                .attr('title', `Capacidad: ${table.capacity || 4}`)
                .attr('data-mesa', mesaLabel)
                .click(function() {
                    handleTableClick(table, mesaLabel, $(this));
                });
            
            // Inicializar estado de la mesa si no existe
            if (!mesasState[mesaLabel]) {
                mesasState[mesaLabel] = { estado: 'available', timestamp: 0 };
            }
            
            container.append(element);
        });
        
        // Dibujar escenarios
        if (mapData.objects.scenarios) {
            mapData.objects.scenarios.forEach(scenario => {
                const element = $('<div>').addClass('map-object scenario')
                    .css({
                        'left': `${(scenario.x - 1) * 40}px`,
                        'top': `${(scenario.y - 1) * 40}px`,
                        'width': `${(scenario.width || 1) * 40}px`,
                        'height': `${(scenario.height || 1) * 40}px`
                    })
                    .text(scenario.label || 'Escenario');
                
                container.append(element);
            });
        }
        
        // Dibujar pistas
        if (mapData.objects.clues) {
            mapData.objects.clues.forEach(clue => {
                const element = $('<div>').addClass('map-object clue')
                    .css({
                        'left': `${(clue.x - 1) * 40}px`,
                        'top': `${(clue.y - 1) * 40}px`,
                        'width': `${(clue.width || 1) * 40}px`,
                        'height': `${(clue.height || 1) * 40}px`
                    })
                    .text(clue.label || 'Pista');
                
                container.append(element);
            });
        }
    }
    
    // Función para manejar el clic en una mesa
    function handleTableClick(table, mesaLabel, tableElement) {
        const fecha = $('#fechaReserva').val();
        const estadoActual = mesasState[mesaLabel]?.estado || 'available';
        
        if (!fecha) {
            alert('Por favor selecciona una fecha primero');
            return;
        }
        
        // Verificar estado de la mesa
        if (estadoActual === 'processing') {
            alert('Esta mesa está siendo reservada por otro usuario. Por favor espere o elija otra mesa.');
            return;
        }
        
        if (estadoActual === 'reserved') {
            alert('Esta mesa ya está reservada. Por favor elija otra mesa.');
            return;
        }
        
        // Marcar mesa como en proceso
        mesasState[mesaLabel] = { estado: 'processing', timestamp: Date.now() };
        saveMesasState();
        updateTablesState();
        
        // Configurar temporizador para desbloquear la mesa después de 5 minutos
        const timeoutId = setTimeout(() => {
            if (mesasState[mesaLabel]?.estado === 'processing') {
                mesasState[mesaLabel] = { estado: 'available', timestamp: 0 };
                saveMesasState();
                updateTablesState();
            }
        }, processingTimeout);
        
        // Almacenar el timeoutId para poder cancelarlo si se completa la reserva
        tableElement.data('timeoutId', timeoutId);
        
        // Redirigir a la página de reservación de sillas
        const reservarSillasUrl = "{{ route('reservacionsillas.index') }}?mesa=" + 
                               encodeURIComponent(mesaLabel) + 
                               "&fecha=" + encodeURIComponent(fecha) +
                               "&capacidad=" + (table.capacity || 4);
        
        window.location.href = reservarSillasUrl;
    }
    
    // Función para seleccionar una mesa (se mantiene por si acaso)
    function selectTable(table) {
        $('#mesaSelected').text(table.label || `M${table.id}`);
        $('#capacidadMesa').text(table.capacity || 4);
        $('#estadoMesa').text('Disponible').css('color', 'green');
    }
    
    // Manejar reserva (se mantiene por si acaso)
    $('#reservarBtn').click(function() {
        const mesa = $('#mesaSelected').text();
        const fecha = $('#fechaReserva').val();
        
        if (mesa === 'Ninguna') {
            alert('Por favor selecciona una mesa');
            return;
        }
        
        if (!fecha) {
            alert('Por favor selecciona una fecha');
            return;
        }
        
        window.location.href = "{{ route('reservacionsillas.index') }}?mesa=" + 
                             encodeURIComponent(mesa) + 
                             "&fecha=" + encodeURIComponent(fecha);
    });
});
</script>
</body>
</html>