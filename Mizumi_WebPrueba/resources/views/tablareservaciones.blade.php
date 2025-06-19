<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Palacio Mundo Imperial - Reservaciones</title>
<link rel="stylesheet" href="{{ asset('storage/Fotos Hoteles/reservaciones/css/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('storage/Fotos Hoteles/reservaciones/css/global.css') }}">
<link rel="stylesheet" href="{{ asset('storage/Fotos Hoteles/reservaciones/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('storage/Fotos Hoteles/reservaciones/css/eventos_Master.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>

        /* Estilos específicos para la tabla de reservaciones */
    .reservaciones-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .reservaciones-table th {
        background-color: #033e59;
        color: white;
        padding: 12px;
        text-align: left;
    }
    
    .reservaciones-table td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    
    .reservaciones-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    .reservaciones-table tr:hover {
        background-color: #e6f7ff;
    }
    
    .action-buttons {
        display: flex;
        gap: 10px;
    }
    
    .delete-btn {
        background-color: #d9534f;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    
    .delete-btn:hover {
        background-color: #c9302c;
    }
    
    .status-badge {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
    }
    
    .status-active {
        background-color: #5cb85c;
        color: white;
    }
    
    .status-inactive {
        background-color: #d9534f;
        color: white;
    }
    
    .status-pending {
        background-color: #f0ad4e;
        color: white;
    }
    
    .search-container {
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .search-box {
        padding: 8px;
        width: 300px;
        border-radius: 4px;
        border: 1px solid #ddd;
    }
    
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    
    .pagination a {
        padding: 8px 16px;
        margin: 0 4px;
        border: 1px solid #ddd;
        text-decoration: none;
        color: #033e59;
        border-radius: 4px;
    }
    
    .pagination a.active {
        background-color: #033e59;
        color: white;
    }
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
    table-layout: auto;
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
    width: 10%; /* Ajusta según lo necesario */
}
th:nth-child(6), td:nth-child(6) {
    width: 9%; /* Ajusta según lo necesario */
}
th:nth-child(7), td:nth-child(7) {
    width: 15%; /* Ajusta según lo necesario */
}
th:nth-child(8), td:nth-child(8) {
    width: 15%; /* Ajusta según lo necesario */
}
th:nth-child(9), td:nth-child(9) {
    width: 10%; /* Ajusta según lo necesario */
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
    table-layout: auto; /* ← cambia de fixed a auto */
    background-color: #f1f1f1;
    border: 1px solid #ddd;
    border-radius: 16px;
    overflow-x: auto;
}

.adjusted-table th, .adjusted-table td {
    padding: 14px 16px;
    border: none;
    text-align: left;
    vertical-align: middle;
    white-space: nowrap; /* ← evita que el texto se quiebre en varias líneas */
   
    color: #333;
   
}

/* Permitir que la tabla tenga scroll horizontal si se desborda */
.table-wrapper {
    overflow-x: auto;
    width: 100%;
}

/* ESTILO PARA LOS BOTONES SE PUEDE BORRAR PARA QUE QUEDE EN SU COLOR ORIGINAL*/
    .btn-editar, .btn-eliminar {
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 5px;
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

.modal-editar {
         display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
    }
    
    .modal-content-editar {
          background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
    }
    
    .close-editar {
         color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
    }
      label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
       .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        width: 100%;
    }

    .header-container h2 {
        margin: 0;
        flex-grow: 1; /* Permite que el título ocupe el espacio disponible */
    }

    .search-container {
        margin-left: auto; /* Empuja el buscador completamente a la derecha */
      
    }

    .search-box {
        padding: 15px;
        width: 300px;
        border-radius: 4px;
        border: 1px solid #ddd;
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
                            <li><a class="a-bar" href="{{ url('/maps') }}" style="color:black; text-decoration:none;"> <i class="fas fa-users" style="margin-right:10px"></i>Mapas</a></li>
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
    <div class="info-box">
        <div class="header-container">
            <h2>Reservaciones</h2>
            <div class="search-container">
                <input type="text" id="search-reservaciones" class="search-box" placeholder="Buscar reservaciones...">
            </div>
        </div>
        
        <table class="adjusted-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Comida</th>
                    <th>Horario</th>
                    <th>Mesa</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
 <tbody>
    @forelse($reservaciones as $reservacion)
    <tr data-id="{{ $reservacion->id }}">
        <td>{{ $reservacion->id }}</td>
        <td>{{ \Carbon\Carbon::parse($reservacion->fecha)->format('d/m/Y') }}</td>
        <td class="comida-cell">{{ ucfirst($reservacion->comida) }}</td>
        <td class="horario-cell">{{ $reservacion->horario }}</td>
        <td>{{ $reservacion->mesa }}</td>
        <td>{{ $reservacion->nombre_completo }}</td>
        <td>{{ $reservacion->telefono }}</td>
        <td>{{ ucfirst($reservacion->tipo) }}</td>
        <td>
            <button class="btn-editar" data-id="{{ $reservacion->id }}">
                <i class="fas fa-edit"></i> Editar
            </button>
            <form action="{{ route('reservaciones.destroy', $reservacion->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-eliminar" onclick="return confirm('¿Estás seguro de eliminar esta reservación?')">
                    <i class="fas fa-trash"></i> Eliminar
                </button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="9" class="text-center">No hay reservaciones registradas</td>
    </tr>
    @endforelse
</tbody>
        </table>
    </div>
</div>

<!-- Modal de Edición -->
<div id="modalEditar" class="modal-editar">
    <div class="modal-content-editar">
        <span class="close-editar">&times;</span>
        <h2>Cambio de Hora y Comida</h2>
        <form id="editForm" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="editReservationId" name="id">
            <div class="form-group">
                <label for="editMeal">Tipo de comida:</label>
                <select id="editMeal" name="comida" class="form-control">
                    <option value="desayuno">Desayuno</option>
                    <option value="comida">Comida</option>
                    <option value="cena">Cena</option>
                </select>
            </div>
            <div class="form-group">
                <label for="editSchedule">Horario:</label>
                <select id="editSchedule" name="horario" class="form-control">
                    <option value="">--Selecciona un horario--</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Modal de edición
    const modalEditar = document.getElementById('modalEditar');
    const closeEditar = document.querySelector('.close-editar');
    const editMealSelect = document.getElementById('editMeal');
    const editScheduleSelect = document.getElementById('editSchedule');
    const editForm = document.getElementById('editForm');
    const editReservationId = document.getElementById('editReservationId');
    
    // Función para abrir el modal con los datos actuales
    function openEditModal(event) {
        event.preventDefault();
        event.stopPropagation();
        
        const button = event.currentTarget;
        const reservationId = button.getAttribute('data-id');
        const row = button.closest('tr');
        
        // Obtener datos actuales de la fila
        const currentMeal = row.querySelector('.comida-cell').textContent.toLowerCase();
        const currentSchedule = row.querySelector('.horario-cell').textContent;
        
        // Configurar el modal con los datos actuales
        editReservationId.value = reservationId;
        editMealSelect.value = currentMeal;
        updateTimeSlots(currentMeal);
        editScheduleSelect.value = currentSchedule;
        
        // Mostrar modal
        modalEditar.style.display = 'block';
    }
    
    // Asignar evento a cada botón de editar
    document.querySelectorAll('.btn-editar').forEach(button => {
        button.addEventListener('click', openEditModal);
    });
    
    // Cerrar modal
    closeEditar.addEventListener('click', function() {
        modalEditar.style.display = 'none';
    });
    
    // Cerrar al hacer clic fuera
    window.addEventListener('click', function(event) {
        if (event.target === modalEditar) {
            modalEditar.style.display = 'none';
        }
    });
    
    // Actualizar horarios cuando cambia la comida
    editMealSelect.addEventListener('change', function() {
        updateTimeSlots(this.value);
    });
    
    // Función para actualizar horarios
    function updateTimeSlots(meal) {
        editScheduleSelect.innerHTML = '<option value="">--Selecciona un horario--</option>';
        
        let timeSlots = [];
        if (meal === "desayuno") {
            timeSlots = ["08:00-08:20","08:20-08:40", "09:00-09:20","09:20-09:40","09:40-10:00",
                        "10:00-10:20","10:20-10:40","10:40-11:00","11:00-11:20","11:20-11:40","11:40-12:00"];
        } else if (meal === "comida") {
            timeSlots = ["12:00-12:20","12:20-12:40", "13:00-13:20","13:20-13:40","13:40-14:00",
                        "14:00-14:20","14:20-14:40","14:40-15:00","15:00-15:20","15:20-15:40",
                        "15:40-16:00","16:00-16:20","16:20-16:40","16:40-17:00","17:00-17:20",
                        "17:20-17:40","17:40-18:00"];
        } else if (meal === "cena") {
            timeSlots = ["18:00-18:20","18:20-18:40", "18:40-19:00","19:00-19:20","19:20-19:40",
                        "19:40-20:00","20:00-20:20","20:20-20:40","20:40-21:00","21:00-21:20",
                        "21:20-21:40","21:40-22:00","22:00-22:20","22:20-22:40","22:40-23:00",
                        "23:00-23:20","23:20-23:40","23:40-00:00"];
        }
        
        timeSlots.forEach(time => {
            const option = document.createElement('option');
            option.value = time;
            option.textContent = time;
            editScheduleSelect.appendChild(option);
        });
    }
    
    // Enviar formulario de edición
    editForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const selectedMeal = editMealSelect.value;
        const selectedSchedule = editScheduleSelect.value;
        
        if (!selectedSchedule) {
            alert('Por favor selecciona un horario válido');
            return;
        }
        
        // Enviar datos al servidor
        fetch(editForm.action, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                comida: selectedMeal,
                horario: selectedSchedule
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Actualizar la fila en la tabla
                const row = document.querySelector(`tr[data-id="${editReservationId.value}"]`);
                if (row) {
                    row.querySelector('.comida-cell').textContent = selectedMeal.charAt(0).toUpperCase() + selectedMeal.slice(1);
                    row.querySelector('.horario-cell').textContent = selectedSchedule;
                }
                modalEditar.style.display = 'none';
                alert('Reservación actualizada correctamente');
            } else {
                alert('Error al actualizar: ' + (data.message || 'Error desconocido'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error al actualizar la reservación');
        });
    });
    
    // Configurar la acción del formulario dinámicamente
    document.querySelectorAll('.btn-editar').forEach(button => {
        button.addEventListener('click', function() {
            const reservationId = this.getAttribute('data-id');
            editForm.action = `/reservaciones/${reservationId}`;
        });
    });
});
</script>
</table>
</html>