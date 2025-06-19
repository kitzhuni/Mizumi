<!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Reservar Sillas</title>
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
        justify-content: center; 
        align-items: center;
        color: #e0e0e0;
        height: 30px;
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
        color: white;
      }

      .inicio-button:hover {
        background-color: #ECFBFC;
      }
      h2 {
        text-align: center;
        font-family: FreightBig Pro;
      }
      p{
        text-align:center;
        font-family: FreightBig Pro;
      }
      .container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
      }
      .content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        width: 80%;
        max-width: 600px;
      }
      .container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
      }

      .left-container {
        width: 30%;
      }

      .right-container {
        width: 50%;
      }

      .table-container {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .table-container h3 {
        margin-bottom: 10px;
      }

      .table {
        position: relative;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background-color: #0E3E59;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 40px;
        color: #fff;
      }

      .seat {
        position: absolute;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        cursor: pointer;
        background-color: #3989b5;
      }

      .seat.selected {
        background-color: #717371;
        color: #fff;
      }

      .seat.sold {
        background-color: #717371;
        color: #fff;
      }

      .seat.available {
        background-color: #3989b5;
        color: #fff;
      }

      .seat.selected.sold {
        background-color: #717371;
        color: #fff;
      }

      .form-container {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      .form-container h3 {
        margin-top: 0;
        margin-bottom: 10px;
      }

      .form-group {
        margin-bottom: 15px;
      }

      .form-group label {
        display: block;
        margin-bottom: 5px;
      }

      .form-group input,
      .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
      }

      .form-group select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24'><path d='M7 10l5 5 5-5z'/><path d='M0  0h24v24H0z' fill='none'/></svg>") no-repeat right 10px center;
      }

      .form-group input[type="checkbox"] {
        width: auto;
        height: auto;
        margin-right: 5px;
      }

      .form-group input[type="checkbox"] + label {
        display: inline;
      }

      button {
        background-color: #0E3E59;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      button:hover {
        background-color: #114F71;
      }

      .calendar-container {
        margin-top: 20px;
        display: none; 
      }

      .calendar-container .calendar-table {
        border-collapse: collapse;
        width: 100%;
        background-color: #fff;
      }

      .calendar-container .calendar-table th,
      .calendar-container .calendar-table td {
        text-align: center;
        padding: 8px;
        border: 1px solid #ddd;
        cursor: pointer;
      }

      .calendar-container .calendar-table td:hover {
        background-color: #3498db;
        color: #fff;
      }

      .calendar-container .calendar-table td.selected {
        background-color: #2ecc71;
        color: #fff;
      }  
      .people-icon img {
          width: 24px;  
          height: 24px; 
      }
      .field {
        margin-bottom: 15px;
      }

      /* Ajustar formato para diferentes pantallas */
      .confirmation-container {
        width: 90%; /* Usa un porcentaje más grande para pantallas pequeñas */
    max-width: 600px; /* Establece un ancho máximo para pantallas grandes */
    min-width: 300px; /* Establece un ancho mínimo para evitar que sea demasiado pequeño */
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    box-sizing: border-box; /* Asegura que el padding no afecte el ancho total */
}

/* Media Queries para ajustes específicos en diferentes tamaños de pantalla */
@media (max-width: 768px) {
    .confirmation-container {
        width: 80%; /* Ajusta el ancho para tablets y pantallas más pequeñas */
        padding: 15px; /* Reduce el padding para pantallas más pequeñas */
    }
}

@media (max-width: 480px) {
    .confirmation-container {
        width: 95%; /* Ajusta el ancho para móviles */
        padding: 10px; /* Reduce aún más el padding para móviles */
    }
}

      .confirmation-container h1 {
        text-align: center;
        color: #333;
      }

      .confirmation-container h2 {
        color: #337ab7;
        margin-top: 30px;
      }

      .confirmation-container p {
        line-height: 1.6;
        color: #555;
      }

      .info-box {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
      }

      .info-box > div {
        text-align: center;
      }

      .info-box i {
        font-size: 24px;
        color: #337ab7;
        margin-bottom: 10px;
      }

      .btn-container {
        text-align: center;
        margin-top: 30px;
      }

      .logo-container {
  text-align: center; /* Centra la imagen horizontalmente */
  margin-bottom: 20px; /* Añade un margen inferior para separar la imagen del texto */
}




h1 {
    font-size: 24px;
    color: #033e59;
    text-align: center;
    margin-bottom: 20px;
}

h2 {
    font-size: 20px;
    color: #033e59;
    margin-top: 20px;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    color: #333;
    line-height: 1.6;
}

strong {
    color: #033e59;
}

.info-box {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.info-box i {
    font-size: 24px;
    color: #033e59;
    margin-right: 10px;
}

#qrcode {
 align-items: center;
 display: flex;
}





    </style>
  </head>
  <body>
    <header style="background-color: #033e59; padding: 1rem; display: flex; justify-content: center; align-items: center;"> 
      <div class="flex items-center" style="position: absolute; left: 20px;"> 
      <a href="{{ url('/restaurantsmundoimperial') }}" class="inicio-button">
      <i class="fas fa-bars"></i>
      <span class="text-white text-lg">INICIO</span></a>
      </div>
      <div class="logo">
        <img src="https://image-tc.galaxy.tf/wisvg-125hwvcbqkjnp336krgjo43fb/palacio-logo2.svg?width=500" alt="Palacio Mundo Imperial">
      </div>
    </header>

    <div class="container">
     
      <div class="right-container">
        <!--Detelle de la reservación --->


     

  
      </div>
    </div>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
  <script>
        function makeCode(reservationData) {
    // Crear la URL con los datos de la reservación
    const baseURL = "{{ url()->current() }}";
    const reservationString = encodeURIComponent(JSON.stringify(reservationData));
    const qrURL = `${baseURL}?data=${reservationString}`;

            // Limpiar QRCode anterior antes de generar uno nuevo
            $("#qrcode").empty();

            // Generar nuevo QRCode
            $("#qrcode").qrcode({
                text: qrURL,
                width: 350,
                height: 350
            });
        }
    </script>
    

    <script>

    // GENERAR QR
    
    let reservationId = 2401;

      function generateReservation() {
          let reservationData = {
              restaurant: "Mizumi",
              address: "Plan De Los Amates, Boulevard Barra Vieja 3, Acapulco de Juárez, Guerrero, México",
              date: "18-05-2024",
              time: "20:00 - 20:30",
              guests: 2,
              name: "Marco Antonio Laureano",
              phone: "744 647 4647",
              email: "1234556@gmail.com"
          };

          let reservationHTML = `
              <p>ID: ${reservationId}</p>
              <h2>Detalles de la Reserva</h2>
              <p>Restaurante: ${reservationData.restaurant}</p>
              <p>Dirección: ${reservationData.address}</p>
              <p>Fecha: ${reservationData.date}</p>
              <p>Hora: ${reservationData.time}</p>
              <div class="info-box">
                  <div>
                      <i class="fas fa-user-friends"></i>
                      <p>${reservationData.guests} Personas</p>
                  </div>
              </div>
              <h2>Información de Contacto</h2>
              <p>Nombre: ${reservationData.name}</p>
              <p>Teléfono: ${reservationData.phone}</p>
              <p>Email: ${reservationData.email}</p>
          `;

          document.getElementById('reservationDetails').innerHTML = reservationHTML;


          reservationId++;
      }

      

          // Encabezado
          doc.setFontSize(20);
          doc.text("Palacio Mundo Imperial", 10, 10);
          doc.setFontSize(12);
          doc.text("Confirmación de Reserva", 10, 20);
          doc.setFontSize(10);
          doc.text(`ID: ${reservationId}`, 10, 30);
          
          // Información de la reservación
          let reservationData = {
              restaurant: "Mizumi",
              address: "Plan De Los Amates, Boulevard Barra Vieja 3, Acapulco de Juárez, Guerrero, México",
              date: "18-05-2024",
              time: "20:00 - 20:30",
              guests: 2,
              name: "Marco Antonio Laureano",
              phone: "744 647 4647",
              email: "1234556@gmail.com"
          };

          doc.text(`Detalles de la Reserva`, 10, 40);
          doc.text(`Restaurante: ${reservationData.restaurant}`, 10, 50);
          doc.text(`Dirección: ${reservationData.address}`, 10, 60);
          doc.text(`Fecha: ${reservationData.date}`, 10, 70);
          doc.text(`Hora: ${reservationData.time}`, 10, 80);
          doc.text(`Invitados: ${reservationData.guests} Personas`, 10, 90);
          doc.text(`Información de Contacto`, 10, 100);
          doc.text(`Nombre: ${reservationData.name}`, 10, 110);
          doc.text(`Teléfono: ${reservationData.phone}`, 10, 120);
          doc.text(`Email: ${reservationData.email}`, 10, 130);

        



    
  </script>
  
  <script>
      function seleccionarAsientos() {
      const totalAsientos = document.getElementById('asientos').value;
      const asientos = document.querySelectorAll('.seat');
      
      // Reseteamos todos los asientos a "available"
      asientos.forEach(asiento => {
        asiento.classList.remove('sold');
        asiento.classList.add('available');
      });

      // Seleccionamos los primeros asientos según el número indicado
      for (let i = 0; i < totalAsientos; i++) {
        asientos[i].classList.remove('available');
        asientos[i].classList.add('sold');
      }
    } 
      // Verificador de Email
    document.getElementById('email').addEventListener('input', function () {
    const email = this.value;
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
      this.setCustomValidity('Por favor, ingrese un correo electrónico válido.');
    } else {
      this.setCustomValidity('');
    }
  });

  function updateSchedule() {
        const meal = document.getElementById("meal").value;
        const scheduleSelect = document.getElementById("schedule");

        // Clear previous schedule options
        scheduleSelect.innerHTML = '<option value="">--Selecciona un horario--</option>';

        // Add new time slots based on the selected meal
        let timeSlots = [];
        if (meal === "desayuno") {
          timeSlots = ["08:00", "09:00", "10:00"];
        } else if (meal === "comida") {
          timeSlots = ["13:00", "14:00", "15:00"];
        } else if (meal === "cena") {
          timeSlots = ["18:00", "19:00", "20:00"];
        }

        timeSlots.forEach(time => {
          const option = document.createElement("option");
          option.value = time;
          option.textContent = time;
          scheduleSelect.appendChild(option);
        });
      }

      // Función para reservar la mesa
      function reservarMesa() {
        console.log('Abriendo Funcao')
    // Obtener datos del formulario
    let fecha = document.getElementById("fecha").value;
    let hora = document.getElementById("schedule").value;
    let mesa = document.getElementById("mesa").value;
    let asientos = document.getElementById("asientos").value;
    let nombre = document.getElementById("nombre").value;
    let telefono = document.getElementById("telefono").value;
    let email = document.getElementById("email").value;
    let huesped = document.getElementById("huesped").checked;
    let visitante = document.getElementById("visitante").checked;
    let habitacion = document.getElementById("habitacion").value;

    // Validar datos
    if (!nombre || !telefono || !email || !hora) {
        alert("Por favor, complete todos los campos obligatorios.");
        return;
    }

    if (!huesped && !visitante) {
        alert("Por favor, seleccione un tipo de cliente.");
        return;
    }
    if (huesped && !habitacion) {
        alert("Por favor, ingrese su número de habitación.");
        return;
    }

    // Crear los datos de la reservación
    let reservationData = {
        id: "2401",
        restaurant: "Mizumi",
        fecha: fecha,
        hora: hora,
        mesa: mesa,
        asientos: asientos,
        nombre: nombre,
        telefono: telefono,
        email: email
    };

    // Mostrar la página de confirmación
    document.querySelector('.confirmation-container').style.display = 'block';
    document.querySelector('.container').style.display = 'none';

    let reservationHTML = `
        <h1>Restaurante</h1>
        <p><strong>Descripción:</strong> Desayuno.</p>
        <p><strong>Fecha:</strong> ${fecha}</p>
        <p><strong>Propiedad:</strong> Palacio Mundo Imperial</p>
        <h2>Detalles de la Reservación</h2>
        <p><strong>Nombre:</strong> ${nombre}</p>
        <p><strong>Hora:</strong> ${hora}</p>
        <p><strong>Mesa:</strong> ${mesa}</p>
        <p><strong>Asientos:</strong> ${asientos}</p>
        <div class="info-box">
            <div>
                <i class="fas fa-user-friends"></i>
                <p>${asientos} Personas</p>
            </div>
        </div>
        <h2>Información de Contacto</h2>
        <p><strong>Teléfono:</strong> ${telefono}</p>
        <p><strong>Email:</strong> ${email}</p>
        <div id="qrcode"></div> <!-- Contenedor para el código QR -->
    `;

    document.getElementById('reservationDetails').innerHTML = reservationHTML;

// Generar el código QR
    makeCode(reservationData);
}

      // VERIFICAR SI ES HUESPED O VISITANTE 
      document.getElementById("huesped").addEventListener("change", function() {
        let habitacionContainer = document.getElementById("habitacion-container");
        if (this.checked) {
          habitacionContainer.style.display = "block";
          document.getElementById("visitante").checked = false;
        } else {
          habitacionContainer.style.display = "none";
        }
      });

      document.getElementById("visitante").addEventListener("change", function() {
        let habitacionContainer = document.getElementById("habitacion-container");
        if (this.checked) {
          habitacionContainer.style.display = "none";
          document.getElementById("huesped").checked = false;
        }
  });
     
      
  </script>
  </body>
  </html>





