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
    background-color: #f4f4f4;
    border: 1px solid #ddd;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
}
        .main-content h1 {
            color: #1a1a1a;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .main-content .info-box {
           /* display: flex;                 Quitar el centralizado del contenido*/    
           /* flex-direction: column;        Quitar el centralizado del contenido*/
            align-items: center;
            justify-content: center;
            height: 70%;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            text-align: center;
            color: #a0a0a0;
        }
        .main-content .info-box i {
            font-size: 50px;
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
        /* display: flex;
        flex-direction: column;   Quitar el centralizado del contenido*/
        align-items: center;
        justify-content: center;
        height: 95%;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        text-align: center;
        color: #a0a0a0;
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
}

th, td {
    padding: 10px;
    border: 1px solid #ccc;
    text-align: left;
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
td.actions {
    
    justify-content: center; /* Centra horizontalmente */
    align-items: center; /* Centra verticalmente */
    gap: 10px; /* Espaciado entre íconos */
}
i.edit, i.delete {
    cursor: pointer; /* Indica que son clickeables */
    font-size: 17px;
}


#contenedor {
    
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  margin-top:3%;
  align-items:left;

}
#principal {
  width: 50%;
}
#sidebar {
  width: 50%;
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
       

        <h2>MI </h2>
        <h2>  Reservación</h2>
        <h3>¡Bienvenido(a) {{ $user->name }}!</h3>
        <span>Mundo imperial</span>
        </div>
           
            <!-- Menú de navegación con IDs -->
        <div class="menu-item full_center" id="menu-panorama">
            <i class="fas fa-chart-bar"></i>
            <span>Panorama General</span>
        </div>

        
        <div class="menu-item full_center" onclick="location.href='{{ url('/tablarestaurantes') }}'">
            <i class="fa fa-check-square" aria-hidden="true"></i>
            <span>Restaurantes</span>
        </div>

        <div class="menu-item full_center" id="menu-ajustes">
    <i class="fas fa-cog"></i>
    <span>Ajustes</span>
    <div class="submenu">
        <!-- Mostrar solo si el usuario tiene permisos de 'master' -->
        @if ($user->permisos === 'master')
            <div class="submenu-item" id="ajustes-usuarios">Administrador de Usuarios</div>
        @endif
    </div>
</div>

        <div class="logout" onclick="location.href='{{ url('/iniciosesion') }}'">
        <i class="fas fa-sign-out-alt"></i>
        <span>Cerrar sesión</span>
        </div>
        <div class="end_footer full_center">
            
        </div>
        </div>

       <div class="main-content">
        
        
       <!-- Contenido de las cajas -->
        <div class="info-box" id="info-box">

        <!-- contenido del reservaciones totales y filtro por propiedades -->
        <div id="contenedor" >
            <!-- Reservaciones total -->
            <div id="principal" >
                <h2>Total Reservaciones</h2>
                <p>54</p>
            </div>
            <!--filtros por propiedades-->
            <div id="sidebar">
                <label for="propiedades">Propiedades:</label>
                <select id="propiedades" name="propiedades" required>
                    <option value="" disabled selected>Seleccione la propiedad</option>
                    <option value="administrador">Palacio Mundo Imperial</option>
                    <option value="master">Princess Mundo Imperial</option>
                    <option value="master">Prierre Mundo Imperial</option>
                </select>
            </div>
        </div>
      
            
            

        <div class="table-box" id="table-box">
            <!-- Contenido dinámico aquí -->
           


        </div>
        
    </div>
     <!-- Restaurante del hotel seleccionado -->
       <div>
                <!-- Contenido de las cajas -->
                <div class="info-box" id="info-box">
                    <div id="contenedorr" style=" display: flex; gap: 20px; align-items: center;" >
                        <!-- Columna izquierda: Total reservaciones -->
                        <div id="principal" style="flex: 1;">
                            <h2 style="text-align: center;">Total Reservaciones</h2>
                            <p style="text-align: center; font-size: 24px;">54</p>
                        </div>

                        <!-- Columna derecha: Filtros -->
                        <div id="detalles" style="flex: 1;">
                            


                            <div id="contenedorr" style=" display: flex; gap: 20px; align-items: center;">
                                <!-- Columna izquierda: Total reservaciones -->
                                <div id="principal" style="flex: 1;">
                                <h2 style="text-align: center;">Mesas Reservadas</h2>
                                <p style="text-align: center; font-size: 24px;">10</p>
                                </div>

                                <!-- Columna derecha: Filtros -->
                                <div id="sidebar" style="flex: 1;">
                                <h2 style="text-align: center;">Mesas Disponibles</h2>
                                <p style="text-align: center; font-size: 24px;">5</p>
                            </div>
                    </div>


                        </div>
                    </div>
                </div>

               <!-- Contenido de las cajas -->
               <div class="info-box" id="info-box">
                    <div id="contenedorr" style=" display: flex; gap: 20px; align-items: center;" >
                        <!-- Columna izquierda: Total reservaciones -->
                        <div id="principal" style="flex: 1;">
                            <h2 style="text-align: center;">Total Reservaciones</h2>
                            <p style="text-align: center; font-size: 24px;">54</p>
                        </div>

                        <!-- Columna derecha: Filtros -->
                        <div id="detalles" style="flex: 1;">
                            


                            <div id="contenedorr" style=" display: flex; gap: 20px; align-items: center;">
                                <!-- Columna izquierda: Total reservaciones -->
                                <div id="principal" style="flex: 1;">
                                <h2 style="text-align: center;">Mesas Reservadas</h2>
                                <p style="text-align: center; font-size: 24px;">10</p>
                                </div>

                                <!-- Columna derecha: Filtros -->
                                <div id="sidebar" style="flex: 1;">
                                <h2 style="text-align: center;">Mesas Disponibles</h2>
                                <p style="text-align: center; font-size: 24px;">5</p>
                            </div>
                    </div>


                        </div>
                    </div>
                </div>

                <!-- Contenido de las cajas -->
                <div class="info-box" id="info-box">
                    <div id="contenedorr" style=" display: flex; gap: 20px; align-items: center;" >
                        <!-- Columna izquierda: Total reservaciones -->
                        <div id="principal" style="flex: 1;">
                            <h2 style="text-align: center;">Total Reservaciones</h2>
                            <p style="text-align: center; font-size: 24px;">54</p>
                        </div>

                        <!-- Columna derecha: Filtros -->
                        <div id="detalles" style="flex: 1;">
                            


                            <div id="contenedorr" style=" display: flex; gap: 20px; align-items: center;">
                                <!-- Columna izquierda: Total reservaciones -->
                                <div id="principal" style="flex: 1;">
                                <h2 style="text-align: center;">Mesas Reservadas</h2>
                                <p style="text-align: center; font-size: 24px;">10</p>
                                </div>

                                <!-- Columna derecha: Filtros -->
                                <div id="sidebar" style="flex: 1;">
                                <h2 style="text-align: center;">Mesas Disponibles</h2>
                                <p style="text-align: center; font-size: 24px;">5</p>
                            </div>
                    </div>


                        </div>
                    </div>
                </div>
    <!-- fin -->
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

// Escuchar clic en cada elemento del menú
document.getElementById('menu-panorama').addEventListener('click', function() {
    mostrarContenido('<h2>Panorama General</h2>');
});

    // Alternar la visibilidad del submenú
    document.getElementById('menu-ajustes').addEventListener('click', function () {
    this.classList.toggle('active');
});

// Ejemplo de acciones para los submenús
document.getElementById('ajustes-usuarios').addEventListener('click', function () {
    // Llamada AJAX para obtener los usuarios
    fetch('{{ url('/web/usuarios') }}')
    .then(response => response.json())
    .then(data => {
        let rows = '';
        data.forEach(usuario => {
            rows += `
                <tr>
                    <td>${usuario.id}</td>
                    <td>${usuario.name}</td>
                    <td>${usuario.email}</td>
                    <td>${usuario.puesto || 'Sin puesto'}</td>
                    <td class="actions">
                        <i class="fas fa-edit edit" title="Editar"></i>
                        <i class="fas fa-trash delete" title="Eliminar"></i>
                    </td>
                </tr>
            `;
        });


            // Renderizar la tabla completa
            const tablaUsuariosHTML = `
            <h2>Usuarios</h2>
            <div style="display: flex; justify-content: flex-end; width: 100%; padding: 0;">
                <button onclick="agregarUsuario()" style="background-color: #002f4b; color: white; border: none; padding: 7px 20px; border-radius: 5px; cursor: pointer;">Agregar Usuario</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Puesto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    ${rows}
                </tbody>
            </table>
        `;
        mostrarContenido(tablaUsuariosHTML);
    })
    .catch(error => console.error('Error al obtener los usuarios:', error));
});

function actualizarEstatus(button) {
    // Encontrar el contenedor "Horarios" más cercano al botón presionado
    const horariosDiv = button.closest('td').querySelector('.Horarios');

    // Alternar la visibilidad del div
    if (horariosDiv.style.display === 'block') {
        horariosDiv.style.display = 'none';
    } else {
        horariosDiv.style.display = 'block';
    }
}


function cerrarFormulario() {
    document.getElementById('table-box').style.display = 'none';
}

function cerrarFormulario() {
    document.getElementById('table-box').style.display = 'none';
}

// Función para agregar restaurante
function agregarUsuario() {
    window.location.href = "{{ url('/registrousuarios') }}";
}
</script>
</body>
</html>