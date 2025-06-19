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
    width: 9%; /* Ajusta según lo necesario */
}
th:nth-child(2), td:nth-child(2) {
    width: 9%; /* Ajusta según lo necesario */
}
th:nth-child(3), td:nth-child(3) {
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

.card-reserva {
    width: 100%;
    max-width: 1100px; /* Más ancho en pantallas grandes */
    background-color: white;
    border: 2px solid #003A5D;
    border-radius: 12px;
    padding: 15px 25px;
    margin: 15px auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
    transition: all 0.3s ease;
}

.card-reserva .nombre {
    font-weight: 600;
    font-size: 18px;
    color: #D68B00; /* Azul corporativo */
}

.card-reserva .detalle {
    text-align: right;
    font-size: 14px;
    color: #003A9C; /* Dorado */
}

/* RESPONSIVE para pantallas pequeñas */
@media (max-width: 768px) {
    .card-reserva {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
    }

    .card-reserva .detalle {
        text-align: left;
        margin-top: 10px;
    }
}



 .contenedor-bloque-estatico {
  width: 100%;
  max-width: 1100px;
  margin: 30px auto 30px auto; /* <-- Aumentado margen superior */
  display: flex;
  gap: 2rem;
  justify-content: space-between;
  flex-wrap: wrap;
}


.box-capacidad {
  flex: 1 1 300px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border: 2px solid #d7d7d7;
  padding: 20px 30px;
  border-radius: 10px;
  min-width: 280px;
}

.box-secundario {
  flex: 1 1 300px;
  display: flex;
  justify-content: space-around;
  border: 2px solid #d7d7d7;
  padding: 20px 30px;
  border-radius: 10px;
  min-width: 280px;
}

.sub-box {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 5px;
  text-align: center;
}

.texto {
    font-size: 25px;
    font-weight: 600;
    color: #003A5D;
}

.texto-chico {
  font-weight: 600;
  font-size: 18px;
  color: #003A5D;
}

.circulo1 {
  background-color: #003A5D;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  border-radius: 50%;
}

.circulo2 {
  background-color: #e4e4e4;
  color: #D68B00    ;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  border-radius: 50%;
}

.grande {
  width: 90px;
  height: 90px;
  font-size: 25px;
}

.chico {
  width: 70px;
  height: 70px;
  font-size: 18px;
}

/* Responsivo */
@media (max-width: 768px) {
  .contenedor-bloque-estatico {
    flex-direction: column;
    align-items: center;
  }

  .box-capacidad,
  .box-secundario {
    width: 100%;
    justify-content: center;
  }
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

            <!-- ××× MODIFICADO AQUÍ ××× -->
       <div class="main-content">
  <div class="info-box" id="info-box">
    <h2 class="titulo-resumen">Panorama General</h2>
   

    <div class="contenedor-bloque-estatico">
  <div class="box-capacidad">
    <span class="texto">Capacidad Total</span>
    <div class="circulo1 grande">150</div>
  </div>

  <div class="box-secundario">
    <div class="sub-box">
      <span class="texto-chico">Mesas Reservadas</span>
      <div class="circulo2 chico">90</div>
    </div>
    <div class="sub-box">
      <span class="texto-chico">Otros</span>
      <div class="circulo2 chico">10</div>
    </div>
  </div>
</div>


    @foreach ($resumen as $item)
      <div class="card-reserva">
        <div class="nombre">{{ $item->nombre_restaurante }}</div>
        <div class="detalle">
          {{ $item->fecha }} <br>
          Reservas totales: {{ $item->reservaciones_totales }}
        </div>
      </div>
    @endforeach

  </div>
</div>

        <!-- ××× FIN MODIFICACIÓN ××× -->
            
            
            
            <!-- fin -->
    </div>




</body>
</html>