<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Reserva</title>
    <script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.js"></script>
</head>
<body>
    <h1>Detalles de la Reserva</h1>
    <div id="reservation-details"></div>

    <script>
        // Los datos de la reserva se pasan desde Laravel a través de la variable {{ json_encode($reservationData) }}
        const qrData = @json($reservationData);
        
        // Parsear el JSON
        const reservationData = qrData;

        // Mostrar los datos
        const reservationHTML = `
            <p>ID: ${reservationData.id}</p>
            <p>Restaurante: ${reservationData.restaurant}</p>
            <p>Dirección: ${reservationData.address}</p>
            <p>Fecha: ${reservationData.date}</p>
            <p>Hora: ${reservationData.time}</p>
            <p>Invitados: ${reservationData.guests}</p>
            <p>Nombre: ${reservationData.name}</p>
            <p>Teléfono: ${reservationData.phone}</p>
            <p>Email: ${reservationData.email}</p>
        `;

        document.getElementById('reservation-details').innerHTML = reservationHTML;
    </script>
</body>
</html>
