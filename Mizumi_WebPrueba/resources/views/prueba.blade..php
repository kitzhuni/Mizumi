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
        /* Estilos existentes */
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
        .container {
            display: flex;
            min-height: 100vh;
            gap: 2rem;
        }
        .sidebar {
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
        .main-content {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 1rem;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }
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
        .info-box p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .table-box {
            display: none;
            flex-grow: 1;
        }
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
        .circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #033e59;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            margin: 10px;
        }
        .circle-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
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
            <h2>MI</h2>
            <h2>Reservación</h2>
            <h3>¡Bienvenido(a) Andrea Salmerón!</h3>
            <span>Mundo Imperial</span>
        </div>
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
        </div>
        <div class="logout" onclick="location.href='{{ url('/iniciosesion') }}'">
            <i class="fas fa-sign-out-alt"></i>
            <span>Cerrar sesión</span>
        </div>
    </div>
    <div class="main-content">
        <div class="info-box" id="info-box">
            <h2>PANORAMA GENERAL</h2>
            <div id="contenedor">
                <div id="principal">
                    <h3>TOTAL DE EVENTOS</h3>
                    <p>9</p>
                </div>
            </div>
            <div class="evento-table">
                <h3>Fiesta Méxicana</h3>
                <table>
                    <tr>
                        <th>Evento</th>
                        <th>Fecha</th>
                        <th>Salón</th>
                    </tr>
                    <tr>
                        <td>Fiesta Méxicana</td>
                        <td>15 de septiembre del 2024</td>
                        <td>Salón Princesa</td>
                    </tr>
                    <tr>
                        <td>Fiesta Méxicana</td>
                        <td>16 de septiembre del 2024</td>
                        <td>Salón Conquistadores</td>
                    </tr>
                    <tr>
                        <td>Fiesta Navideña</td>
                        <td>24 de diciembre del 2024</td>
                        <td>Salón C</td>
                    </tr>
                </table>
            </div>
            <div class="evento-table">
                <h3>Fiesta Navideña</h3>
                <table>
                    <tr>
                        <th>Evento</th>
                        <th>Fecha</th>
                        <th>Salón</th>
                    </tr>
                    <tr>
                        <td>Fiesta Navideña</td>
                        <td>24 de diciembre del 2024</td>
                        <td>Salón Las Fuentes</td>
                    </tr>
                </table>
            </div>
            <div class="evento-table">
                <h3>Propiedades</h3>
                <ul>
                    <li>Palacio</li>
                    <li>Princesa</li>
                    <li>Pierre</li>
                </ul>
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

    function agregarUsuario() {
        window.location.href = "{{ url('/registrousuarios') }}";
    }
</script>
</body>
</html>