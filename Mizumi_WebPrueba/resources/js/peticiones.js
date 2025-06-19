function filtrarEventos() {
    // Obtener los valores de las fechas y ubicación
    const fechaInicio = document.getElementById('date_start').value;
    const fechaFin = document.getElementById('date_end').value;
    const ubicacion = document.getElementById('ubicacion').value;

    // Construir la URL con los parámetros
    const url = `./backend/getinfo_events.php?fecha_inicio=${encodeURIComponent(fechaInicio)}&fecha_fin=${encodeURIComponent(fechaFin)}&ubicacion=${encodeURIComponent(ubicacion)}`;

    // Hacer la petición GET
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la red');
            }
            return response.json();
        })
        .then(data => {
            // Renderizar la información en el HTML
            document.querySelector('.total_events .circle').textContent = data.total_eventos;
            document.querySelector('.events_info .card_event_info:nth-child(1) .secondary_circles').textContent = data.capacidad_total;
            document.querySelector('.events_info .card_event_info:nth-child(2) .secondary_circles').textContent = data.asientos_vendidos;
            document.querySelector('.events_info .card_event_info:nth-child(3) .secondary_circles').textContent = data.asientos_disponibles;

            // Limpiar la sección de eventos antes de renderizar
            const listEventsSection = document.querySelector('.list_events');
            listEventsSection.innerHTML = ''; // Limpiar eventos anteriores

            // Renderizar cada evento
            data.eventos.forEach(evento => {
                const eventDiv = document.createElement('div');
                eventDiv.classList.add('event', evento.color_class); // Añadir clase según 'color_class'

                // Añadir enlace con el ID del evento como parámetro GET
                eventDiv.innerHTML = `
                    <a id="name_event" href="detallesEvento.php?id=${evento.id}">${evento.nombre}</a>
                    <p id="date">${evento.fecha}</p>
                    <p id="place">${evento.ubicacion}</p>
                `;
                
                listEventsSection.appendChild(eventDiv);
            });

            // Limpiar y renderizar las leyendas dinámicamente
            const leyendsDiv = document.querySelector('.leyends');
            leyendsDiv.innerHTML = ''; // Limpiar leyendas anteriores

            // Crear un set para evitar leyendas duplicadas por ubicaciones
            const ubicaciones = new Set();
            data.eventos.forEach(evento => {
                if (!ubicaciones.has(evento.ubicacion)) {
                    ubicaciones.add(evento.ubicacion);

                    const labelDiv = document.createElement('div');
                    labelDiv.classList.add('label_info');
                    
                    // Añadir la clase del color y el nombre de la ubicación
                    labelDiv.innerHTML = `
                        <div class="bar ${evento.color_class}"></div>
                        <span>${evento.ubicacion}</span>
                    `;

                    leyendsDiv.appendChild(labelDiv);
                }
            });
        })
        .catch(error => {
            console.error('Hubo un problema con la petición Fetch:', error);
        });
}

// Añadir el event listener al botón de filtrar
document.querySelector('.filter').addEventListener('click', filtrarEventos);

function generateReservationLink(data) {
    const baseURL = "{{ route('reservacion') }}"; // URL de la ruta de Laravel
    const params = new URLSearchParams(data);
    return `${baseURL}?${params.toString()}`;
}

function generateQRCode() {
    // Obtener datos del formulario
    const data = {
        fecha: document.getElementById("fecha").value,
        nombre: document.getElementById("nombre").value,
        hora: document.getElementById("schedule").value,
        mesa: document.getElementById("mesa").value,
        asientos: document.getElementById("asientos").value,
        telefono: document.getElementById("telefono").value,
        email: document.getElementById("email").value
    };

    // Generar el enlace único
    const reservationLink = generateReservationLink(data);

    // Generar el código QR
    const qrContainer = document.getElementById("qrCodeContainer");
    qrContainer.innerHTML = ""; // Limpiar el QR anterior

    $(qrContainer).qrcode({
        text: reservationLink, // Enlace único
        width: 150,
        height: 150
    });

    // Descargar el código QR como imagen
    html2canvas(qrContainer).then(canvas => {
        const link = document.createElement("a");
        link.download = "Reservacion_QR.png"; // Nombre del archivo
        link.href = canvas.toDataURL("image/png"); // Formato de la imagen
        link.click(); // Disparar la descarga
    });
}
function reservarMesa() {
    // Obtener datos del formulario
    const data = {
        fecha: document.getElementById("fecha").value,
        nombre: document.getElementById("nombre").value,
        hora: document.getElementById("schedule").value,
        mesa: document.getElementById("mesa").value,
        asientos: document.getElementById("asientos").value,
        telefono: document.getElementById("telefono").value,
        email: document.getElementById("email").value
    };

    // Mostrar la página de confirmación
    document.querySelector('.confirmation-container').style.display = 'block';
    document.querySelector('.container').style.display = 'none';

    // Mostrar los datos de la reserva en la página de confirmación
    let reservationHTML = `
        <h1>Restaurante Mizumi</h1>
        <p><strong>Descripción:</strong> Desayuno.</p>
        <p><strong>Fecha:</strong> ${data.fecha}</p>
        <p><strong>Propiedad:</strong> Palacio Mundo Imperial</p>
        <h2>Detalles de la Reservación</h2>
        <p><strong>Nombre:</strong> ${data.nombre}</p>
        <p><strong>Hora:</strong> ${data.hora}</p>
        <p><strong>Mesa:</strong> ${data.mesa}</p>
        <p><strong>Asientos:</strong> ${data.asientos}</p>
        <div class="info-box">
            <div>
                <i class="fas fa-user-friends"></i>
                <p>${data.asientos} Personas</p>
            </div>
        </div>
        <h2>Información de Contacto</h2>
        <p><strong>Teléfono:</strong> ${data.telefono}</p>
        <p><strong>Email:</strong> ${data.email}</p>
    `;

    document.getElementById('reservationDetails').innerHTML = reservationHTML;

    // Generar el código QR
    generateQRCode();
}
