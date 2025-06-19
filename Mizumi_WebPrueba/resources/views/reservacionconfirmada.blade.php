<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Reservación - Palacio Mundo Imperial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .confirmation-container {
            width: 90%;
            max-width: 600px;
            min-width: 300px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            max-width: 300px;
            height: auto;
        }

        h1, h2 {
            color: #033e59;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 20px;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            margin: 8px 0;
        }

        strong {
            color: #033e59;
        }

        .info-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .info-box i {
            font-size: 24px;
            color: #033e59;
            margin-right: 10px;
        }

        .qr-container {
            text-align: center;
            margin: 30px 0;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        button {
            background-color: #033e59;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0E3E59;
        }

        .reservation-id {
            background-color: #033e59;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .confirmation-container {
                width: 80%;
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            .confirmation-container {
                width: 95%;
                padding: 10px;
            }
            
            h1 {
                font-size: 20px;
            }
            
            h2 {
                font-size: 18px;
            }
            
            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <div class="logo-container">
            <img src="https://image-tc.galaxy.tf/wisvg-4z6c6butkkmcww6nrjwx56n1m/recurso-5.svg?width=300" alt="Mundo Imperial">
            <h1>Reservación Confirmada</h1>
            <div class="reservation-id">ID: {{ $reservationData['id'] ?? 'N/A' }}</div>
        </div>

        <h2>Restaurante Mizumi</h2>
        <p><strong>Descripción:</strong> {{ ucfirst($reservationData['meal'] ?? 'N/A') }}</p>
        <p><strong>Fecha:</strong> {{ $reservationData['fecha'] ?? 'N/A' }}</p>
        <p><strong>Propiedad:</strong> Palacio Mundo Imperial</p>

        <h2>Detalles de la Reservación</h2>
        <p><strong>Nombre:</strong> {{ $reservationData['nombre'] ?? 'N/A' }}</p>
        <p><strong>Hora:</strong> {{ $reservationData['hora'] ?? 'N/A' }}</p>
        <p><strong>Mesa:</strong> {{ $reservationData['mesa'] ?? 'N/A' }}</p>
        <p><strong>Asientos:</strong> {{ $reservationData['asientos'] ?? 'N/A' }}</p>

        <div class="info-box">
            <div>
                <i class="fas fa-user-friends"></i>
                <p>{{ ($reservationData['adults'] ?? 0) + ($reservationData['children'] ?? 0) }} Personas</p>
            </div>
        </div>

        <h2>Información de Contacto</h2>
        <p><strong>Teléfono:</strong> {{ $reservationData['telefono'] ?? 'N/A' }}</p>
        <p><strong>Email:</strong> {{ $reservationData['email'] ?? 'N/A' }}</p>
       
        
       
        <p><strong>Habitación:</strong> {{ $reservationData['habitacion'] ?? 'N/A' }}</p>
       

        <div class="qr-container" id="qrcode">
            <!-- El código QR se generará aquí -->
        </div>

        <div class="button-container">
            <button onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button>
            <button onclick="window.location.href='{{ url('/restaurantsmundoimperial') }}'"><i class="fas fa-home"></i> Inicio</button>
        </div>
    </div>

    <!-- Scripts para generar el QR -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
    <script>
        // Datos de la reservación para el QR
        const reservationData = {
            id: "{{ $reservationData['id'] ?? '' }}",
            restaurant: "Mizumi",
            fecha: "{{ $reservationData['fecha'] ?? '' }}",
            hora: "{{ $reservationData['hora'] ?? '' }}",
            mesa: "{{ $reservationData['mesa'] ?? '' }}",
            nombre: "{{ $reservationData['nombre'] ?? '' }}",
            telefono: "{{ $reservationData['telefono'] ?? '' }}",
            email: "{{ $reservationData['email'] ?? '' }}"
        };

        // Generar código QR
        $(document).ready(function() {
            const qrData = JSON.stringify(reservationData);
            $('#qrcode').qrcode({
                text: qrData,
                width: 200,
                height: 200
            });
        });

        // Temporizador de 5 minutos para la reservación
        let timeLeft = 300; // 5 minutos en segundos
        const timerElement = document.createElement('div');
        timerElement.style.position = 'fixed';
        timerElement.style.top = '10px';
        timerElement.style.right = '10px';
        timerElement.style.backgroundColor = '#033e59';
        timerElement.style.color = 'white';
        timerElement.style.padding = '8px 15px';
        timerElement.style.borderRadius = '5px';
        timerElement.style.fontWeight = 'bold';
        timerElement.style.zIndex = '1000';
        document.body.appendChild(timerElement);

        const timerInterval = setInterval(() => {
            timeLeft--;
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            timerElement.textContent = `Tiempo restante: ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                timerElement.textContent = "¡Tiempo agotado!";
                timerElement.style.backgroundColor = '#d9534f';
                // Aquí podrías agregar lógica para cancelar automáticamente la reservación
            } else if (timeLeft <= 30) {
                timerElement.style.backgroundColor = '#f0ad4e';
            }
        }, 1000);
    </script>
</body>
</html>