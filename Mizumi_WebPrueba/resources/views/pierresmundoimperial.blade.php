<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierre's Café & Delicatessen</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background: #033e59;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #e0e0e0;
            height: 30px;
        }
        .logo {
            display: flex;
            justify-content: center;
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
        
        .yellow-line {
            height: 5px;
            background-color: #EFBB2B;
            margin: 10px 0;
            width: 50%;
        }

        h2.title {
            font-family: 'Playfair Display', serif;
            text-align: left;;
            font-size: 4em;
            color: #033e59;
            margin-bottom: 0;
        }

        
        .container {
            padding: 20px;
        }

        .restaurant-info {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .restaurant-info h2 {
            margin-top: 0;
        }

        .restaurant-info p {
            margin-bottom: 10px;
        }

        .owl-carousel {
            margin-top: 20px;
        }

        .owl-carousel .owl-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        }

        .details-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .details-section {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex: 1;
            text-align: center;
        }

        .details-section h3 {
            margin-top: 0;
            position: relative;
        }
        .details-section h3::after {
        content: '';
        display: block;
        width: 100px;
        height: 3.5px;
        background-color: #EFBB2B;
        margin-top: 5px;
        margin-left: auto;
        margin-right: auto;
        }

        .details-section p {
            margin-bottom: 10px;
        }

        .details-section a {
            color: #007bff;
            text-decoration: none;
        }

        .details-section a:hover {
            text-decoration: underline;
        }

        footer {
        display: flex;
        flex-direction: column;
        padding: 0.2px; 
        text-align: center;
        background-color: #033e59;
        color: white;
        font-family: 'Effra Regular', sans-serif; 
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h2 {
            text-align: center;
            margin-top: 40px;
            color: #333;
        }

        .recomendaciones {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .recomendaciones div {
            text-align: center;
            width: 200px; 
            margin-bottom: 20px;
        }

        .recomendaciones img {
            width: 100%;
            height: 150px; 
            object-fit: cover;
            border-radius: 8px;
        }

        .recomendaciones h3 {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.8em;
        }

        .recomendaciones div:hover img {
            opacity: 0.7; 
        }

        button {
            display: block;
            margin: 30px auto;
            padding: 12px 20px;
            font-size: 16px;
            background-color: #033e59;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #033e59;
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
       background-color: #033e59;
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
        .title {
            font-family: 'Playfair Display', serif;
        }
        .details-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .details-section {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex: 1;
            text-align: center;
        }

        .details-section h3 {
            margin-top: 0;
            position: relative;
        }

        .details-section h3::after {
            content: '';
            display: block;
            width: 100px;
            height: 3.5px;
            background-color: #EFBB2B;
            margin-top: 5px;
            margin-left: auto;
            margin-right: auto;
        }

        .recomendaciones {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
            font-size: 0.6em; 
        }

        .recomendaciones div {
            text-align: center;
            width: 200px; 
            margin-bottom: 20px;
            position: relative;
            
        }

        .recomendaciones img {
            width: 100%;
            height: 150px; 
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
        }

        .info {
            display: none;
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            text-align: left;
            font-size: 0.9rem;
        }

        .active .info {
            display: block;
        }

        .details-section h3::after {
            content: '';
            display: block;
            width: 100px;
            height: 3.5px;
            background-color: #EFBB2B;
            margin-top: 5px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    </style>
</head>
<body>
<header class="bg-[#033e59] p-4 flex justify-between items-center">
<div class="flex items-center">
<a href="{{ url('/restaurantsmundoimperial') }}" class="inicio-button">
<i class="fas fa-bars text-white text-[10px] mr-4"></i>
<span class="text-white text-lg">INICIO</span></a>
</div>
<div class="logo">
<img src="https://image-tc.galaxy.tf/wisvg-125hwvcbqkjnp336krgjo43fb/palacio-logo2.svg?width=500" alt="Palacio Mundo Imperial">
</div>

        <a href="{{ url('/reservacionmesa') }}"class="reservar-button">
          <span class="text-[#0A3A5A] text-lg">RESERVAR</span>
        </a>

</header>
   
<div class="container">
    <div class="restaurant-info">
        <h2 class="title">Pierre's Café & Delicatessen</h2>
        <div class="yellow-line"></div>
        <p>Restaurante fine dining que fusiona la cocina asiática y mexicana, ofreciendo platos cuidadosamente diseñados con ingredientes frescos y sabores únicos en un ambiente elegante y moderno, ideal para disfrutar una barra de sushi, mesas teppanyaki, sashimi y pescados a la parrilla en una experiencia culinaria auténtica y memorable.</p>
    </div>
    

        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Mizumi/Cena Cava Mizumi-7.jpg') }}" alt="Imagen 1"></div>
            <div class="item"><img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Mizumi/CenaCavaMizumi-21.jpg') }}"></div>
            <div class="item"><img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Mizumi/ResortMizumi-13.jpg') }}"></div>
            <div class="item"><img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Mizumi/ResortMizumi-32.jpg') }}" alt="Imagen 4"></div>
            <div class="item"><img src="https://image-tc.galaxy.tf/wijpeg-9171445k6xunrh5376jawih0s/mizumi-70_wide.jpg?crop=0%2C100%2C1920%2C1080" alt="Imagen 5"></div>
            <div class="item"><img src="https://image-tc.galaxy.tf/wijpeg-1m6x2p0jv1b8ss1253yx3od08/mizumi-64_wide.jpg?crop=0%2C100%2C1920%2C1080" alt="Imagen 6"></div>
        </div>

        <div class="details-container">
            <div class="details-section">
                <h3>Horario</h3>
                <p>LUN - DOM: 6:00 pm - 11:00 pm</p>
            </div>
            <div class="details-section">
                <h3>Ubicación</h3>
                <p>
  <a href="storage/Fotos Hoteles/Centro-Consumo.jpg" target="_blank">
    Ubicación del Centro de Consumo
  </a>
</p>
            </div>
            <div class="details-section">
                <h3>Contacto</h3>
                <p><a href="tel:+527444351700">+52 744 435 1700</a></p>
            </div>
        </div>
    </div>

    <div class="container">
    <h2>Platillos Insignia</h2>
    <div class="recomendaciones">
        <div>
            <img src="{{ asset('storage/Fotos Hoteles/camarones y arroz.jpg') }}" alt="Entradas" onclick="toggleInfo(this)">
            <h3>GAMBAS</h3>
            <div class="info">Envueltas en fideos crujientes y aderezo de mostaza dulce.</div>
        </div>
        <div>
            <img src="{{ asset('storage/Fotos Hoteles/Satay.jpg') }}"  alt="Dumplings" onclick="toggleInfo(this)">
            <h3>SATAY DE POLLO Y CAMARONES</h3>
            <div class="info">Brochetas de pollo y gambas a la plancha con salsa de cacahuete.</div>
        </div>
        <div>
            <img src="{{ asset('storage/Fotos Hoteles/sopa-de-miso-tradicional.jpg') }}" alt="Sopas" onclick="toggleInfo(this)">
            <h3>SOPA DE MISO SHIRO</h3>
            <div class="info">Sopa tradicional japonesa con miso de soja y pasta.</div>
        </div>
        <div>
            <img src="{{ asset('storage/Fotos Hoteles/receta-de-ramen-de-ternera.jpg') }}" alt="Ramen" onclick="toggleInfo(this)">
            <h3>RAMEN DE TERNERA</h3>
            <div class="info">Acelgas chinas con ternera, col, setas, huevo cocido y zanahoria.</div>
        </div>
        <div>
            <img src="{{ asset('storage/Fotos Hoteles/Arroz-frito-con-gambas.jpg') }}" alt="Dice" onclick="toggleInfo(this)">
            <h3>ARROZ DE PIÑA CON MARISCOS</h3>
            <div class="info">Arroz frito, gambas, mejillones, calamares ananas, curry y comino.</div>
        </div>
    </div>

        <a href="{{ url('/reservacionmesa') }}">
    <button>RESERVAR MESA</button>
</a>
    </div>      

    <footer>
        <div class="footer-links">
            <div>
                <a href="#">CONTACTO</a>
            </div>
            <div>
                <a href="#">POLÍTICA DE PRIVACIDAD</a>
            </div>
            <div>
                <a href="#">ACCESIBILIDAD</a>
            </div>
            <div>
                <a href="#">PREGUNTAS FRECUENTES</a>
            </div>
            <div>
                <a href="#">MODIFICAR/CANCELAR RESERVA</a>
            </div>
            <div>
                <a href="#">FACTURACIÓN</a>
            </div>
        </div>
        <div class="section">
            <div>
                <h1>PALACIO MUNDO IMPERIAL</h1>
                <p>E: reservaciones@mundoimperial.com</p>
                <p>T: MEX 800 090 9900</p>
                <p>Local | Restaurantes 744 435 1700</p>
                <p>Plan de Los Amates, Blvrd Barra Vieja 3, 39890, Acapulco de Juárez, Gro.</p>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:3
                }
            }
        });
        function toggleInfo(imgElement) {
        const parentDiv = imgElement.parentElement;
        parentDiv.classList.toggle('active');
    }
    </script>
</body>
</html>