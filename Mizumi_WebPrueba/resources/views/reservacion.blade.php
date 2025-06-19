<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservación Confirmada</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .confirmation-container {
            width: 90%;
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .header-split {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .logo-container {
            flex: 1;
            display: flex;
            justify-content: flex-start;
        }
        .logo {
            width: 180px;
            height: auto;
        }
        .numero-evento {
            background-color: #0b1f35;
            color: white;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
        }
        h1 {
            font-size: 22px;
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 18px;
            color: #000000;
            margin: 20px 0 10px;
            text-align: center;
        }
        .info-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }
        .info-label {
            width: 130px;
            font-weight: bold;
            color: #000000;
            flex-shrink: 0;
        }
        .info-value {
            flex: 1 1 auto;
            color: #333;
        }
        .info-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
            font-size: 16px;
            color: #000000;
            font-weight: bold;
        }
        .info-box i {
            font-size: 20px;
            margin-right: 8px;
        }
        @media (max-width: 500px) {
            .info-label, .info-value {
                width: 100%;
            }
            .header-split {
                flex-direction: column;
                align-items: flex-start;
            }
            .numero-evento {
                align-self: flex-end;
            }
        }
    </style>
</head>
<body>

<div class="confirmation-container">
    <div class="header-split">
        <div class="logo-container">
            <img class="logo" alt="Mundo Imperial logo" src="https://image-tc.galaxy.tf/wisvg-4z6c6butkkmcww6nrjwx56n1m/recurso-5.svg?width=300">
        </div>
        <div class="numero-evento">#241</div>
    </div>

    <h1>Reservación Confirmada</h1>
    <h2>Restaurante Mizumi</h2>

    <div class="info-row">
        <div class="info-label">Descripción:</div>
        <div class="info-value">Desayuno</div>
    </div>
    <div class="info-row">
        <div class="info-label">Fecha:</div>
        <div class="info-value">{{ $data['fecha'] }}</div>
    </div>
    <div class="info-row">
        <div class="info-label">Propiedad:</div>
        <div class="info-value">Palacio Mundo Imperial</div>
    </div>

    <h2>Detalles de la Reservación</h2>

    <div class="info-row">
        <div class="info-label">Nombre:</div>
        <div class="info-value">{{ $data['nombre'] }}</div>
    </div>
    <div class="info-row">
        <div class="info-label">Hora:</div>
        <div class="info-value">{{ $data['hora'] }}</div>
    </div>
    <div class="info-row">
        <div class="info-label">Mesa:</div>
        <div class="info-value">{{ $data['mesa'] }}</div>
    </div>
    <div class="info-row">
        <div class="info-label">Asientos:</div>
        <div class="info-value">{{ $data['asientos'] }}</div>
    </div>

    <div class="info-box">
        <i class="fas fa-user-friends"></i>
        <span> Personas</span>
    </div>

    <h2>Información de Contacto</h2>

    <div class="info-row">
        <div class="info-label">Teléfono:</div>
        <div class="info-value">{{ $data['telefono'] }}</div>
    </div>
    <div class="info-row">
        <div class="info-label">Email:</div>
        <div class="info-value">{{ $data['email'] }}</div>
    </div>
</div>

</body>
</html>
