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
    height: 93vh;
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

    <div class="menu-item full_center" id="menu-panorama">
            <i class="fas fa-chart-bar"></i>
            <span>Panorama General</span>
        </div>

        
        <div class="menu-item full_center" id="estatus-restaurantes">
            <i class="fa fa-check-square" aria-hidden="true"></i>
            <span>Restaurantes</span>
        </div>

    <div class="menu-item full_center" id="menu-ajustes">
    <i class="fas fa-cog"></i>
    <span>Ajustes</span>
    <div class="submenu">
        <div class="submenu-item" id="ajustes-usuarios">Administrador de Usuarios</div>    </div>
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
        <input type="text" name="nombre" id="nombre" 
               style="width:176px; padding: 6px; margin-top: 10px; border: 1px solid #ccc; border-radius: 5px;" 
               placeholder="Ingresar nombre" required>

        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion" 
               style="width:170px; padding: 6px; margin-top: 10px; border: 1px solid #ccc; border-radius: 5px;" 
               placeholder="Agregar descripción" required>

               <label for="imagen">Imagen</label>
               <input type="file" name="imagen" id="imagen" accept="image/*"
       style="width:190px; padding: 6px; margin-top: 10px; border: 1px solid #ccc; border-radius: 5px;" 
       required>

    </div>
    <button type="submit" style="margin-top: 20px; padding: 7px 20px; background-color: #033e59; color: white; border: none; border-radius: 5px;">Guardar</button>
</form>

<section class="principal_clase">
<div class="visualizer"></div>
<form class="form_generator" action="{{ route('restaurantes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <!-- Mapa -->
  <h3>Mapa:</h3>
  <div class="row">
    <label for="columnas">Columnas (X):</label>
    <input type="number" id="columnas" name="columnas" max="20" min="1" required />
    
    <label for="filas">Filas (Y):</label>
    <input type="number" id="filas" name="filas" max="20" min="1" required />
  </div>
  <button type="button" id="draw-rect">Dibujar Rectángulo</button> <!-- Botón funcional -->

  <!-- Mesas -->
  <h3>Mesas:</h3>
  <div class="row">
    <label for="mesasCantidad">Cantidad:</label>
    <input type="number" id="mesasCantidad" name="mesasCantidad" min="1" required />
  </div>
  <div id="mesasRows"></div>

  <!-- Sillas por mesa -->
  <h3>Sillas por mesa:</h3>
  <div class="cantidad_sillas_container">
    <label for="sillasxmesa">Cantidad:</label>
    <select id="sillasxmesa" name="sillasxmesa" required>
  @for ($i = 1; $i <= 10; $i++)
    <option value="{{ $i }}">{{ $i }}</option>
  @endfor
</select>
  </div>
  <!-- Botón para guardar -->
  <button type="submit" style="margin-top: 20px; padding: 7px 20px; background-color: #033e59; color: white; border: none; border-radius: 5px;">
        Guardar
    </button>
</form>
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
<input type="number" id="${type}_X_${i}" name="${type}_X_${i}">
<label for="${type}_Y_${i}">Y:</label>
<input type="number" id="${type}_Y_${i}" name="${type}_Y_${i}">
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

    if (x > 0 && y > 0) {
        const label = `${type.charAt(0)}${parseInt(index) + 1}`; // Concatena la letra en minúscula y el número sin ceros adicionales

        drawRectangle(x, y, 1, 1, label, type);
    } else {
        alert(`Por favor, introduce valores válidos para las coordenadas del ${type} ${index + 1}.`);
    }
});
});
}

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
        zIndex: element.style.zIndex
    }
};
config.push(itemConfig);
});

// Guardar configuración en localStorage (o enviarla a un servidor si es necesario)
localStorage.setItem('visualizerConfig', JSON.stringify(config));
//window.location.href = "adminEventos.php";
}
</script>

<script src="{{ asset('storage/Fotos Hoteles/reservaciones/js/menu_options.js') }}"></script>
<script src="{{ asset('storage/Fotos Hoteles/reservaciones/js/datepicker.js') }}"></script>

<!--   <script src="./assets/Fotos Hoteles/reservaciones/js/peticiones.js"></script> -->

       
    </div>
</div>

<script>
    // Función para cargar los datos del usuario desde localStorage
    function loadUserInfo() {
        // Obtener el objeto 'user' del localStorage
        const user = JSON.parse(localStorage.getItem('user'));

        if (user && user.iniciales && user.nombre) {
            document.getElementById('userInitials').textContent = user.iniciales;
            document.getElementById('userName').textContent = user.nombre;
        } else {
            console.error('No se encontraron las propiedades iniciales y nombre en el objeto user.');
        }
    }

    loadUserInfo();
</script>

<script>
    document.getElementById('estatus-restaurantes').addEventListener('click', function () {
        const restauranteId = prompt("Ingrese el ID del restaurante:");

        if (restauranteId) {
            fetch(`/restaurantes/${restauranteId}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('No se pudo obtener los datos del restaurante');
                }
                return response.json();
            })
            .then(data => {
                document.getElementById('nombreRestaurante').value = data.nombre || '';
                document.getElementById('descripcion').value = data.descripcion || '';
                // No podemos asignar directamente un archivo, así que mostramos solo el nombre de la imagen
                if (data.imagen) {
                    alert(`Imagen actual: ${data.imagen}`);
                }
            })
            .catch(error => {
                console.error(error);
                alert('Error al obtener los datos del restaurante.');
            });
        }
    });
</script>
</body>
</html>