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
    
    <!-- Agregar librerías para PDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>

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
       .sidebar{
    width: 245px;
    padding-top: 2rem;
    background-color: var(--bg-alternative);
    font-family: "Poppins", sans-serif;
    height: 96vh;
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
      display: nosne;
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
    margin-bottom: 10px;

}
            .sidebar .menu-item {
            display: flex;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 3.8rem; /* Espacio sobre el texto */
            
        }
        .sidebar .menu-item i {
            margin-right: 10px;
        }
        .sidebar .menu-item.active {
            background-color: #f0f0f0;
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

.main-content {
    margin-left: 250px; /* Aumenta la distancia desde la barra lateral */
    width: calc(100% - 250px); /* Asegúrate de que ocupe el espacio disponible */
    padding: 1rem;
    background-color: #ffffff;
    border: 1px solid #ddd;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
}
        .main-content h1 {
            color: #1a1a1a;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .main-content .info-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;  /* Adjusts alignment to top if necessary */
            height: auto;  /* Adjust the height as needed */
        /* border: 2px solid #e0e0e0; */ /* quitamos el borde*/
            border-radius: 10px;
            text-align: center;
            /* color: #a0a0a0; */ /* quitamos el color*/
            padding: 20px; /* Add padding inside the container */
        }
        .main-content .info-box i {
            font-size: 25px;
            margin-bottom: 20px;
        }
        .main-content .info-box p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .main-content .info-box .back-button {
            background-color: #002b49;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }
        .info-box, .table-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 95%;
            /*border: 2px solid #e0e0e0;*/
            /* border-radius: 10px;*/
            text-align: center;
            /* color: #a0a0a0;*/
        }
        /* Ocultar tabla por defecto */
        .table-box {
        display: none;
        flex-grow: 1; /* Permite que la caja se expanda según el contenido */
        }

/* Estilo general de tablas */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    table-layout: fixed;
}

th, td {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
    word-wrap: break-word;
}
/* Definir anchos específicos para cada columna si es necesario */
th:nth-child(1), td:nth-child(1) {
    width: 5%; /* Ajusta según lo necesario */
}
th:nth-child(2), td:nth-child(2) {
    width: 20%; /* Ajusta según lo necesario */
}
th:nth-child(3), td:nth-child(3) {
    width: 33%; /* Ajusta según lo necesario */
}
th:nth-child(4), td:nth-child(4) {
    width: 20%; /* Ajusta según lo necesario */
}
th:nth-child(5), td:nth-child(5) {
    width: 20%; /* Ajusta según lo necesario */
}
th:nth-child(6), td:nth-child(6) {
    width: 9%; /* Ajusta según lo necesario */
}

    .table-box button .guardar-btn {
    position: absolute; /* Fija el botón a la parte superior derecha */
    top: 10px; /* Espacio desde la parte superior */
    right: 10px; /* Espacio desde el lado derecho */
    background-color: #002f4b;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    z-index: 10; /* Asegura que el botón esté por encima de otros elementos */
}

   .table-box.sin-margen {
    margin: 0;
}
.guardar-btn {
    background-color: #002f4b; /* Mismo color que otros botones */
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.guardar-btn:hover {
    background-color: #001f3b; /* Color de fondo al pasar el cursor, igual al de otros botones */
}

/* Estilo para el botón de imprimir PDF */
.imprimir-btn {
    background-color: #002f4b;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
}

.imprimir-btn:hover {
    background-color: #45a049;
}
    select {
        width: 100%;
        padding: 5px;
    }

    .status {
            display: flex;
            gap: 10px;
        }
        .status button {
            background-color: #002f4b;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .status button:hover {
            background-color: #001f3b;
        }
        .td-estrecho {
    width: 450px; /* Ajusta el valor según el ancho deseado */
}
.restaurants {
    display: flex;
    justify-content: space-between;
}
.restaurants .column {
    width: 45%;
}
        .restaurants .column h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .restaurants .item {
    display: flex;
    justify-content: center; /* Centrar el contenido horizontalmente */
    align-items: center; /* Centrar el contenido verticalmente */
    padding: 10px;
    margin-bottom: 10px;
    border: 2px solid;
    border-radius: 25px;
    font-size: 18px;
    text-align: center; /* Centrar el texto dentro del div */
}
        .restaurants .item.active {
            border-color: #1A3E5E;
            color: #1A3E5E;
        }
        .restaurants .item.inactive {
            border-color: #FF4081;
            color: #FF4081;
        }
        /* Position the 'Guardar' button to the top right corner of the <h2> */

        .centered-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

td.actions {
    justify-content: center; /* Centra horizontalmente */
    align-items: center; /* Centra verticalmente */
    gap: 3px; /* Reducir el espacio entre los íconos */
    padding: 1px; /* Reducir el padding de la celda */
}

i.edit, i.delete {
    cursor: pointer; /* Indica que son clickeables */
    font-size: 5px; /* Reducir el tamaño de los íconos */
}
.estatus-actual {
    white-space: pre-line; /* Esto permite que los saltos de línea se respeten en el texto */
}

 /* Estilos de la tabla */
 .adjusted-table {
        width: 100%;
        border-collapse: separate;
        margin: 20px 0;
    background-color: #f1f1f1;
    border: 1px solid #ddd;
    border-radius: 16px;
    overflow-x: auto;
    


    }

    .adjusted-table th, .adjusted-table td {
        padding: 10px;
        border: none;
        text-align: left;
    }
.menu-btn-ajustes {
  display: flex;
  align-items: center;
  padding: 12px 16px;
  margin: 12px auto;
  text-decoration: none;
  color: #D68B00;
  font-weight: 600;
  border-radius: 9999px;
  background: #e0e0e0;
  transition: background 0.3s;
  max-width: 90%;
}
.menu-btn-panorama {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding: 12px 16px;
  margin: 12px auto;
  text-decoration: none;
  color: #003A9C;
  font-weight: 600;
  border-radius: 9999px;
  background: #e0e0e0;
  transition: background 0.3s;
  max-width: 90%;        /* Responsivo */
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
    <div class="container">
         <div class="sidebar">
    
            <div class="header_sidebar full_center">
                <h1 style="color:#D68B00;">MI </h1>
                <h2>  Reservación</h2>
                <h3>¡Bienvenido(a) {{ auth()->user()->name }}!</h3>
                <span>Mundo imperial</span>
            </div>

                    <!-- Menú de navegación con IDs -->
            <div>    
                <a href="{{ route('panoramageneral') }}"
                    class="menu-btn-panorama"
                    onmouseover="this.style.background='#E4E8F0'"
                    onmouseout="this.style.background='#e0e0e0'">
                    <i class="fas fa-chart-bar"></i>
                    <span> Panorama General</span>
                </a>
                <!--Scrip para desplazar submenu -->
                <script>
                    function toggleSubMenu(event) {
                        // Encuentra el submenú dentro del <li> clickeado
                        var submenu = event.currentTarget.querySelector(".submenu");
                        if (submenu) {
                            submenu.style.display = (submenu.style.display === "none" || submenu.style.display === "") ? "block" : "none";
                        }
                    }
                </script>

                        <!--SubMenu de opciones de navegación -->        
                <ul>
                    <li onclick="toggleSubMenu(event)" style="cursor: pointer;">
                        <a class="a-bar" href="#" style="color:black; text-decoration:none;">
                            
                            <a href="#"
                                class="menu-btn-ajustes"
                                onmouseover="this.style.background='#faefd9'"
                                onmouseout="this.style.background='#e0e0e0'">
                                <i class="fas fa-cog" style="margin-right:10px"></i>
                                <span>Ajustes</span>
                            </a>
                            
                            
                        <ul class="submenu" style="display: none; list-style: none; padding-left: 20px;">
                            <li><a class="a-bar" href="{{ url('/tablarestaurantes') }}" style="color:black; text-decoration:none;"> <i class="fa fa-check-square" style="margin-right:10px"></i> Restaurantes</a></li>
                            <li><a class="a-bar" href="{{ url('/reservaciones') }}" style="color:black; text-decoration:none;"><i class="fa fa-check-square" style="margin-right:10px"></i> Reservaciones</a></li>
                            <li><a class="a-bar" href="{{ url('/tablausuarios') }}" style="color:black; text-decoration:none;"> <i class="fas fa-users" style="margin-right:10px"></i>Usuarios</a></li>
                          
                        </ul>
                    </li>
                </li>
   
            </div>
                        <!-- Fin Menú de navegación con IDs -->

            <div class="logout" onclick="location.href='{{ url('/iniciosesion') }}'">
                <i class="fas fa-sign-out-alt"></i>
                <span>Cerrar sesión</span>
            </div>
                        <!-- logo final -->
            <div>
                <img class="centered-image" alt="Mundo Imperial logo with text 'Entertainment &amp; Hospitality'" height="120" src="https://image-tc.galaxy.tf/wisvg-4z6c6butkkmcww6nrjwx56n1m/recurso-5.svg?width=300" width="250"/>
            </div>
            
            <div class="end_footer full_center">
                
            </div>
        </div>

       <div class="main-content">
        

        <!-- Contenido de las cajas -->
        <div class="info-box" id="info-box">
    <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 4px;">
        <h2 style="margin: 0; text-align: center;">Restaurantes</h2>
    </div>
    <div style="display: flex; justify-content: flex-end; width: 100%; padding: 0; gap: 10px;">
    <button onclick="agregarRestaurante()" style="background-color: #002f4b; color: white; border: none; padding: 7px 20px; border-radius: 5px; cursor: pointer;">Agregar Restaurante</button>
    <button id="imprimirBtn" onclick="generarPDF()" class="imprimir-btn" style="display: none;">Imprimir PDF</button>
</div>


<table class="adjusted-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre del Restaurante</th>
            <th>Estatus</th>
            <th>Montaje</th>
            <th>Estatus Actual</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!-- Aquí se cargarán dinámicamente las filas -->
    </tbody>
</table>

<button onclick="guardarEstatus()" class="guardar-btn">Guardar</button>
        </div>
        </div>

        <div class="table-box" id="table-box">
            <!-- Contenido dinámico aquí -->
        </div>
    </div>
</div>

<script>
    // Mostrar contenido correspondiente en table-box
    function mostrarContenido(contenidoHTML) {
    document.getElementById('info-box').style.display = 'none';
    const tableBox = document.getElementById('table-box');
    tableBox.innerHTML = contenidoHTML;
    tableBox.style.display = 'block';

    // Eliminar el margen de la .table-box
    tableBox.classList.add('sin-margen');
}

let estatusPrevio = ''; // Variable para almacenar el estatus previo

function actualizarEstatus(btn) {
  const estatus = btn.innerText; // Obtener el texto del botón clickeado
  const row = btn.closest('tr');
  const estatusActual = row.querySelector('.estatus-actual'); // Contenedor del estatus actual
  const statusDiv = btn.closest('.status'); // Div que contiene los botones de estatus
  const horariosDiv = row.querySelector('.Horarios'); // Div que contiene los horarios
  
  // Buscar o crear el contenedor del input de grupo
  let grupoContainer = statusDiv.querySelector('.grupo-container');
  let grupoInput = grupoContainer ? grupoContainer.querySelector('#grupo') : null;

  // Resetear los checkboxes y ocultar todo si se selecciona el mismo botón
  if (estatus === estatusPrevio) {
    horariosDiv.style.display = 'none';
    if (grupoContainer) grupoContainer.style.display = 'none';
    estatusPrevio = ''; // Resetear el estatus previo
    estatusActual.innerText = `${estatus}`;
    return;
  }

  // Actualizar el estatus previo
  estatusPrevio = estatus;

  // Configurar visibilidad según el estatus seleccionado
  if (estatus === 'Activo') {
    horariosDiv.style.display = 'block'; // Mostrar horarios
    if (grupoContainer) grupoContainer.style.display = 'none'; // Ocultar campo de grupo
    estatusActual.innerText = 'Activo';

    // Agregar evento para actualizar el estatus según los checkboxes seleccionados
    agregarEventoCheckboxes(horariosDiv, estatusActual, estatus);
  } else if (estatus === 'Inactivo') {
    horariosDiv.style.display = 'none'; // Ocultar horarios
    if (grupoContainer) grupoContainer.style.display = 'none'; // Ocultar campo de grupo
    estatusActual.innerText = 'Inactivo';
  } else if (estatus === 'Inactivo por grupo') {
    horariosDiv.style.display = 'none'; // Ocultar horarios
    
    // Crear el contenedor del input si no existe
    if (!grupoContainer) {
      grupoContainer = document.createElement('div');
      grupoContainer.className = 'grupo-container';
      grupoContainer.style.marginTop = '10px';
      
      // Crear el input
      grupoInput = document.createElement('input');
      grupoInput.type = 'text';
      grupoInput.id = 'grupo';
      grupoInput.placeholder = 'Escribe el grupo';
      grupoInput.style.padding = '5px';
      grupoInput.style.width = '100%';
      
      // Agregar evento para actualizar el estatus al escribir
      grupoInput.addEventListener('input', function() {
        const texto = this.value.trim();
        estatusActual.innerText = texto ? `Inactivo por grupo: ${texto}` : 'Inactivo por grupo';
      });
      
      grupoContainer.appendChild(grupoInput);
      statusDiv.appendChild(grupoContainer);
    }
    
    grupoContainer.style.display = 'block'; // Mostrar campo de grupo
    grupoInput.value = ''; // Limpiar el campo
    grupoInput.focus(); // Poner foco en el campo
    estatusActual.innerText = 'Inactivo por grupo';
  }
}

// Función para agregar evento a los checkboxes
function agregarEventoCheckboxes(horariosDiv, estatusActual, estatus) {
  const checkboxes = horariosDiv.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function () {
      if (estatus === 'Activo') {
        estatusActual.innerText = `Activo: ${getHorariosSeleccionados(horariosDiv)}`;
      }
    });
  });
}

// Función para obtener los horarios seleccionados
function getHorariosSeleccionados(horariosDiv) {
  const selectedHorarios = [];
  const checkboxes = horariosDiv.querySelectorAll('input[type="checkbox"]:checked');
  checkboxes.forEach(checkbox => selectedHorarios.push(checkbox.value));
  return selectedHorarios.length > 0 ? selectedHorarios.join(", ") : "Ninguno";
}

function actualizarMontaje(checkbox) {
    // Encuentra el contenedor padre
    const parent = checkbox.closest('.montaje-options');
    
    // Desmarcar todos los demás checkboxes en el grupo
    parent.querySelectorAll('input[type="checkbox"]').forEach(cb => {
        if (cb !== checkbox) {
            cb.checked = false;
        }
    });
}

function cerrarFormulario() {
    document.getElementById('table-box').style.display = 'none';
}

// Función para agregar restaurante
function agregarRestaurante() {
    window.location.href = "{{ url('/añadirrestaurante') }}";
}
// Función para manejar la navegación sin alterar el estilo
function navigateToPage(url) {
    window.location.href = url;
}





function generarPDF() {
    const { jsPDF } = window.jspdf;

    // AUMENTAMOS EL TAMAÑO DE LA HOJA, PERO MANTENEMOS ORIENTACIÓN VERTICAL
    const doc = new jsPDF({
        orientation: 'portrait',
        unit: 'mm',
        format: [210, 500] // A4 de ancho, 500mm de alto (más espacio)
    });

    // --------- CÁLCULO DE SEMANA ACTUAL ---------
    const today = new Date();
    const dayOfWeek = today.getDay();
    const diffToMonday = dayOfWeek === 0 ? -6 : 1 - dayOfWeek;
    const monday = new Date(today);
    monday.setDate(today.getDate() + diffToMonday);

    const sunday = new Date(monday);
    sunday.setDate(monday.getDate() + 6);

    const formatDate = (date) => {
        const d = date.getDate().toString().padStart(2, '0');
        const m = (date.getMonth() + 1).toString().padStart(2, '0');
        const y = date.getFullYear();
        return `${d}/${m}/${y}`;
    };

    const semanaTexto = `Del ${formatDate(monday)} al ${formatDate(sunday)}`;

    // --------- ENCABEZADO SUPERIOR ---------
   // --------- ENCABEZADO SUPERIOR ---------
doc.setFontSize(14);
doc.setFont('helvetica', 'bold');
doc.text("PLAN DE OPERACIONES", doc.internal.pageSize.getWidth() / 2, 12, { align: 'center' });

doc.setFontSize(10);
doc.setFont('helvetica', 'normal');
doc.text(`Semana correspondiente: ${semanaTexto}`, doc.internal.pageSize.getWidth() / 2, 22, { align: 'center' });

// BLOQUE MULTILÍNEA EN ESQUINA SUPERIOR DERECHA - MÁS PEQUEÑO
doc.setFontSize(7);
const fechaEmisionLines = [
  "Edición: 01",
  "Fecha de Emisión:",
  formatDate(today),
  "Página: 1 de 1"
];
const startX = 180;  // Más a la derecha que antes (160 -> 170)
let startY = 10;
const lineSpacingTight = 4; // Espacio más compacto entre las primeras 3 líneas
const lineSpacingLast = 7;  // Espacio mayor antes de la última línea

// Dibuja las primeras 3 líneas con espacio pequeño
for (let i = 0; i < fechaEmisionLines.length - 1; i++) {
  doc.text(fechaEmisionLines[i], startX, startY + i * lineSpacingTight);
}

// Dibuja la última línea con más espacio
doc.text(fechaEmisionLines[3], startX, startY + (fechaEmisionLines.length - 2) * lineSpacingTight + lineSpacingLast);

// Restaurar fontSize si es necesario después
doc.setFontSize(10);

    
 doc.setFontSize(14);
doc.setFont('helvetica', 'bold');
doc.setTextColor(224, 224, 224); // Opcional: azul personalizado

// Escribir verticalmente (rotado 90°), en el lado derecho
doc.text("COPIA CONTROLADA", doc.internal.pageSize.width - 10, 100, {
  angle: 90
});



    // --------- TABLA COMBINADA ---------
    const diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    const tablaUnificadaHeader = ["", "", ...diasSemana];
    const tablaUnificadaBody = [];

    // --------- PARTE 1: DATOS GENERALES ---------
    

    const hoy = new Date();
    const diaSemanaActual = hoy.getDay();
    const fechaActual = hoy.getDate();
    const filaFechas = ['Dia', '', ...Array(7).fill().map((_, i) => {
        const fecha = new Date(hoy);
        fecha.setDate(fechaActual - diaSemanaActual + i);
        return fecha.getDate().toString();
    })];

    tablaUnificadaBody.push(filaFechas);
    tablaUnificadaBody.push(["Ocupación Proyecto:en", "", "", "", "", "", "", "", ""]);
    tablaUnificadaBody.push(["Ocupación", "", "20%", "10%", "8%", "4%", "3%", "15%", "10%"]);
    tablaUnificadaBody.push(["Huespedes", "", "50", "40", "50", "100", "40", "30", "17"]);
    tablaUnificadaBody.push(["Eventos Especiales", "", "", "", "", "BIMBO Y NESTLE", "COCACOLA", "", "ALGO MAS"]);
    tablaUnificadaBody.push(["Pax Grupos", "", "", "", "", "", "", "", ""]);
    tablaUnificadaBody.push(["Total", "", "", "", "", "", "", "", ""]);

    // --------- SEPARADOR ---------
    tablaUnificadaBody.push(["", "", "", "", "", "", "", "", ""]);
    tablaUnificadaBody.push(["RESTAURANTE", "TURNO", ]);

    // --------- PARTE 2: DATOS DE RESTAURANTES ---------
    document.querySelectorAll('.adjusted-table tbody tr').forEach(row => {
        const nombreRestaurante = row.querySelector('td:nth-child(2)')?.textContent.trim() || "Restaurante";
        const cells = row.querySelectorAll('td');
        const estatus = cells[4]?.innerText || '';

        let desayuno = "Cerrado", comida = "Cerrado", cena = "Cerrado";

        if (estatus.includes('Inactivo por grupo:')) {
            const motivo = estatus.split('Inactivo por grupo:')[1].trim();
            desayuno = comida = cena = motivo;
        } else if (estatus.includes('Inactivo')) {
            desayuno = comida = cena = "Cerrado";
        } else if (estatus.includes('Activo')) {
            if (estatus.includes('Desayuno')) {
                const match = estatus.match(/Desayuno\s([\d:apm\s\-]+)/i);
                desayuno = match ? `Desayuno ${match[1]}` : "Desayuno";
            }
            if (estatus.includes('Comida')) {
                const match = estatus.match(/Comida\s([\d:apm\s\-]+)/i);
                comida = match ? `Comida ${match[1]}` : "Comida";
            }
            if (estatus.includes('Cena')) {
                const match = estatus.match(/Cena\s([\d:apm\s\-]+)/i);
                cena = match ? `Cena ${match[1]}` : "Cena";
            }
        }

        tablaUnificadaBody.push([nombreRestaurante, "Desayuno", ...Array(7).fill(desayuno)]);
        tablaUnificadaBody.push(["", "Comida", ...Array(7).fill(comida)]);
        tablaUnificadaBody.push(["", "Cena", ...Array(7).fill(cena)]);
    });

    // --------- GENERAR TABLA ÚNICA ---------
    doc.autoTable({
        head: [tablaUnificadaHeader],
        body: tablaUnificadaBody,
        startY: 32,
        styles: {
            fontSize: 6.5,        // Fuente más pequeña para comprimir
            cellPadding: 1,       // Menos espacio interno
            textColor: [0, 0, 0]
        },
        headStyles: {
            fillColor: [57, 137, 181],
            textColor: 255,
            fontStyle: 'bold'
        },
        alternateRowStyles: {
            fillColor: [240, 240, 240]
        },
        willDrawCell: function (data) {
            const value = typeof data.cell.raw === 'string' ? data.cell.raw.trim().toLowerCase() : '';
            if (value === 'cerrado') {
                doc.setFillColor(57, 137, 181);
                doc.setTextColor(255, 255, 255);
            } else {
                doc.setTextColor(0, 0, 0);
            }
        }
    });

    // --------- PIE DE PÁGINA ---------
    const pageHeight = 500; // Ajustado al nuevo alto de la hoja
    doc.setFontSize(8);
    doc.setTextColor(100);
    doc.text(
        "Propiedad de Palacio Mundo Imperial. Prohibida su reproducción total o parcial sin previa autorización por escrito de Palacio Mundo Imperial.",
        15,
        pageHeight - 10
    );

    doc.save('Plan_Operaciones_' + formatDate(today).replaceAll('/', '-') + '.pdf');
}

function cargarRestaurantes() {
    fetch('{{ route("restaurantes.obtener") }}')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la red');
            }
            return response.json();
        })
        .then(data => {
            const table = document.querySelector('.adjusted-table tbody');
            table.innerHTML = '';
            
            if (data.length === 0) {
                table.innerHTML = '<tr><td colspan="6">No hay restaurantes registrados</td></tr>';
                return;
            }

            data.forEach(restaurante => {
                // Asegúrate que montaje sea un array
                const montaje = restaurante.montaje ? 
                    (Array.isArray(restaurante.montaje) ? restaurante.montaje : [restaurante.montaje]) : 
                    [];
                
                const row = `
                    <tr>
                        <td>${restaurante.id}</td>
                        <td>${restaurante.nombre || 'Sin nombre'}</td>
                        <td class="td-estrecho">
                            <div class="status">
                                <button onclick="actualizarEstatus(this)">Activo</button>
                                <button onclick="actualizarEstatus(this)">Inactivo</button>
                                <button onclick="actualizarEstatus(this)">Inactivo por grupo</button>
                            </div>
                            <div class="Horarios" style="margin-top: 20px; display: none;">
                                <label>Selecciona los Horarios:</label>
                                <div style="margin-top: 10px;">
                                    <input type="checkbox" value="Desayuno 7:00 AM - 12:00 AM">
                                    <label>Desayuno 7:00 AM - 12:00 AM</label>
                                </div>
                                <div style="margin-top: 10px;">
                                    <input type="checkbox" value="Comida 1:00 PM - 5:00 PM">
                                    <label>Comida 1:00 PM - 5:00 PM</label>
                                </div>
                                <div style="margin-top: 10px;">
                                    <input type="checkbox" value="Cena 6:00 PM - 12:00 AM">
                                    <label>Cena 6:00 PM - 12:00 AM</label>
                                </div>
                                 <div style="margin-top: 20px; display: none;">
                                    <label>Inactivo por grupo:</label>
                                    <input type="text" id="grupo" placeholder="Ingresa el grupo" style="margin-top: 10px; padding: 5px;">
                                </div>

                            </div>
                        </td>
                        <td class="montaje-options">
                            <label>
                                <input type="checkbox" value="Bufet" onchange="actualizarMontaje(this)" ${montaje.includes('Bufet') ? 'checked' : ''}> Bufet
                            </label><br>
                            <label>
                                <input type="checkbox" value="A la carta" onchange="actualizarMontaje(this)" ${montaje.includes('A la carta') ? 'checked' : ''}> A la carta
                            </label>
                        </td>
                        <td class="estatus-actual">${restaurante.estatus || 'Sin estatus'}</td>
                        <td class="actions">
                            <i class="fas fa-edit edit" onclick="editarRestaurante(${restaurante.id})"></i>
                            <i class="fas fa-times delete"></i>
                        </td>
                    </tr>`;
                table.innerHTML += row;
            });
            
            // Mostrar botón de imprimir si hay datos
            if (data.length > 0) {
                document.getElementById('imprimirBtn').style.display = 'inline-block';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.querySelector('.adjusted-table tbody').innerHTML = `
                <tr>
                    <td colspan="6">Error al cargar los restaurantes: ${error.message}</td>
                </tr>`;
        });
}

    // Llama a cargarRestaurantes al cargar la página
    document.addEventListener('DOMContentLoaded', () => {
        cargarRestaurantes();
    });


    function guardarEstatus() {
    // Recolecta los datos de los restaurantes seleccionados
    const restaurantes = [];
    const rows = document.querySelectorAll('.adjusted-table tbody tr');

    rows.forEach(row => {
        const id = row.querySelector('td').innerText; // ID del restaurante
        const estatus = row.querySelector('.estatus-actual').innerText; // Estatus actual
        const montaje = [];
        
        // Obtener los montajes seleccionados (checkboxes)
        const montajeOptions = row.querySelectorAll('.montaje-options input[type="checkbox"]:checked');
        montajeOptions.forEach(option => {
            montaje.push(option.value); // Agregar valor de montaje
        });

        restaurantes.push({ id, estatus, montaje });
    });

    // Enviar los datos al backend utilizando AJAX
    fetch('{{ route('restaurantes.actualizarEstatus') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ restaurantes })
    })
    .then(response => response.json())
    .then(data => {
        // Manejo de respuesta si es exitosa
        if (data.success) {
            alert('Estatus y montaje actualizados correctamente');
            // Mostrar botón de imprimir después de guardar
            document.getElementById('imprimirBtn').style.display = 'inline-block';
        } else {
            alert('Hubo un error al actualizar los datos');
        }
    })
    .catch(error => console.error('Error al guardar estatus:', error));
}

function editarRestaurante(id) {
    // Redirige a la página de edición con el ID del restaurante
    window.location.href = `{{ url('/editar') }}/${id}`;
}


</script>
</body>
</html>