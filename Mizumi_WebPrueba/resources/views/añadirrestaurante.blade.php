<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Palacio Mundo Imperial</title>
    <link rel="stylesheet" href="{{ asset('storage/Fotos Hoteles/reservaciones/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/Fotos Hoteles/reservaciones/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/Fotos Hoteles/reservaciones/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/Fotos Hoteles/reservaciones/css/eventos_Master.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <style>
         body {
            font-family: 'Effra Regular', sans-serif; 
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1, h2 {
            font-family: 'FreightBig Pro', serif; 
        }
        header {
            background: #033e59;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #e0e0e0;
            height: 60px;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 100px;
            height: auto;
        }
        
        .fa-bars {
            font-size: 2rem;
            margin-right: 1rem;
        }
        .container {
    display: flex;
    min-height: 100vh; /* Permite que el contenedor principal se ajuste a la altura de la ventana */
    gap: 2rem; /* Agrega espacio horizontal entre elementos */
}

.visualizer {
    margin-left: 250px; /* Aumenta la distancia desde la barra lateral */
    width: calc(100% - 250px); /* Asegúrate de que ocupe el espacio disponible */
    padding: 1rem;
    background-color: #ffffff;
    border: 1px solid #ddd;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
}
        .sidebar{
    width: 245px;
    padding-top: 2rem;
    background-color: var(--bg-alternative);
    font-family: "Poppins", sans-serif;
    height: 92vh;
    position: fixed;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    z-index: 1;

}

@media only screen and (max-width: 600px) {
    .sidebar {
      background-color: lightblue;
      width: 0%;
      display: none;
    }
  }
.header_sidebar{
    flex-direction: column;
    text-align: center;
    padding: 0rem 1rem;

}

.header_sidebar h2 {
    font-weight: 800;
    font-style: normal;
}

.header_sidebar span {
    font-size: .8rem;
    color: var(--alternative-blue);
    font-weight: 700;
    text-transform: uppercase;
    margin-top: 1rem; /* Espacio sobre el texto */
}
        .sidebar .menu-item {
            display: flex;
            align-items: center;
            border-radius: 5px;
            cursor: pointer;
            
        }
        .sidebar .menu-item i {
            margin-right: 10px;
        }
        .sidebar .menu-item.active {
            background-color: #f0f0f0;
        }

        .submenu {
    display: none; /* Ocultar por defecto */
    background-color: #f0f0f0;
    padding: 10px;
    margin-top: 5px;
    border-radius: 5px;
}

.submenu-item {
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 3px;
}

.submenu-item:hover {
    background-color: #e0e0e0;
}

.menu-item.active .submenu {
    display: block; /* Mostrar cuando el menú principal está activo */
}

.logout {
    background-color: #002b49;
    color: #ffffff;
    text-align: center;
    padding: 10px;
    margin-top: auto; /* Empuja el botón hacia el fondo */
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 102%; /* Ocupa todo el ancho */
    flex-shrink: 0; /* Evita que el botón se encoja */
}

.form_generator {
    width: 37%; /* Se asegura de ocupar todo el ancho del contenedor */
    padding: 1rem; /* Espaciado interno */
    background-color: #ffffff; /* Fondo blanco para contraste */
    border: 1px solid #ddd; /* Línea ligera alrededor */
    border-radius: 8px; /* Bordes redondeados */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
} 

.basic_info{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content:  right;;
   /*  border: 1px solid;
    border-radius: 1rem;
    padding: .5rem .7rem;
    margin-bottom: 1rem;
    width: 100%; */
}
.status{
    padding: .8rem;
}

.status select {
    width: 60%;
}

    </style>
</head>
<body>
<header class="bg-[#033e59] p-4 flex justify-between items-center">
    <div class="flex items-center">
    </div>
    <div class="logo" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <img src="https://image-tc.galaxy.tf/wisvg-125hwvcbqkjnp336krgjo43fb/palacio-logo2.svg?width=500" alt="Palacio Mundo Imperial">
    </div>
</header>

<div class="sidebar">

    <div class="header_sidebar full_center">
        <div class="user_abreviation" id="userInitials">
            <!-- Iniciales se actualizarán aquí -->
        </div>

        <h2>Mi Reservación</h2>
        <h3>¡Bienvenido(a) {{ $user->name }}!</h3>
        <span>Mundo imperial</span>
    </div>

    <div class="menu-item full_center" id="menu-panorama" onclick="location.href='{{ url('/panoramageneral') }}'">
            <i class="fas fa-chart-bar"></i>
            <span>Panorama General</span>
            </div>

        
            <div >
<ul>
    
   
    <li onclick="toggleSubMenu(event)" style="cursor: pointer;">
        <a class="a-bar" href="#" style="color:black; text-decoration:none;"><i class="fas fa-cog" style="margin-right:10px"></i> Ajustes</a>
        <ul class="submenu" style="display: none; list-style: none; padding-left: 20px;">
            <li><a class="a-bar" href="{{ url('/tablarestaurantes') }}" style="color:black; text-decoration:none;"> <i class="fa fa-check-square" style="margin-right:10px"></i> Restaurantes</a></li>
            <li><a class="a-bar" href="{{ url('/tablausuarios') }}" style="color:black; text-decoration:none;"><i class="fa fa-check-square" style="margin-right:10px"></i> Reservaciones</a></li>
            <li><a class="a-bar" href="{{ url('/tablausuarios') }}" style="color:black; text-decoration:none;"> <i class="fas fa-users" style="margin-right:10px"></i>Usuarios</a></li>
        </ul>
    </li>
</li>
</div>
    <!-- div para dar espaciado necesario -->
    <div></div> 

    <div class="footer_sidebar">
    <div class="logout" onclick="location.href='{{ url('/iniciosesion') }}'">
        <i class="fas fa-sign-out-alt"></i>
        <span>Cerrar sesión</span>
        </div>
        </div>
</div>


<form class="basic_info" method="POST" action="{{ route('restaurantes.store') }}" enctype="multipart/form-data">

    @csrf <!-- Token de seguridad para Laravel -->
    <div class="sideform">
        <label for="nombreRestaurante">Nombre del Restaurante</label>
        <input type="text" name="nombre" id="nombreRestaurante" 
               style="width:240px; padding: 6px; margin-top: 10px; border: 1px solid #ccc; border-radius: 5px;" 
               placeholder="Ingresar nombre del Restaurante" required>

        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" 
               style="width:200px; padding: 6px; margin-top: 10px; border: 1px solid #ccc; border-radius: 5px;" 
               placeholder="Agregar descripción" required>

               <label for="imagen">Imagen</label>
               <input type="file" name="imagen" id="imagen" accept="image/*"
       style="width:230px; padding: 6px; margin-top: 10px; border: 1px solid #ccc; border-radius: 5px;" 
       required>

    </div>


    <button type="submit" style="margin-top: 20px; padding: 7px 20px; background-color: #033e59; color: white; border: none; border-radius: 5px;">Guardar</button>
</form>

<section class="principal_clase">
  <div class="visualizer"></div>
  <form class="form_generator" action="{{ route('maps.store') }}" method="POST" id="mapForm">
    @csrf
    <!-- Campo oculto para restaurante_id -->
    <!--<input type="hidden" name="restaurante_id" id="restaurante_id" value="{{ $restaurante->id ?? '' }}">
    -->
   
    <!-- Mapa -->
    <h3>Mapa:</h3>
    <div class="row">
        <label for="name">Nombre del mapa:</label>
        <input type="text" id="name" name="name" required />
    </div>  
    <div class="row">
        <label for="columnas">Columnas (X):</label>
        <input type="number" id="columnas" name="columns" max="20" min="1" />

        <label for="filas">Filas (Y):</label>
        <input type="number" id="filas" name="rows" max="20" min="1"  />
    </div>
    <button type="button" id="draw-rect">Dibujar Rectángulo</button>

    <!-- Aquí iría tu canvas o grid para dibujar el mapa -->
    <div id="map-container" style="margin: 20px 0;"></div>

    <!-- Borrar objeto -->
    <h3>Borrar un objeto:</h3>
    <div class="row">
        <label>X:</label>
        <input type="number" id="input-x" placeholder="Coordenada X">
        <label>Y:</label>
        <input type="number" id="input-y" placeholder="Coordenada Y">
        <button type="button" id="btn-delete-object">Eliminar objeto</button>
    </div>

    <!-- Escenario -->
    <h3>Escenario:</h3>
    <div class="row">
        <label for="escenarioCantidad">Cantidad:</label>
        <input type="number" id="escenarioCantidad" name="scenario_quantity" max="2" min="1" required />
    </div>
    <div id="escenarioRows"></div>

    <!-- Pista -->
    <h3>Pista:</h3>
    <div class="row">
        <label for="pistaCantidad">Cantidad:</label>
        <input type="number" id="pistaCantidad" name="clue_quantity" required />
    </div>
    <div id="pistaRows"></div>

    <!-- Mesas -->
    <h3>Mesas:</h3>
    <div class="row">
        <label for="mesasCantidad">Cantidad:</label>
        <input type="number" id="mesasCantidad" name="table_quantity" min="1" required />
    </div>
    <div id="mesasRows"></div>

    <!-- Sillas por mesa -->
    <h3>Sillas por mesa:</h3>
    <div class="cantidad_sillas_container">
        <label for="sillasxmesa">Cantidad:</label>
        <select id="sillasxmesa" name="chairs_per_table" required>
            @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>

    <!-- Detalles de venta -->
    <h3>Detalles de venta:</h3>
    <div class="precios">
        <label>Precio silla adulto $</label>
        <input type="number" name="adult_chair_price" id="precioAdulto" step="0.01">
    </div>

    <div class="precios">
        <label>Precio silla menor $</label>
        <input type="number" name="child_chair_price" id="precioMenor" step="0.01">
    </div>

    <div class="precios">
        <label>Precio silla infantes $</label>
        <input type="number" name="infant_chair_price" id="precioInfantes" step="0.01">
    </div>

    <!-- Campo oculto para los objetos del mapa -->
    <input type="hidden" name="objects" id="mapObjects">

    <!-- Botón para guardar -->
    <button type="submit" style="margin-top: 20px; padding: 7px 20px; background-color: #033e59; color: white; border: none; border-radius: 5px;" id="submit-button">
        Guardar
    </button>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('mapForm');
    
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        try {
            // Recolectar objetos del mapa
            const elements = document.querySelectorAll('.visualizer .rect');
            const mapObjects = {
                tables: [],
                chairs: [],
                scenarios: [],
                clues: []
            };

            elements.forEach(element => {
                const label = element.innerText.trim();
                const x = Math.round(parseFloat(element.style.left) / (100 / 21));
                const y = Math.round(parseFloat(element.style.top) / (100 / 21));
                const width = Math.round(parseFloat(element.style.width) / (100 / 21));
                const height = Math.round(parseFloat(element.style.height) / (100 / 21));
                
                // Determinar el tipo basado en el prefijo del label
                let type = 'unknown';
                if (label.startsWith('E')) {
                    type = 'Escenario';
                } else if (label.startsWith('P')) {
                    type = 'Pista';
                } else if (label.startsWith('M')) {
                    type = 'Mesas';
                }
                
                const obj = { x, y, width, height, label, type };
                
                // Clasificar en el array correcto
                if (type === 'Escenario') {
                    mapObjects.scenarios.push(obj);
                } else if (type === 'Pista') {
                    mapObjects.clues.push(obj);
                } else if (type === 'Mesas') {
                    mapObjects.tables.push(obj);
                } else {
                    // Si no coincide con ninguno, asumimos que es una silla
                    mapObjects.chairs.push(obj);
                }
            });
            
            // Validar que hay al menos una mesa
            if (mapObjects.tables.length === 0) {
                throw new Error('Debe haber al menos una mesa en el mapa.');
            }
            
            // Asignar el JSON al campo oculto
            document.getElementById('mapObjects').value = JSON.stringify(mapObjects);
            
            // Mostrar el JSON que se enviará
            console.log('JSON a enviar:', document.getElementById('mapObjects').value);
            
            // Enviar el formulario
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: JSON.stringify(Object.fromEntries(new FormData(form)))
            });
            
            const data = await response.json();
            console.log('Respuesta del servidor:', data);
            
            if (!response.ok) {
                throw new Error(data.message || 'Error en la respuesta del servidor');
            }
            
            if (data.success) {
                alert('Mapa guardado correctamente');
                if (data.redirect) {
                    window.location.href = data.redirect;
                }
            } else {
                throw new Error(data.message || 'Error al guardar el mapa');
            }
            
        } catch (error) {
            console.error('Error:', error);
            alert('Error: ' + error.message);
        }
    });
});
</script>

</section>
</main>
<script>
// Alternar la visibilidad del submenú
document.getElementById('menu-ajustes').addEventListener('click', function () {
    this.classList.toggle('active');
});

// Función para dibujar el rectángulo basado en valores de columnas y filas
function drawRectangle(x, y, width, height, label = '', type = '') {
console.log("type recibido", type);
console.log("valores x,y", x," ",y)
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
    rect.style.color = '#ffffff'; // Texto blanco para mejor contraste
}

// Añadir el texto al rectángulo
rect.innerText = label;

// Añadir el rectángulo a la visualización
document.querySelector('.visualizer').appendChild(rect);
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
<input type="number" id="${type}_X_${i}" name="${type}_X_${i}" max="21" min="1">
<label for="${type}_Y_${i}">Y:</label>
<input type="number" id="${type}_Y_${i}" name="${type}_Y_${i}" max="21" min="1">
<button class="draw-scenario" data-index="${i}" data-type="${type}">Dibujar ${type}</button>
`;
container.appendChild(row);
}

const buttons = container.querySelectorAll('.draw-scenario');
buttons.forEach(button => {
button.addEventListener('click', function(event) {
    console.log("click para dibujar escenario")
    event.preventDefault();
    const index = this.getAttribute('data-index');
    console.log("index", index)
    const x = parseInt(document.getElementById(`${type}_X_${index}`).value);
    const y = parseInt(document.getElementById(`${type}_Y_${index}`).value);

    if (x > 20 || y > 20) {
        alert("Los valores de X y Y no deben ser mayores a 20.");
        return;
    }

    if (x > 0 && y > 0) {
        const label = `${type.charAt(0)}${parseInt(index) + 1}`; // Concatena la letra en minúscula y el número sin ceros adicionales

        drawRectangle(x, y, 1, 1, label, type);
    } else {
        alert(`Por favor, introduce valores válidos para las coordenadas del ${type} ${index + 1}.`);
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

// Selecciona el botón por su ID y agrega el event listener
document.getElementById('save').addEventListener('click', function(event) {
event.preventDefault(); // Evita el envío del formulario, si aplica
saveConfiguration(); // Llama a la función para guardar la configuración
console.log("Configuración guardada"); // Mensaje opcional para confirmar
});

function saveConfiguration() {
// Obtener todos los elementos renderizados en el contenedor `.visualizer`
const elements = document.querySelectorAll('.visualizer .rect');
const config = [];

elements.forEach(element => {
const itemConfig = {
    x: parseFloat(element.style.left) / (100 / 21) + 1, // Cambiado a 21
    y: parseFloat(element.style.top) / (100 / 21) + 1, // Cambiado a 21
    width: parseFloat(element.style.width) / (100 / 21), // Cambiado a 21
    height: parseFloat(element.style.height) / (100 / 21), // Cambiado a 21
    label: element.innerText,
    type: element.classList.contains('circle') ? 'Mesas' : 'Other', // Determina el tipo basado en el estilo
    styles: {
        borderRadius: element.style.borderRadius,
        textAlign: element.style.textAlign,
        zIndex: element.style.zIndex,
        backgroundColor: element.style.backgroundColor
    }
};
config.push(itemConfig);
});

// Guardar configuración en localStorage (o enviarla a un servidor si es necesario)
localStorage.setItem('visualizerConfig', JSON.stringify(config));
//window.location.href = "adminEventos.php";
}

document.getElementById('formAgregarRestaurante').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar envío tradicional del formulario

    // Recopilar datos del formulario
    const formData = new FormData(this);

    // Enviar los datos mediante fetch
    fetch(this.action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Mostrar el mensaje de éxito
        const messageContainer = document.getElementById('messageContainer');
        messageContainer.style.display = 'block';
        messageContainer.textContent = data.message;

        // Reiniciar el formulario si es necesario
        this.reset();
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Hubo un error al procesar la solicitud.');
    });
});

// Función para validaciones adicionales
document.getElementById('submit-button').addEventListener('click', function(event) {
        event.preventDefault();

        const columnas = parseInt(document.getElementById('columnas').value);
        const filas = parseInt(document.getElementById('filas').value);
        const mesasCantidad = parseInt(document.getElementById('mesasCantidad').value);
        const escenarioCantidad = parseInt(document.getElementById('escenarioCantidad').value);
        const pistaCantidad = parseInt(document.getElementById('pistaCantidad').value);

        if (columnas > 0 && filas > 0 && columnas <= 20 && filas <= 20 && 
            mesasCantidad > 0 && escenarioCantidad >= 0 && pistaCantidad >= 0) {
            // Guardar configuración del mapa en un objeto
            const config = {
                columnas: columnas,
                filas: filas,
                mesasCantidad: mesasCantidad,
                escenarioCantidad: escenarioCantidad,
                pistaCantidad: pistaCantidad,
                precioAdulto: document.getElementById('precioAdulto').value,
                precioMenor: document.getElementById('precioMenor').value,
                precioInfantes: document.getElementById('precioInfantes').value
            };

            // Convertir el objeto a JSON y asignarlo al campo oculto
            document.getElementById('config').value = JSON.stringify(config);

            // Enviar el formulario
            document.querySelector('.form_generator').submit();
        } else {
            alert("Por favor, asegúrate de que todos los campos sean correctos.");
        }
    });

    // Función para dibujar el rectángulo
    document.getElementById('draw-rect').addEventListener('click', function(event) {
        event.preventDefault();
        const columnas = parseInt(document.getElementById('columnas').value);
        const filas = parseInt(document.getElementById('filas').value);

        if (columnas > 0 && filas > 0 && columnas <= 21 && filas <= 21) {
            drawRectangle(1, 1, columnas, filas);
        } else {
            alert("Por favor, introduce valores válidos para columnas y filas.");
        }
    });

    // Función para eliminar objeto
    document.getElementById('btn-delete-object').addEventListener('click', function() {
        const x = parseInt(document.getElementById('input-x').value);
        const y = parseInt(document.getElementById('input-y').value);

        if (isNaN(x) || isNaN(y)) {
            alert("Por favor, ingrese coordenadas válidas.");
            return;
        }

        // Lógica para eliminar el objeto en las coordenadas especificadas
        const elements = document.querySelectorAll('.visualizer .rect');
        const gridWidth = 100 / 21;
        const gridHeight = 100 / 21;

        elements.forEach(element => {
            const elemX = parseFloat(element.style.left) / gridWidth;
            const elemY = parseFloat(element.style.top) / gridHeight;
            
            if (Math.round(elemX) === x && Math.round(elemY) === y) {
                element.remove();
                console.log(`Objeto eliminado en coordenadas (${x}, ${y})`);
            }
        });
    });
</script>

<script src="{{ asset('storage/Fotos Hoteles/reservaciones/js/menu_options.js') }}"></script>
<script src="{{ asset('storage/Fotos Hoteles/reservaciones/js/datepicker.js') }}"></script>

<!--   <script src="./assets/Fotos Hoteles/reservaciones/js/peticiones.js"></script> -->

       
    </div>
</div>

</body>
</html>