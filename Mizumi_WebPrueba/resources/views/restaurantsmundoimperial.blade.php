<!DOCTYPE html>  
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Imperial</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 100vh;
        }
        .item {
            position: relative;
            width: 33.33%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }
        .item:nth-child(1) {
            background-image: url('{{ asset('storage/Fotos Hoteles/PALACIO/Resort-116.jpg') }}'); 
        }
        .item:nth-child(2) {
            background-image: url('{{ asset('storage/Fotos Hoteles/PIERRE/Pierre-24.jpg') }}'); 
        }
        .item:nth-child(3) {
            background-image: url('{{ asset('storage/Fotos Hoteles/PRINCESS/Princess-95.jpg') }}');  
        }
        .logo-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .logo {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 24px;
            transition: all 0.3s ease;
        }
        .logo img {
            width: 100px;
        }
        .logo:hover {
            background-color: rgba(0, 0, 0, 0.7);
            transform: translateY(-2px);
        }
        .mundo-imperial {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000; 
        }
        .mundo-imperial img {
            width: 100px;
        }
    </style>
</head>
<body>


    <div class="mundo-imperial">
        <img src="https://image-tc.galaxy.tf/wipng-9n2y9u0o6p288danyqjywfple/logo-mi-portal-blanco-8.png?width=300" alt="Mundo Imperial Logo">
    </div>

    <div class="container">
        <div class="item">
            <div class="logo-container">
                <a href="{{ url('/palaciomundoimperial') }}" class="logo">
                    <img src="https://image-tc.galaxy.tf/wisvg-125hwvcbqkjnp336krgjo43fb/palacio-logo2.svg?width=500" alt="Logo Palacio">
                </a>
            </div>
        </div>
        <div class="item">
            <div class="logo-container">
                <a href="{{ url('/pierremundoimperial') }}" class="logo">
                    <img src="https://image-tc.galaxy.tf/wipng-dyy15qdznc44gq0oo1sedd0uu/pierremi.png?width=500" alt="Logo Pierre">
                </a>
            </div>
        </div>
        <div class="item">
            <div class="logo-container">
                <a href="{{ url('/princessmundoimperial') }}" class="logo">
                    <img src="https://image-tc.galaxy.tf/wisvg-12aqen2bidovslwzzq5aj80pw/princess-logo-new.svg?width=500" alt="Logo Princess">
                </a>
            </div>
        </div>
    </div>
    
</body>
</html>
