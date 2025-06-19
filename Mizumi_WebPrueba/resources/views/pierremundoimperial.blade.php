<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes Pierre Mundo Imperial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Effra Regular', sans-serif; 
            background-color: #f2f2f2;
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
            height: 40px;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 100px;
            height: auto;
        }
        .inicio-button {
        background-color: transparent; 
        color: #e0e0e0; 
        padding: 0.4rem 1rem;
        border: none; 
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        }
        .inicio-button i {
        font-size: 1rem; 
        margin-right: 0.5rem; 
        }
        .inicio-button:hover {
            background-color: #ECFBFC;
        }
        .reservar-button {
            background-color: white;
            color: #033e59;
            padding: 0.4rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            font-size: 0.9rem; 
        }
        .reservar-button:hover {
            background-color: #e0e0e0;
        }
        .fa-bars {
            font-size: 2rem;
            margin-right: 1rem;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            width: 90%;
            margin: 0 auto;
        }
        .title {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        .restaurants {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            margin-top: 2rem;
        }
        .restaurant {
            width: 30%;
            margin-bottom: 2rem;
            text-align: center;
            margin: auto; /* Centra el contenido */
            margin-bottom: 3rem; /* Incrementa el espacio entre los elementos */
        }
        .restaurant img {
            width: 100%; /* Mantener que se ajuste al ancho del contenedor */
            height: 250px; /* Establecer una altura fija */
            object-fit: cover; /* Recorta y escala la imagen para que llene el área definida */
            border-radius: 10px; /* Mantener los bordes redondeados */
        }
        .restaurant-info {
        display: flex;
        flex-direction: column;
        justify-content: space-between; 
        height: 375px; 
        padding: 1rem;
        background-color: #fff;
        border-radius: 10px;
        margin-top: 1rem;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

       .restaurant-info h3 {
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
        }

        .restaurant-info p {
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
        line-height: 1.5;
        overflow: hidden; 
        }

       .button {
        background-color: #033e59;
        color: #fff;
        padding: 0.8rem 1.5rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
        align-self: center; 
        }

       .button:hover {
        background-color: #002a42;
        }

        footer {
        display: flex;
        flex-direction: column;
        padding: 0.5px;
        text-align: center;
        background-color: #323C4B;
        color: white;
        font-family: 'Effra Regular', sans-serif; 
        }

        .footer-links {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%; 
        gap: 10px; 
        border-bottom: 1px solid white;
        } 

        .footer-links div {
        flex-grow: 2; 
        text-align: center; 
        }

        .footer-links a {
        display: block; 
        padding: 10px 0; 
        background-color: #323C4B;
        color: white;
        text-decoration: none;
        font-size: 1rem;
        }

        .footer-links a:hover {
        background-color: #444;
        }

        .section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            justify-content: center; 
            align-items: center; 
            padding: 20px 0;
        }  

        .section:first-child {
            border-bottom: 1px solid white;
        }

        .section:last-child {
            border-top: 1px solid white;
        }

        .left-section, .right-section {
            width: 50%;
        }
        .right-section {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        }
        .links {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .logos {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 10px 0;
        }

        .logo {
            height: 30px;
        }

        .logos a {
        color: #e0e0e0;
        font-size: 1.5rem; 
        transition: color 0.3s ease;
        }
        .logos a:hover {
        color: #033e59; 
        }
        .links a {
            color: white;
            text-decoration: none;
        }
        
    </style>
</head>
<body>
<header class="bg-[#033e59] p-4 flex justify-between items-center">
    <div class="flex items-center">
        <a href="{{ url('/iniciosesion') }}" class="inicio-button">
        <i class="fa fa-user-o" aria-hidden="true"></i>
            <span class="text-white text-lg">Iniciar Sesión</span>
        </a>
    </div>
    <div class="logo" style="position: absolute; left: 50%; transform: translateX(-50%);">
        <img src="https://image-tc.galaxy.tf/wisvg-125hwvcbqkjnp336krgjo43fb/palacio-logo2.svg?width=500" alt="Palacio Mundo Imperial">
        </div>
    <img 
    src="{{ asset('storage/Fotos Hoteles/mireservacion.png') }}" 
    alt="Imagen del Restaurante Mizumi" 
    style="width: 50px; height: auto;"
>
</header>

    <div class="container">
        <h2 class="title">Nuestros Restaurantes</h2>
        <p>El Pierre Mundo Imperial en Acapulco es un complejo turístico de lujo con una variedad de restaurantes de alta gama que ofrecen opciones culinarias para todos los gustos en un entorno lujoso, convirtiendo cada bocado en una experiencia placentera.</p>
        <div class="restaurants">
            <div class="restaurant">

                <img src="{{ asset('storage/Fotos Hoteles/Terraza.png') }}" alt="Terraza">
                <div class="restaurant-info">
                    <h3>La Terreza</h3>
                    <p>La Terraza: Experiencia Gastronómica Frente al Mar.</p>
                    <p><strong>LUN - DOM: 07:00 am - 12:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/terrazamundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>

            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/Bar Pierre.png') }}" alt="Pierre">
                <div class="restaurant-info">
                    <h3>Bar Pierre</h3>
                    <p>Deliciosas Marinas en Bar Pierre: Ceviches,Aguachiles,Más.</p>
                    <p><strong>LUN - DOM: 11:00 am - 12:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/barpierremundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>

            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/Tabachin.png') }}" alt="Tabachin">
                <div class="restaurant-info">
                    <h3>Tabachín</h3>
                    <p>Tabachín:Experiencia Culinaria de Cuatro Diamantes.</p>
                    <p><strong>MIE - LUN: 07:00 am - 10:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/tabachinmundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>


            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/Pool Bar.jpg') }}" alt="Serenity">
                <div class="restaurant-info">
                    <h3>Pierre's Café & Delicatessen</h3>
                    <p>Pierre's Café & Delicatessen:Un Mundo de Declicia Gourmet y Sorpresas Artesanales</p>
                    <p><strong>DOM - MIE: 08:00 am - 08:00 pm</strong></p>
                    <p><strong>JUE - SAB: 08:00 am - 10:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/pierresmundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>

            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/Pool Bar.jpg') }}" alt="Serenity">
                <div class="restaurant-info">
                    <h3>In Room Dining</h3>
                    <p>Sumérjase en una experiencia de relajación absoluta mientras saborea un cóctel hecho a su medida. Disfrute de nuestro exclusivo bar situado en una piscina, donde podrá deleitar deliciosas bebidas en un ambiente familiar y excelente música.</p>
                    <p><strong>LUN - DOM: 10:00 am - 08:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/roomdiningmundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>

            
        </div>
    </div>
 </body>
   
   
    <footer>
        <div class="footer-links">
            <div>
                <a href="https://www.mundoimperial.com/contacto">CONTACTO</a>
            </div>
            <div>
                <a href="https://www.mundoimperial.com/politica-de-privacidad">POLÍTICA DE PRIVACIDAD</a>
            </div>
            <div>
                <a href="https://www.mundoimperial.com/accesibilidad">ACCESIBILIDAD</a>
            </div>
            <div>
                <a href="https://www.mundoimperial.com/preguntas-frecuentes">PREGUNTAS FRECUENTES</a>
            </div>
        </div>
        <div class="section">
            <div>
                <h1>MUNDO IMPERIAL</h1>
                <p>E: reservaciones@mundoimperial.com</p>
                <p>T: MEX 800 090 9900</p>
                <div class="logos">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="logos">
                    <img class="logo" src="https://image-tc.galaxy.tf/wipng-dcgp7on5parykh3fxulgump0z/triapviso.png" alt="Tripadvisor Travellers' Choice Award">
                    <img class="logo" src="https://image-tc.galaxy.tf/wipng-ef2f8f3do0tgvatbi6jejktha/esr.png" alt="ESR Socialmente Responsable">
                    <img class="logo" src="https://image-tc.galaxy.tf/wipng-70x6accac3uticyxfhwbutx1m/recurso-2-8.png" alt="Queer Destinations Committed Identity">
                </div>
            </div>
        </div>
        <div class="section">
            <div class="left-section">
                <p>© 2024 - Mundo Imperial</p>
            </div>
            <div class="right-section">
                <img class="logo" src="https://image-tc.galaxy.tf/wipng-9n2y9u0o6p288danyqjywfple/logo-mi-portal-blanco-8.png?width=300" alt="Mundo Imperial Logo">
                <div class="links">
                    <a href="#">Princess</a>
                    <a href="#">Pierre</a>
                    <a href="#">Palacio</a>
                </div>
            </div>
        </div>
    </footer>
   
   
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        const restaurants = document.querySelectorAll('.restaurant');

        restaurants.forEach(restaurant => {
            const status = restaurant.getAttribute('data-status');
            const statusMessage = restaurant.querySelector('.status-message');

            if (status === 'inactive') {
                restaurant.style.display = 'none'; // Ocultar si está inactivo
            } else if (status === 'reserved') {
                statusMessage.textContent = 'Reservado por grupo XYZ'; // Mensaje de reserva
            }
        });
    });
</script>
</html>