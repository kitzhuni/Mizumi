<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes Palacio Mundo Imperial</title>
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
        <p>El Palacio Mundo Imperial en Acapulco es un complejo turístico de lujo con una variedad de restaurantes de alta gama que ofrecen opciones culinarias para todos los gustos en un entorno lujoso, convirtiendo cada bocado en una experiencia placentera.</p>
        <div class="restaurants">
            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Mizumi/ResortMizumi-2.jpg') }}" alt="Mizumi">
                <div class="restaurant-info">
                    <h3>Mizumi</h3>
                    <p>Cada plato en Mizumi es una obra maestra culinaria, cuidadosamente diseñada para deleitar tus sentidos y sorprenderte con sabores únicos. Nuestro talentoso equipo de chefs fusiona lo mejor de la cocina asiática y mexicana, creando combinaciones atrevidas y equilibradas que te transportarán a un viaje culinario sin igual.</p>
                    <p><strong>LUN - DOM: 6:00 pm - 11:00 pm</strong></p>
                    <a href="{{ url('/mizumimundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Carnivore/Mundo-40.jpg') }}" alt="Carnivore">
                <div class="restaurant-info">
                    <h3>Carnivore</h3>
                    <p>Nos enorgullecemos de ofrecer los mejores y más jugosos cortes de carne a la parrilla, cuidadosamente seleccionados para garantizar la máxima calidad y sabor. Cada bocado es una experiencia única, llena de sabores intensos y texturas suculentas que te transportarán al paraíso de la carne.</p>
                    <p><strong>LUN - DOM: 5:00 pm - 11:00 pm</strong></p>
                    <a href="{{ url('/carnivoremundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
            
            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Marché/DSC_6202.jpg') }}" alt="Marché">
                <div class="restaurant-info">
                    <h3>Marché</h3>
                    <p>Disfrute de un desayuno de auténtico lujo en nuestro restaurante Marché. Aquí, chefs de renombre internacional muestran su talento en una cocina abierta y llena de energía, preparando un extenso y exquisito bufé internacional.</p>
                    <p><strong>LUN - DOM: 9:00 am - 5:00 pm</strong></p>
                    <a href="{{ url('/marchemundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/a Roma/a roma (2024)-34.jpg') }}" alt="A Roma">
                <div class="restaurant-info">
                    <h3>A Roma</h3>
                    <p>Sumérgete en la auténtica experiencia italiana en A Roma, donde encontrarás una deliciosa selección de platos clásicos y creativos que te transportarán directamente a las mesas de Italia. Nuestro ambiente vibrante y acogedor crea el escenario perfecto para disfrutar de momentos especiales con amigos y seres queridos mientras exploras los sabores de la cocina italiana</p>
                    <p><strong>JUE - DOM: 5:00 pm - 11:00 pm</strong></p>
                    <a href="{{ url('/aromamundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Acua/Mundo-216.jpg') }}" alt="Acua">
                <div class="restaurant-info">
                    <h3>Acua</h3>
                    <p>En Acua, cada plato se prepara cuidadosamente con ingredientes frescos de la mejor calidad para ofrecerle una experiencia gastronómica única. Además, nuestro amable personal estará encantado de atender todas sus necesidades y asegurarse de que su velada sea perfecta.</p>
                    <p><strong>LUN - DOM: 9:00 am - 5:00 pm</strong></p>
                    <a href="{{ url('/acuamundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
            <div class="restaurant">
                <img src="https://image-tc.galaxy.tf/wijpeg-3awtbisiyj1m2uaqss414of4z/dsc-7355_wide.jpg?crop=0%2C98%2C1920%2C1080&width=992" alt="Mexkalli">
                <div class="restaurant-info">
                    <h3>Mexkalli Cocina Tradicional</h3>
                    <p>Un viaje sensorial a través de los sabores y sonidos de México en Mexkalli. Disfrute de la música en directo de mariachis y ritmos latinos mientras se sumerge en una auténtica experiencia gastronómica y cultural. Disfrute de una variedad de mezcales, una bebida emblemática de México, Mexkalli es el destino perfecto para disfrutar de auténticas delicias mexicanas en un ambiente auténtico.</p>
                    <p><strong>LUN - DOM: 11:00 am- 6:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/mexcallimundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
            <div class="restaurant">
                <img src="https://image-tc.galaxy.tf/wijpeg-8rkk93p0z2e7hq2pje6oz79og/img-1465_wide.jpg?crop=0%2C180%2C1920%2C1080" alt="Deli Gourmet">
                <div class="restaurant-info">
                    <h3>Deli Gourmet Shop </h3>
                    <p>Descubra un lugar para deleitar sus sentidos en Saborea, donde podrá disfrutar de deliciosos desayunos, bocadillos, pizzas, ensaladas y exquisitos postres. Además, ponemos a su disposición una selección de artículos a la venta para complementar su experiencia. Sumérjase en un mundo de sabores y delicias culinarias en Saborea.</p>
                    <p><strong>LUN - DOM: 7:00 am - 11:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/delimundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Scala/_DSC0134.jpg') }}" alt="Scala Ocean Club">
                <div class="restaurant-info">
                    <h3>Scala Ocean Club</h3>
                    <p>Sumérjase en la vibrante atmósfera de nuestro club de playa al aire libre, el lugar perfecto para reuniones de grupo y familias que buscan una experiencia inolvidable. Aquí podrá deleitarse con excelentes opciones gastronómicas, refrescantes bebidas y música en vivo, todo ello mientras se maravilla con la espectacular vista de "Playa Bonfil" y la icónica puesta de sol de Acapulco.</p>
                    <p><strong>LUN - DOM: 9:00 am - 5:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/scalamundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
                        
            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/Club89.jpg') }}" alt="Club 89 Loungey">
                <div class="restaurant-info">
                    <h3>Club 89 Lounge</h3>
                    <p>Situado en la octava planta con impresionantes vistas de la Zona Diamante, el exclusivo Club 89 Lounge abre sus puertas sólo a los huéspedes alojados en las plantas 8ª y 9ª, así como en las suites del complejo. Aquí podrá disfrutar de una experiencia gastronómica excepcional desde el desayuno hasta la noche.</p>
                    <p><strong>LUN - DOM: 5:00 pm - 11:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/club89mundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>           
            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/restaurante-palacio/Restaurantes Palacio/Blubar/Blu bar-1.jpg') }}" alt="Blu">
                <div class="restaurant-info">
                    <h3>Blu Bar</h3>
                    <p>Déjese llevar por la vibrante música en directo mientras le sorprendemos con nuestra vanguardista mixología. En nuestro exclusivo bar, le invitamos a descubrir una lista de ginebras cuidadosamente seleccionadas que le deleitarán con sus aromas y sabores únicos. Sumérjase en una experiencia sensorial única mientras disfruta de la combinación perfecta de música y creaciones creativas de cócteles.</p>
                    <p><strong>LUN - DOM: 11:00 am - 12:00 am</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/blubarmundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
            
            <div class="restaurant">
                <img src="https://image-tc.galaxy.tf/wijpeg-60a9y0nc1lm4i4n8n3ibt6kvc/serenity-gastronomia_wide.jpg?crop=0%2C0%2C1920%2C1080" alt="Serenity">
                <div class="restaurant-info">
                    <h3>Serenity Bar</h3>
                    <p>Sumérjase en una experiencia de relajación absoluta mientras saborea un cóctel hecho a su medida. Disfrute de nuestro exclusivo bar situado en la zona de la piscina sólo para adultos, donde podrá deleitarse con deliciosas bebidas en un ambiente tranquilo y sofisticado. Permítase disfrutar de momentos de auténtica relajación y disfrute en nuestro oasis junto a la piscina.</p>
                    <p><strong>LUN - DOM: 5:00 pm - 11:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/serenitymundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
            </div>
            
            <div class="restaurant">
                <img src="{{ asset('storage/Fotos Hoteles/Pool Bar.jpg') }}" alt="Serenity">
                <div class="restaurant-info">
                    <h3>Pool Bar</h3>
                    <p>Sumérjase en una experiencia de relajación absoluta mientras saborea un cóctel hecho a su medida. Disfrute de nuestro exclusivo bar situado en una piscina, donde podrá deleitar deliciosas bebidas en un ambiente familiar y excelente música.</p>
                    <p><strong>LUN - DOM: 10:00 am - 08:00 pm</strong></p>
                    <p><strong>* No se require reservación.</strong></p>
                    <a href="{{ url('/poolbarmundoimperial') }}" class="button">Visitar Restaurante</a>
                </div>
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