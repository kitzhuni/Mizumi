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

    /* Estilos para pantallas pequeñas */
    @media (max-width: 768px) {
        .adjusted-table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }

        .adjusted-table th, .adjusted-table td {
            min-width: 150px;
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

    /* ESTILO PARA LOS BOTONES */
    .btn-editar, .btn-eliminar {
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 5px;
    }

    .container {
        display: flex;
        min-height: 100vh;
        gap: 2rem;
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
        margin-top: 1rem;
        margin-bottom: 10px;
    }
    
    .sidebar .menu-item {
        display: flex;
        align-items: center;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 3.8rem;
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
        margin-top: auto;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 102%;
        flex-shrink: 0;
    }

    .main-content {
        margin-left: 250px;
        width: calc(100% - 250px);
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
        justify-content: flex-start;
        height: auto;
        padding: 20px;
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
    }
    
    .table-box {
        display: none;
        flex-grow: 1;
    }

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
    
    th:nth-child(1), td:nth-child(1) {
        width: 5%;
    }
    th:nth-child(2), td:nth-child(2) {
        width: 20%;
    }
    th:nth-child(3), td:nth-child(3) {
        width: 15%;
    }
    th:nth-child(4), td:nth-child(4) {
        width: 15%;
    }
    th:nth-child(5), td:nth-child(5) {
        width: 15%;
    }
    th:nth-child(6), td:nth-child(6) {
        width: 15%;
    }
    th:nth-child(7), td:nth-child(7) {
        width: 15%;
    }

    .guardar-btn {
        background-color: #002f4b;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .guardar-btn:hover {
        background-color: #001f3b;
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
        width: 450px;
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
        justify-content: center;
        align-items: center;
        padding: 10px;
        margin-bottom: 10px;
        border: 2px solid;
        border-radius: 25px;
        font-size: 18px;
        text-align: center;
    }
    
    .restaurants .item.active {
        border-color: #1A3E5E;
        color: #1A3E5E;
    }
    
    .restaurants .item.inactive {
        border-color: #FF4081;
        color: #FF4081;
    }
    
    td.actions {
        justify-content: center;
        align-items: center;
        gap: 3px;
        padding: 1px;
    }

    i.edit, i.delete {
        cursor: pointer;
        font-size: 5px;
    }
    
    .estatus-actual {
        white-space: pre-line;
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
        max-width: 90%;
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
                
                <script>
                    function toggleSubMenu(event) {
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
                            <li><a class="a-bar" href="{{ url('/tablapropiedades') }}" style="color:black; text-decoration:none;"> <i class="fas fa-home" style="margin-right:10px"></i>Propiedades</a></li>
                            <li><a class="a-bar" href="{{ url('/maps') }}" style="color:black; text-decoration:none;"> <i class="fas fa-map" style="margin-right:10px"></i>Mapas</a></li>
                        </ul>
                    </li>
                </li>
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

       <!-- Contenido principal modificado para propiedades -->
<div class="main-content">
    <div style="display: flex; gap: 20px;">
        <!-- Columna izquierda: tabla de propiedades -->
        <div style="flex: 2;">
            <div class="info-box" id="info-box">
                <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 4px;">
                    <h2 style="margin: 0; text-align: center;">Propiedades</h2>
                </div>
                
                <div style="display: flex; justify-content: flex-end; width: 100%; padding: 0;">
                    <button onclick="mostrarFormulario()" style="background-color: #002f4b; color: white; border: none; padding: 7px 20px; border-radius: 5px; cursor: pointer;">
                        Registrar Propiedad
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="adjusted-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Cotejamiento</th>
                                <th>Atributos</th>
                                <th>Nulo</th>
                                <th>Predeterminado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($propiedades as $propiedad)
                                <tr>
                                    <td>{{ $propiedad->id }}</td>
                                    <td>{{ $propiedad->nombre }}</td>
                                    <td>{{ $propiedad->tipo }}</td>
                                    <td>{{ $propiedad->cotejamiento }}</td>
                                    <td>{{ $propiedad->atributos }}</td>
                                    <td>{{ $propiedad->nulo }}</td>
                                    <td>{{ $propiedad->predeterminado }}</td>
                                    <td>
                                        <button onclick="editarPropiedad({{ $propiedad->id }})" class="btn-editar">
                                            <i class="fas fa-edit"></i> 
                                        </button>
                                        <button onclick="eliminarPropiedad({{ $propiedad->id }})" class="btn-eliminar">
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
                <h1 style="text-align: center; color: #000000; font-size: 24px; margin-bottom: 20px;">Registro de Propiedad</h1>
                <form action="{{ route('propiedades.store') }}" method="POST">
                    @csrf 
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre de la propiedad" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

                    <label for="tipo">Tipo</label>
                    <input type="text" id="tipo" name="tipo" placeholder="Tipo de propiedad" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

                    <label for="cotejamiento">Cotejamiento</label>
                    <input type="text" id="cotejamiento" name="cotejamiento" placeholder="Cotejamiento" style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

                    <label for="atributos">Atributos</label>
                    <input type="text" id="atributos" name="atributos" placeholder="Atributos" style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

                    <label for="nulo">Nulo</label>
                    <select id="nulo" name="nulo" style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">
                        <option value="No">No</option>
                        <option value="Sí">Sí</option>
                    </select>

                    <label for="predeterminado">Predeterminado</label>
                    <input type="text" id="predeterminado" name="predeterminado" placeholder="Valor predeterminado" style="width: 100%; padding: 10px; margin-bottom: 20px; border: none; border-bottom: 2px solid #d4a373; background-color: #f5f5f5; color: #a9a9a9; font-size: 14px;">

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

    // Función para editar propiedad
    function editarPropiedad(id) {
        window.location.href = `{{ url('/propiedades/editar') }}/${id}`;
    }

    // Función para eliminar propiedad
    function eliminarPropiedad(id) {
        if (confirm('¿Estás seguro de que deseas eliminar esta propiedad?')) {
            fetch(`/propiedades/eliminar/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Propiedad eliminada correctamente');
                    window.location.reload();
                } else {
                    alert('Hubo un error al eliminar la propiedad');
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