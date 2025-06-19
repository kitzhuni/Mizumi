<<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
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
            height: 80px;
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
    gap: 25rem; /* Agrega espacio horizontal entre elementos */
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
    padding: 5px;

}

.submenu-item {
   
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

/* ----- */

        .info-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 70%;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            text-align: center;
            color: #a0a0a0;
        }
        .info-box h2 {
            color: #1a1a1a;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .table-box {
            display: none;
            flex-grow: 1;
        }
        
       
        .evento-table {
            width: 100%;
            margin-top: 20px;
        }
        .evento-table th, .evento-table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .evento-table th {
            background-color: #033e59;
            color: #fff;
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
        <h3>¡Bienvenido(a)</h3>
        <span>Mundo imperial</span>
        </div>
           
            <!-- Menú de navegación con IDs -->
        <div class="menu-item full_center" id="menu-panorama">
            <i class="fas fa-chart-bar"></i>
            <span>Panorama General</span>
            
        </div>

        <script>
        function toggleSubMenu(event) {
            // Encuentra el submenú dentro del <li> clickeado
            var submenu = event.currentTarget.querySelector(".submenu");
            if (submenu) {
                submenu.style.display = (submenu.style.display === "none" || submenu.style.display === "") ? "block" : "none";
            }
        }
</script>



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




        
        <div class="menu-item full_center" onclick="location.href='{{ url('/tablarestaurantes') }}'">
            
            <span></span>
        </div>

        

        <div class="menu-item full_center" onclick="location.href='{{ url('/tablausuarios') }}'">
            
            <span></span>
       
</div>

        <div class="menu-item full_center" id="menu-ajustes">
   
    <span></span>

    <div class="submenu">

    <div class="menu-item full_center active" id="estatus-restaurantes">
            
            <span></span>
        </div>



        
       
    </div>
</div>


        <div class="logout" onclick="location.href='{{ url('/iniciosesion') }}'">
        <i class="fas fa-sign-out-alt"></i>
        <span>Cerrar sesión</span>
        </div>

        <div>
        <img class="centered-image" alt="Mundo Imperial logo with text 'Entertainment &amp; Hospitality'" height="120" src="https://image-tc.galaxy.tf/wisvg-4z6c6butkkmcww6nrjwx56n1m/recurso-5.svg?width=300" width="250"/>
        </div>
        
        <div class="end_footer full_center">
            
        </div>
        </div>
    
<div class="container">
    
    <h1 class="my-4">Mapas Guardado</h1>
    
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="mapsTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Mapa</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($maps as $map)
                        <tr>
                            <td>{{ $map->id }}</td>
                            <td>{{ $map->name }}</td>
                            <td>{{ $map->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <a href="{{ route('maps.show', $map->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@section('styles')
<style>
    .table th, .table td {
        vertical-align: middle;
    }
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
    }
</style>
@endsection

@section('scripts')
<!-- Opcional: Agrega DataTables para mejor funcionalidad -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#mapsTable').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-MX.json'
            }
        });
    });
</script>
@endsection