<x-app-layout>
    <div class="div_one">
        <h2 style="position: relative; left: 2%; top: 2%;">Eventos</h2>

        <form class="basic_info" method="POST" action="{{ route('events.update', $event->id) }}">
            @csrf
            @method('PUT')
            <input style="position: relative; left: 2%; top: 4%;" ype="text" name="nombre" id="nombre" value="{{ $event->name ?? '' }}">
        </form>
    </div>

    <div class="div_two">
    <form class="basic_info" method="POST" action="{{ route('events.update', $event->id) }}">
    @csrf
    @method('PUT')
        <h4 style="position: absolute; left: 2%; top: 20%;">Descripción:</h4>
        <textarea maxlength="148" class="tauno" name="descripcion" id="descripcion" rows="4" cols="50">{{ $event->descripcion ?? '' }}</textarea>
        <div style="position: absolute; left: 9%; top: 38%; width: 49%; border: 1px solid #bebebe;"></div>
        <div style="position: absolute; left: 9%; top: 72%; width: 49%; border: 1px solid #bebebe;"></div>

        <h4 style="position: absolute; left: 60%; top: 20%;">Fecha:</h4>
        <div style="position: absolute; left: 64%; top: 15px;">
            <div class="options date_start">
                    <img src="{{ asset('assets/img/icons/calendar.png') }}" alt="calendar">  
                    <input type="text" name="fecha" id="date_start" placeholder="Fecha de inicio"
                        value="{{ $event->event_date ?? '' }}">
            </div>
        </div>

        <div style="position: absolute; left: 76%; top: 15px;">
            <div class="options date_end">
                    <img src="{{ asset('assets/img/icons/calendar.png') }}" alt="calendar">  
                    <input type="text" name="fecha" id="date_end" placeholder="Fecha de fin"
                        value="{{ $event->event_date ?? '' }}">
            </div>
        </div>

        <h4 style="position: absolute; left: 60%; top: 55%;">Lugar:</h4>
        <select style="font-family: 'Poppins', sans-serif; appearance: none; border: none; outline: none; position: absolute; left: 63.7%; top: 55%; width: 32%;" name="lugar" id="Lugar">
                    @foreach ($spaces as $space)
                    <option value="{{ $space->id }}" {{ $event->space_id == $space->id ? 'selected' : '' }}>
                        {{ $space->name }}
                    </option>
                    @endforeach
                </select>
        <div style="position: absolute; left: 63.7%; top: 72%; width: 32%; border: 1px solid #bebebe;"></div>
        
    </form>
    </div>

    <div class="div_three">
    <section class="principal_clase">
        <div class="visualizer"></div>

        <form class="form_generator" action="">
            <p>Mapa:</p>
            <div class="row">
                <label for="Columnas">Columnas: X</label>
                <input
                    type="number"
                    name="number"
                    id="columnas"
                    max="20"
                    min="1"
                    {{ isset($layout) ? 'disabled readonly' : '' }}>
                <label for="Filas">Filas: Y</label>
                <input
                    type="number"
                    name="number"
                    id="filas"
                    max="20"
                    min="1"
                    {{ isset($layout) ? 'disabled readonly' : '' }}>
            </div>
            <button style="display: none;"
                id="draw-rect"
                {{ isset($layout) ? 'disabled' : '' }}>
                Dibujar Rectángulo
            </button>

            <p>Borrar un objeto</p>
            <div>
                <label>X:</label>
                <input type="number" id="input-x" placeholder="Coordenada X">
                <label>Y:</label>
                <input type="number" id="input-y" placeholder="Coordenada Y">
                <button id="btn-delete-object">Eliminar objeto</button>
            </div>

            <p>Escenario</p>
            <div class="row">
                <label for="escenarioCantidad">Cantidad:</label>
                <input
                    type="number"
                    name="number"
                    id="escenarioCantidad"
                    max="2"
                    min="1"
                    {{ isset($layout) ? 'disabled readonly' : '' }}>
            </div>
            <div id="escenarioRows"></div>

            <p>Pista</p>
            <div class="row">
                <label for="pistaCantidad">Cantidad:</label>
                <input
                    type="number"
                    name="number"
                    id="pistaCantidad"
                    {{ isset($layout) ? 'disabled readonly' : '' }}>
            </div>
            <div id="pistaRows"></div>

            <p>Mesas</p>
            <div class="row">
                <label for="mesasCantidad">Cantidad:</label>
                <input
                    name="mesas"
                    type="number"
                    name="number"
                    id="mesasCantidad"
                    {{ isset($layout) ? 'disabled readonly' : '' }}>
            </div>
            <div id="mesasRows"></div>

            <p for="sillasxmesa">Sillas x mesa</p>
            <div class="cantidad_sillas_container">
                <span>Cantidad: </span>
                <select
                    name="sillasxmesa"
                    id="sillasxmesa"
                    {{ isset($layout) ? 'disabled readonly' : '' }}>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            <p>Detalles de venta:</p>
            <div class="precios">
                <span>Precio silla adulto $</span>
                <input
                    type="number"
                    name="precioAdulto"
                    id="precioAdulto"
                    value="{{ $event->precioAdulto ?? '' }}">
            </div>

            <div class="precios">
                <span>Precio silla menor $</span>
                <input
                    type="number"
                    name="precioMenor"
                    id="precioMenor"
                    value="{{ $event->precioMenor ?? '' }}">
            </div>

            <div class="precios">
                <span>Precio silla infantes $</span>
                <input
                    type="number"
                    name="precioinfantes"
                    id="precioInfantes"
                    value="{{ $event->precioInfante ?? '' }}">
            </div>

            <input
                type="hidden"
                name="to_edit"
                id="to_edit"
                value="{{ isset($layout) ? 'true' : 'false' }}">

            <input
                class="submitPrincipal"
                id="save"
                type="submit"
                value="{{ isset($layout) ? 'Actualizar datos' : 'Guardar cambios' }}">
        </form>


    </section>
    </div>


    <script>
        document.getElementById('save').addEventListener('click', function(event) {
            event.preventDefault(); // Evita el envío del formulario
            const eventId = window.location.pathname.split('/').pop(); // Obtener el eventId de la URL
            sendDataToServer(eventId); // Pasar eventId a la función para enviar los datos al servidor
        });

        function sendDataToServer(eventId) {
            // Recopilar los datos del formulario principal
            const nombre = document.getElementById('nombre').value;
            const descripcion = document.getElementById('descripcion').value.trim();
            // Verifica si está vacío o tiene solo espacios en blanco
            if (descripcion === "") {
                // Asignar un espacio en blanco explícito
                const valorEnviar = " ";
                console.log("Se enviará un espacio en blanco:", valorEnviar);
            } else {}
            const fechaInicio = document.getElementById('date_start').value;
            const espacio = document.getElementById('Lugar').value;

            // Datos adicionales del formulario
            const columnas = document.getElementById('columnas').value;
            const filas = document.getElementById('filas').value;
            const escenarioCantidad = document.getElementById('escenarioCantidad').value;
            const pistaCantidad = document.getElementById('pistaCantidad').value;
            const mesasCantidad = document.getElementById('mesasCantidad').value;
            const sillasxmesa = document.getElementById('sillasxmesa').value;
            const precioAdulto = document.getElementById('precioAdulto').value;
            const precioInfante = document.getElementById('precioInfantes').value;
            const precioMenor = document.getElementById('precioMenor').value;
            const to_edit_input = document.getElementById('to_edit').value;

            // Calcular la capacidad como la multiplicación de mesasCantidad y sillasxmesa
            const capacidad = mesasCantidad * sillasxmesa;
            console.log("datosextras", capacidad, "xmesa", sillasxmesa)

            // Validación de campos obligatorios
            if (!nombre || !descripcion || !fechaInicio || !espacio) {
                alert('Por favor, complete todos los campos obligatorios: Nombre, Descripción, Fecha de Inicio y Lugar.');
                return; // Detener la ejecución si falta algún campo obligatorio
            }

            // Recoger los valores de la cuadrícula directamente de los elementos generados en `.visualizer`
            const elements = document.querySelectorAll('.visualizer .rect');
            const config = [];

            function rgbToHex(rgb) {
                const result = /^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/.exec(rgb);
                if (result) {
                    return "#" +
                        ("0" + parseInt(result[1], 10).toString(16)).slice(-2) +
                        ("0" + parseInt(result[2], 10).toString(16)).slice(-2) +
                        ("0" + parseInt(result[3], 10).toString(16)).slice(-2);
                }
                return rgb;
            }


            elements.forEach(element => {
                const itemConfig = {
                    x: parseFloat(element.style.left) / (100 / 21) + 1, // Ajuste de posición en X
                    y: parseFloat(element.style.top) / (100 / 21) + 1, // Ajuste de posición en Y
                    width: parseFloat(element.style.width) / (100 / 21), // Ancho relativo
                    height: parseFloat(element.style.height) / (100 / 21), // Altura relativa
                    label: element.innerText, // Etiqueta del elemento
                    type: element.classList.contains('circle') ? 'Mesas' : 'Other', // Determina el tipo basado en la clase
                    styles: {
                        borderRadius: element.style.borderRadius,
                        textAlign: element.style.textAlign,
                        zIndex: element.style.zIndex,
                        backgroundColor: rgbToHex(element.style.backgroundColor) // Convertir RGB a Hex
                    }
                };
                console.log(itemConfig)
                config.push(itemConfig);
            });

            // Convertir config a JSON
            const jsonConfig = JSON.stringify(config);

            // Crear un objeto con todos los datos que enviarás al servidor
            const data = {
                to_edit_input: to_edit_input,
                nombre: nombre,
                descripcion: descripcion,
                fecha: fechaInicio,
                lugar: espacio,
                columnas: columnas,
                filas: filas,
                escenarioCantidad: escenarioCantidad,
                pistaCantidad: pistaCantidad,
                mesasCantidad: mesasCantidad,
                sillasxmesa: sillasxmesa,
                capacidad: capacidad, // Incluir la capacidad calculada
                precioAdulto: precioAdulto,
                precioMenor: precioMenor,
                precioInfante: precioInfante,
                configuraciones: jsonConfig // Guardar la configuración directamente
            };

            // Enviar los datos al servidor utilizando AJAX con axios
            axios.put(`/events/${eventId}`, data)
                .then(response => {
                    console.log("Datos enviados", data);
                    console.log('Respuesta del servidor', response);

                    if (response.data.layout === 'nuevo') {
                        // Redirigir a los detalles del evento si es nuevo
                        alert('Evento creado correctamente');
                        window.location.href = `/detallesEvento/${eventId}`;
                    } else {
                        // Mostrar un alert si solo se actualizó
                        alert('Evento actualizado correctamente');
                    }
                })
                .catch(error => {
                    console.error('Error al guardar los datos', error);
                    alert('Ocurrió un error al guardar los datos');
                });

        }
    </script>


    <script src="{{ asset('assets/js/datepicker.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    // Obtener el ID del evento desde la URL
    const eventId = window.location.pathname.split('/').pop();

    // Solicitar los objetos guardados desde el servidor
    axios.get(`/get-save-objects/${eventId}`)
        .then(response => {
            const objects = response.data;
            objects.forEach(object => {
                // Dibujar cada objeto basado en sus datos
                drawRectangle(object.x, object.y, object.width, object.height, object.label, object.type, object.styles);
            });
        })
        .catch(error => {
            console.error("Error al obtener los objetos guardados", error);
        });

        document.getElementById("btn-delete-object").addEventListener("click", function () {
            const x = parseInt(document.getElementById("input-x").value);
            const y = parseInt(document.getElementById("input-y").value);

            if (isNaN(x) || isNaN(y)) {
                alert("Por favor, ingrese coordenadas válidas.");
                return;
            }

            // Enviar la solicitud DELETE para eliminar el objeto con esas coordenadas
            axios.delete(`/delete-object/${eventId}`, { data: { x, y } })
                .then(response => {
                    alert("Objeto eliminado correctamente.");
                    location.reload(); // Recargar para actualizar los objetos
                })
                .catch(error => {
                    console.error("Error al eliminar el objeto", error);
                    alert("Hubo un error al eliminar el objeto.");
                });
        });
});

function drawRectangle(x, y, width, height, label, type, styles) {
    // Crear el elemento para el objeto
    const rect = document.createElement('div');
    rect.className = `save-object ${type}`;
    rect.style.position = 'absolute';
    rect.style.left = `${x}px`;
    rect.style.top = `${y}px`;
    rect.style.width = `${width}px`;
    rect.style.height = `${height}px`;

    // Estilos personalizados desde la base de datos
    for (const [key, value] of Object.entries(styles)) {
        rect.style[key] = value;
    }

    // Añadir el texto del label
    rect.innerText = label || type;  // Si no hay label, usar el tipo como texto.

    // Agregar el rectángulo al contenedor principal
    document.body.appendChild(rect);
}


        // Función para dibujar el rectángulo basado en valores de columnas y filas
        function drawRectangle(x, y, width, height, label = '', type = '') {
            console.log("type recibido", type);
            console.log("valores x,y", x, " ", y)
            const rect = document.createElement('div');
            rect.classList.add('rect');
            const gridWidth = 100 / 21; // Cambiado a 21 columnas
            const gridHeight = 100 / 21; // Cambiado a 21 filas

            rect.style.left = `${x * gridWidth}%`; // Usar x directamente
            rect.style.top = `${y * gridHeight}%`; // Usar y directamente
            rect.style.width = `${width * gridWidth}%`;
            rect.style.height = `${height * gridHeight}%`;
            rect.style.zIndex = 10;
            rect.style.textAlign = "center";

            // Si el tipo es "Mesas", hacer que el rectángulo sea circular
            if (type === 'Mesas') {
                rect.style.borderRadius = '100%'; // Hacer el elemento circular
            }

            if (type === 'Escenario') {
                rect.style.backgroundColor = '#031227'; // Fondo personalizado para 'Escenario'
                rect.style.color = '#ffffff'; // Fondo personalizado para 'Escenario'
                // Aquí puedes agregar más estilos si lo necesitas
            }

            // Añadir el texto al rectángulo
            rect.innerText = label;

            // Añadir el rectángulo a la visualización
            document.querySelector('.visualizer').appendChild(rect);
            
            // Obtener el ID del evento desde la URL
            const eventId = window.location.pathname.split('/').pop();

            // Preparar datos
            const dataToSave = {
                event_id: eventId,
                x: x,
                y: y,
                width: width,
                height: height,
                label: label,
                type: type,
                styles: {
                    borderRadius: rect.style.borderRadius,
                    textAlign: rect.style.textAlign,
                    zIndex: rect.style.zIndex,
                    backgroundColor: rect.style.backgroundColor
                }
            };

            // Enviar a servidor
            axios.post('/save-object', dataToSave)
                .then(response => {
                    console.log('Guardado en DB', response.data);
                })
                .catch(error => {
                    console.error('Error al guardar en DB', error);
                });

        }
        

        // Función que se ejecuta al hacer clic en el botón "Dibujar Rectángulo"
        document.getElementById('draw-rect').addEventListener('click', function(event) {
            event.preventDefault();
            const columnas = parseInt(document.getElementById('columnas').value);
            const filas = parseInt(document.getElementById('filas').value);

            if (columnas > 0 && filas > 0 && columnas <= 21 && filas <= 21) { // Cambiado a 21
                drawRectangle(1, 1, columnas, filas);
            } else {
                alert("Por favor, introduce valores válidos para columnas y filas.");
            }
        });
    </script>

    <script>
        // Función para generar filas dinámicas
        function generateRows(type, count, containerId) {
            const container = document.getElementById(containerId);
            container.innerHTML = '';
            for (let i = 0; i < count; i++) {
                const row = document.createElement('div');
                row.classList.add('row_extra');
                row.innerHTML = `
            <div class="left">
                <span>Posición</span>
                <span>${type} ${i + 1}</span>
            </div>
            <label for="${type}_X_${i}">X:</label>
            <input type="number" id="${type}_X_${i}" name="${type}_X_${i} max="21" min="1">
            <label for="${type}_Y_${i}">Y:</label>
            <input type="number" id="${type}_Y_${i}" name="${type}_Y_${i} max="21" min="1">
            <button class="draw-scenario" data-index="${i}" data-type="${type}">Dibujar ${type}</button>
        `;
                container.appendChild(row);
            }

            const buttons = container.querySelectorAll('.draw-scenario');
            buttons.forEach(button => {
                button.addEventListener('click', function(event) {
                    console.log("click para dibujar escenario");
                    event.preventDefault();
                    const index = this.getAttribute('data-index');
                    console.log("index", index);

                    const x = parseInt(document.getElementById(`${type}_X_${index}`).value);
                    const y = parseInt(document.getElementById(`${type}_Y_${index}`).value);

                    // Verificar si los valores de x o y son mayores a 20
                    if (x > 20 || y > 20) {
                        alert("Los valores de X y Y no deben ser mayores a 20.");
                        return; // Detener la ejecución si los valores no son válidos
                    }

                    if (x > 0 && y > 0) {
                        const label =
                            `${type.charAt(0)}${parseInt(index) + 1}`; // Concatena la letra en minúscula y el número sin ceros adicionales
                        drawRectangle(x, y, 1, 1, label, type);
                    } else {
                        alert(
                            `Por favor, introduce valores válidos para las coordenadas del ${type} ${index + 1}.`
                        );
                    }
                });
            });

        }

        // Agregar listeners a los inputs de cantidad
        document.getElementById('escenarioCantidad').addEventListener('input', function() {
            const cantidad = parseInt(this.value);
            if (!isNaN(cantidad)) {
                generateRows('Escenario', cantidad, 'escenarioRows');
            }
        });

        document.getElementById('pistaCantidad').addEventListener('input', function() {
            const cantidad = parseInt(this.value);
            if (!isNaN(cantidad)) {
                generateRows('Pista', cantidad, 'pistaRows');
            }
        });

        document.getElementById('mesasCantidad').addEventListener('input', function() {
            const cantidad = parseInt(this.value);
            if (!isNaN(cantidad)) {
                generateRows('Mesas', cantidad, 'mesasRows');
            }
        });
        
    </script>

    <script>
        const visualizer = document.querySelector('.visualizer');

        // Crear la cuadrícula de 21x21
        for (let row = 0; row < 21; row++) { // Cambiado a 21
            for (let col = 0; col < 21; col++) { // Cambiado a 21
                const cell = document.createElement('div');
                cell.classList.add('cell');

                if (row === 0) {
                    cell.innerText = col;
                    cell.classList.add('axis-label');
                } else if (col === 0) {
                    cell.innerText = row;
                    cell.classList.add('axis-label');
                } else {
                    cell.innerText = '';
                }

                visualizer.appendChild(cell);
            }
        }
    </script>




</x-app-layout>