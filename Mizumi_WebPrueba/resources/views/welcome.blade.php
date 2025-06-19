<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Imperial</title>
    <style>
        body {
            margin: 0;
            font-family: FreightBig Pro;
            position: relative;
            min-height: 100vh;
            overflow: hidden; 
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            height: 100vh; 
        }
        .logo-container {
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }
        .logo-container img {
            width: 100px;
            height: auto;
        }

        .hero {
            
            background-image: url('{{ asset('storage/Fotos Hoteles/Tres-propiedades.jpg') }}');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%; 
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 2px 2px 4px #000;
            position: relative; 
            flex-direction: column; /* Cambiado a columna para apilar los elementos */
        }
        .hero h1 {
            font-size: 3rem;
        }
        
        /* Logo de "Mi Reservación" en el fondo, justo arriba del botón */
        .additional-logo {
            position: absolute;
            bottom: 60px; /* Mueve el logo justo arriba del botón */
            left: 50%;
            transform: translateX(-50%); /* Centrado horizontal */
            width: 100px;
            height: auto;
            z-index: 0; /* Logo en el fondo */
            opacity: 0.7; 
        }

        .cta-button {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            padding: 1rem 2rem;
            background-color: transparent;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 1rem; 
            z-index: 1; /* Asegura que el botón esté encima del logo */
        }
        .cta-button:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="logo-container">
            <img src="https://image-tc.galaxy.tf/wipng-9n2y9u0o6p288danyqjywfple/logo-mi-portal-blanco-8.png?width=300" alt="Logo Mundo Imperial">
        </div>

        <div class="hero">
            <!-- Logo de "Mi Reservación" ahora en el fondo justo encima del botón -->
            <img src="{{ asset('storage/Fotos Hoteles/mireservacion.png') }}" class="additional-logo" alt="Logo Mi Reservación">
            <!-- Botón en primer plano -->
            <a href="{{ url('/restaurantsmundoimperial') }}" class="cta-button">DESLICE PARA EXPLORAR</a>
        </div>
    </div>
</body>
</html>