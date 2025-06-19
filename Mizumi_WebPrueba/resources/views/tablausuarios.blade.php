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

        <style>
    /* Contenedor de la tabla */
    .table-container {
        width: 100%;
        overflow-x: auto; /* Permite el desplazamiento horizontal en pantallas pequeñas */
        
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
    /* fin estilo */

    /* Estilos para pantallas pequeñas */
    @media (max-width: 768px) {
        .adjusted-table {
            display: block;
            overflow-x: auto;
            white-space: nowrap; /* Evita que el texto se divida en varias líneas */
        }

        .adjusted-table th, .adjusted-table td {
            min-width: 150px; /* Ancho mínimo para las celdas */
        }
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


    /* ESTILO PARA LOS BOTONES SE PUEDE BORRAR PARA QUE QUEDE EN SU COLOR ORIGINAL*/
    .btn-editar, .btn-eliminar {
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 5px;
    }

   
/* termina el estilo de los botone  */
       


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

       <!-- Dentro de tu archivo actual, busca el div con class="main-content" -->
<div class="main-content">
    <!-- Cambia el contenedor principal para usar flexbox -->
    <div style="display: flex; gap: 20px;">
        <!-- Columna izquierda: tabla de usuarios (tu código actual) -->
        <div style="flex: 2;">
            <div class="info-box" id="info-box">
                <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 4px;">
                    <h2 style="margin: 0; text-align: center;">Usuarios</h2>
                </div>
                
                <div style="display: flex; justify-content: flex-end; width: 100%; padding: 0;">
                    <button onclick="mostrarFormulario()" style="background-color: #002f4b; color: white; border: none; padding: 7px 20px; border-radius: 5px; cursor: pointer;">
                        Registrar Usuario
                    </button>
                </div>
                <div class="table-responsive">

 
                    <table class="adjusted-table">

                        
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Puesto</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $usuario)
                                <tr>
                                    <td>{{ $usuario->id }}</td>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->puesto }}</td>
                                    <td>
                                        <button onclick="editarUsuario({{ $usuario->id }})" class="btn-editar">
                                            <i class="fas fa-edit"></i> 
                                        </button>
                                        <button onclick="eliminarUsuario({{ $usuario->id }})" class="btn-eliminar">
                                            <i class="fas fa-trash"></i> 
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <!-- Columna derecha: formulario de registro (oculto inicialmente) -->
        <div id="formulario-registro" style="flex: 1; display: none;">
            <div class="container" style="background-color: #efefef; border-radius: 10px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h1 style="text-align: center; color: #000000; font-size: 24px; margin-bottom: 20px;">Registro de usuario</h1>
                <form action="{{ route('registrousuarios.store') }}" method="POST">
                    @csrf 
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="name" placeholder="Ingrese el nombre del Anfitrión" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

                    <label for="correo">Correo</label>
                    <input type="email" id="correo" name="email" placeholder="Ingrese el correo electrónico del Anfitrión" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingrese la contraseña" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme la contraseña" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

                    <label for="puesto">Puesto</label>
                    <input type="text" id="puesto" name="puesto" placeholder="Ingrese el nombre del Departamento" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

                    <label for="permisos">Permisos:</label>
                    <select id="permisos" name="permisos" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px; appearance: none; background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iOCIgdmlld0JveD0iMCAwIDE2IDgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEgMUwxNiA4TTE2IDFMMSA4IiBzdHJva2U9IiM2NjYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+PC9zdmc+') no-repeat right 10px center; background-size: 10px;">
                        <option value="" disabled selected>Seleccione el tipo de usuario</option>
                        <option value="administrador">Administrador</option>
                        <option value="master">Master</option>
                    </select>

                    <button type="submit" style="width: 100%; padding: 10px; background-color: #0d1b2a; color: #ffffff; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Función para mostrar/ocultar el formulario
    function mostrarFormulario() {
        const formulario = document.getElementById('formulario-registro');
        formulario.style.display = formulario.style.display === 'none' ? 'block' : 'none';
    }

    // Función para editar usuario (tu función existente)
    function editarUsuario(id) {
        window.location.href = `{{ url('/usuarios/editar') }}/${id}`;
    }

    // Función para eliminar usuario (tu función existente)
    function eliminarUsuario(id) {
        if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
            fetch(`/usuarios/eliminar/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Usuario eliminado correctamente');
                    window.location.reload();
                } else {
                    alert('Hubo un error al eliminar el usuario');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    }

    // Mostrar mensajes de éxito
    @if(session('success'))
        alert('{{ session('success') }}');
    @endif
</script>