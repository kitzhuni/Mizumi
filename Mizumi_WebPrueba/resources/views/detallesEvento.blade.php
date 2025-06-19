<x-app-layout>
    <div class="main_header">
        <h3>Layout del Evento</h3>
        {{-- <img src="{{ asset('assets/img/icons/config.png') }}" alt="config"> --}}


    </div>

    @if (isset($layout)) <!-- Mostrar layout del evento -->
    <div class="global_element">
        <div id="layout-container">
            <!--   <pre>{{ $layout->layout_json }}</pre>  --><!-- Muestra el JSON o úsalo para renderizar -->
        </div>

        <form class="basic_info">

            <div class="sideform">

                <label for="descripcion">Descripción:</label>
                <input type="hidden" name="descripcion" id="descripcion" readonly disabled value="">
                <span> {{ $event->descripcion }}</span>
            </div>

            <div class="right_form">

                <div class="options_conteiner">
                    <label for="fecha">Fecha</label>
                    <div class="options date_start">
                        <img src="{{ asset('assets/img/icons/calendar.png') }}" alt="calendar">


                        <input type="text" id="date_start" value="{{ $event->event_date }}" readonly disabled>
                    </div>


                </div>

                <div class="lugar">

                    <label for="Lugar">Lugar:</label>
                    <select name="Lugar" id="Lugar" disabled>
                        @if ($event->space && $event->space->location)
                        <option value="{{ $event->space->location->id }}" selected>
                            {{ $event->space->location->name }}
                        </option>
                        @else
                        <option value="">Sin lugar asociado</option>
                        @endif
                    </select>
                </div>
            </div>






        </form>
        <div class="infomesas">
            <p>Mesas vendidas</p>
            <span class="info_mesa vendidas">{{ $mesasVendidas }}</span>
            <p>Mesas disponibles</p>
            <span class="info_mesa disponibles">{{ $mesasDisponibles }}</span>
        </div>



        <div class="details">

            <div class="info"></div>


            <div class="info_details">
                <div class="element">
                    <div class="element">
                        <p>Capacidad total: <span id="capacidad">{{ $capacidadTotal }}</span></p>
                    </div>
                    <div class="element">
                        <p>Asientos vendidos total: <span id="vendidos">{{ $vendidos }}</span></p>
                    </div>
                    <div class="element">
                        <p>Asientos disponibles: <span id="disponibles">{{ $disponibles }}</span></p>
                    </div>

                </div>

                <div class="info_mesaReservar">
                    <p>No. de Mesa seleccionada:</p>

                    <input type="text" readonly value="" id="mesaSelected">


                    <button class="submit_button">Reservar</button>



                </div>
            </div>
        </div>
    </div>
    @else
    <!-- Mostrar mensaje de no información -->
    <div class="no_info">
        <img src="{{ asset('assets/img/icons/alert.png') }}" alt="alert">
        <p>Información no disponible</p>
        <span>El evento no tiene layout asociado.</span>
        <a href="{{ route('dashboard') }}">Regresar</a>
    </div>
    @endif

    <script src="{{ asset('assets/js/datepicker.js') }}"></script>


    <script>
        // Verificar si $layout y $layout->layout_json están definidos antes de ejecutar JavaScript
        @if(isset($layout) && !empty($layout -> layout_json))
        // Si layout_json está disponible, parsear el JSON
        const layoutData = JSON.parse(`{!! $layout->layout_json !!}`);
        const tables = @json($tables); // Pasamos las mesas con la propiedad all_seats_reserved
        const vendidos = @json($vendidos); // Pasamos las mesas con la propiedad all_seats_reserved
        renderConfig(layoutData, tables); // Llamar a la función con los datos parseados
        @else
        // Si no hay datos, puedes manejar el caso aquí o mostrar un error
        console.warn('No hay datos de layout disponibles.');
        @endif

        function renderConfig(configData, tables) {
            const groupedElements = {};

            // Agrupar elementos que empiezan con la misma letra (excepto 'm')
            configData.forEach((item) => {
                const firstChar = item.label?.charAt(0).toLowerCase(); // Obtener la primera letra

                // Verificar si el label es vacío o no existe
                if (!item.label || item.label.trim() === '') {
                    return; // No renderizar si el label está vacío
                }

                // Si es un elemento que empieza con 'm', dibujarlo individualmente
                if (firstChar === 'm') {
                    drawRectangle(item.x, item.y, item.width, item.height, item.label, 'individual', tables);
                } else {
                    // Si el grupo no existe, crear uno nuevo
                    if (!groupedElements[firstChar]) {
                        groupedElements[firstChar] = [];
                    }
                    // Agregar el elemento al grupo correspondiente
                    groupedElements[firstChar].push(item);
                }
            });

            // Dibujar cada grupo de elementos (solo letras que no son 'm')
            for (const char in groupedElements) {
                const items = groupedElements[char];

                // Calcular las dimensiones y posición de la fusión
                const x = Math.min(...items.map(item => item.x));
                const y = Math.min(...items.map(item => item.y));
                const width = Math.max(...items.map(item => item.x + item.width)) - x;
                const height = Math.max(...items.map(item => item.y + item.height)) - y;

                // Definir el label basado en la inicial
                let displayLabel;
                switch (char) {
                    case 'e':
                        displayLabel = 'esc';
                        break;
                    case 'p':
                        displayLabel = 'pista';
                        break;
                    default:
                        displayLabel = char; // Por defecto muestra la letra
                }

                // Dibujar el rectángulo agrupado
                drawRectangle(x, y, width, height, displayLabel, 'grouped', tables);
            }
        }

        function checkEventBlocking(eventId) {
            // Realiza una petición AJAX al servidor para verificar si el evento está bloqueado
            fetch(`/api/detallesEvento/${eventId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.is_blocked) {
                        console.log(`El número de evento ${eventId} está bloqueado.`);
                    }
                })
                .catch(error => {
                    console.error('Error al verificar el bloqueo del evento:', error);
                });
        }

        function checkTableBlocking(tableNumber, eventId) {
            // Realizar una petición AJAX para obtener el estado de la mesa
            fetch(`/api/detallesEvento/${eventId}/${tableNumber}`)
                .then(response => response.json())
                .then(data => {
                    if (data.is_blocked) {
                        console.log(`La mesa ${tableNumber} está ocupada.`);
                        alert(`La mesa ${tableNumber} está ocupada.`);
                        // No permitir enviar la mesa
                        document.getElementById("mesaSelected").value = "";
                    } else {
                        // Si la mesa no está bloqueada, permitir enviar la mesa
                        console.log(`La mesa ${tableNumber} está disponible.`);
                        document.getElementById("mesaSelected").value = tableNumber;
                    }
                })
                .catch(error => {
                    console.error('Error al verificar la disponibilidad de la mesa:', error);
                });
        }

        // Modificar la función drawRectangle para manejar el label redondo y el fondo rojo para mesas reservadas
        function drawRectangle(x, y, width, height, label, type, tables) {
            let table; // Variable para la mesa

            // Si el label empieza con 'M', es una mesa individual, buscamos por número
            if (label.charAt(0) === 'M') {
                const tableNumber = parseInt(label.substring(1)); // Extraemos el número de mesa (M1 -> 1)
                table = tables.find(t => t.table_number === tableNumber); // Buscar la mesa por table_number
            } else {
                // Si el label no es una mesa (como 'esc', 'pista'), no buscamos en las mesas
                console.log(`Elemento de grupo: ${label}`);
                table = null;
            }


            // Si no se encuentra la mesa, mostrar advertencia
            if (!table && label.charAt(0) === 'M') {
                console.warn(`Mesa con número ${label} no encontrada.`);
                return; // Salir de la función si no se encuentra la mesa
            }

            const rectangle = document.createElement('div');
            // Ajusta el tamaño de la cuadrícula
            const cellSize = 30; // Tamaño de cada celda

            // Establecer estilos CSS para posicionar el rectángulo
            rectangle.style.position = 'absolute';
            rectangle.style.left = `${x * cellSize}px`;
            rectangle.style.top = `${y * cellSize}px`;
            rectangle.style.width = `${width * cellSize}px`;
            rectangle.style.height = `${height * cellSize}px`;

            // Verificar si la mesa está completamente reservada
            if (table && table.all_seats_reserved) {
                rectangle.classList.add('force_red'); // Aplicar la clase 'force_red'
        console.log(`Mesa ${table.table_number} está completamente reservada.`);
            } else if(table && table.semi_reserved){
                console.log(`Mesa ${table ? table.table_number : label} se encuentra media media.`);
                rectangle.style.backgroundColor = 'rgba(0, 0, 255, 0.5)'; // Color por defecto para mesas no reservadas
            }

            // Verificar si el label es un elemento individual (tipo 'm') para hacerlo redondo
            if (label.charAt(0) == 'e' || label.charAt(0) == 'p') {
                rectangle.style.backgroundColor = '#031227'; // Fondo de color oscuro
                rectangle.style.color = '#ffffff'; // Color del texto blanco
            } else if (type === 'individual') {
                if(table && table.semi_reserved){
                    console.log(`Mesa ${table ? table.table_number : label} se encuentra media media.`);
                    rectangle.style.borderRadius = '50%'; // Hacerlo redondo
                    rectangle.style.backgroundColor = '#17C02E'; // Color diferente para mesas individuales
                    rectangle.style.border = '2px solid #FF5733'; // Cambiar el color de los bordes
                }else{
                    rectangle.style.borderRadius = '50%'; // Hacerlo redondo
                    rectangle.style.backgroundColor = '#17C02E'; // Color diferente para mesas individuales
                }

                

            }

            rectangle.innerText = label; // Agregar texto al rectángulo
            if (label === 'pista') {
    rectangle.style.display = 'flex';
    rectangle.style.justifyContent = 'center';
    rectangle.style.alignItems = 'flex-start';
    rectangle.style.paddingTop = '5px'; // opcional
}
            rectangle.classList.add('rectangle'); // Clase opcional para estilos

            // Agregar el evento de clic solo a los elementos de mesa
            if (type === 'individual' && !table?.all_seats_reserved) {
                rectangle.addEventListener('click', function() {
                    console.log(`Mesa seleccionada: ${label}`);
                    document.getElementById("mesaSelected").value = label;

                    // Obtener el número de evento desde la URL
                    const eventId = window.location.pathname.split('/')[2];
                    checkTableBlocking(label, eventId); // Verificar si la mesa está bloqueada
                });
            }
            // Agregar el rectángulo a la sección de información
            document.querySelector('.info').appendChild(rectangle);
        }







        document.querySelector('.submit_button').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el comportamiento predeterminado
            console.log("Intentando enviar...");

            let labelMesa = document.getElementById("mesaSelected").value.trim(); // Elimina espacios en blanco
            console.log("Mesa seleccionada:", labelMesa);

            if (!labelMesa) {
                // Si el campo está vacío, muestra un mensaje y no redirige
                alert("Por favor, selecciona una mesa antes de continuar.");
                console.warn("No se seleccionó ninguna mesa.");
                return; // Salir de la función sin redirigir
            }

            const eventId = window.location.pathname.split('/')[2]; // Obtiene el ID del evento de la URL
            console.log("ID del evento:", eventId);

            fetch('/detallesEvento', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    event_id: eventId,
                    table_number: labelMesa
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log("Reserva guardada:", data);
                window.location.href = `reservacionEvento/${eventId}/${encodeURIComponent(labelMesa)}`;
            })
            .catch(error => {
                console.error("Error al guardar la reserva:", error);
            });
            // Redirige solo si el campo no está vacío
            //window.location.href = `reservacionEvento/${eventId}/${encodeURIComponent(labelMesa)}`;
        });
    </script>

</x-app-layout>