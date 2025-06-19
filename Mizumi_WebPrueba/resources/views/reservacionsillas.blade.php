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
    margin: 0;
    padding: 0;
  }

  header { 
    background: #033e59;
    padding: 1rem;
    display: flex;
    justify-content: center; 
    align-items: center;
    color: #e0e0e0;
    height: 30px;
    position: relative;
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
    position: absolute;
    left: 20px;
  }

  .inicio-button i {
    font-size: 1rem;
    margin-right: 0.5rem;
    color: white;
  }

  .inicio-button:hover {
    background-color: #ECFBFC;
    color: #033e59;
  }
  
  h2 {
    text-align: center;
    font-family: 'FreightBig Pro', serif;
    color: #033e59;
  }
  
  .container {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
    gap: 30px;
  }
  
  .left-container {
    width: 40%;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
  }
  
  .right-container {
    width: 50%;
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
  }

  .table-container {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .table {
    position: relative;
    width: 300px;
    height: 300px;
    margin: 40px auto;
    background: #0E3E59;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
    color: #fff;
  }

  .seat {
    position: absolute;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    cursor: pointer;
    background-color: #3989b5;
    color: #fff;
  }

  .seat.selected {
    background-color: #717371;
  }

  .seat.sold {
    background-color: #717371;
  }

  .seat.available {
    background-color: #3989b5;
  }

  .form-container {
    padding: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
  }

  .form-group input,
  .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
  }

  .form-group select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>") no-repeat right 10px center;
  }

  .form-group input[type="checkbox"] {
    width: auto;
    height: auto;
    margin-right: 5px;
  }

  .form-group input[type="checkbox"] + label {
    display: inline;
    margin-right: 15px;
  }

  button {
    background-color: #0E3E59;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    margin-top: 10px;
  }

  button:hover {
    background-color: #114F71;
  }

  .people-icon img {
    width: 24px;
    height: 24px;
    vertical-align: middle;
    margin-left: 10px;
  }

  .field {
    margin-bottom: 15px;
    display: flex;
    align-items: center;
  }

  .field label {
    margin-right: 10px;
  }

  .field select {
    width: auto;
    margin-right: 10px;
  }

  /* Estilos para la confirmación */
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
    text-align: center;
    display: none;
  }

  .confirmation-container h2 {
    color: #033e59;
    margin-top: 0;
  }

  .logo-container {
    text-align: center;
    margin-bottom: 20px;
  }

  .logo-container img {
    max-width: 300px;
    height: auto;
  }

  #qrcode {
    margin: 20px auto;
    display: flex;
    justify-content: center;
  }

  /* Media Queries para responsividad */
  @media (max-width: 768px) {
    .container {
      flex-direction: column;
      padding: 10px;
    }
    
    .left-container, .right-container {
      width: 100%;
      margin-bottom: 20px;
    }
    
    .table {
      width: 250px;
      height: 250px;
    }
    
    .seat {
      width: 25px;
      height: 25px;
    }
  }

  @media (max-width: 480px) {
    .confirmation-container {
      width: 95%;
      padding: 10px;
    }
    
    .field {
      flex-direction: column;
      align-items: flex-start;
    }
    
    .field select {
      width: 100%;
    }
  }

  /* Estilo para el temporizador */
  #timer-display {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #033e59;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    z-index: 9999;
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
      <div class="left-container">
        <div class="table-container">
          <h2 style="margin-bottom: 120px;">Reservar Mesa</h2> 
          <div class="table">4
            
            <div class="seat" data-seat="1" style="transform: translate(-20%, -50%) rotate(0deg) translateY(-165px);" onclick="selectSeat(this)"></div>
            <div class="seat" data-seat="2" style="transform: translate(-10%, -40%) rotate(38deg) translateY(-180px);" onclick="selectSeat(this)"></div>
            <div class="seat" data-seat="3" style="transform: translate(-25%, -30%) rotate(72deg) translateY(-205px);" onclick="selectSeat(this)"></div>
            <div class="seat" data-seat="4" style="transform: translate(-30%, -50%) rotate(108deg) translateY(-220px);" onclick="selectSeat(this)"></div>
            <div class="seat" data-seat="5" style="transform: translate(-30%, -40%) rotate(144deg) translateY(-225px);" onclick="selectSeat(this)"></div>
            <div class="seat" data-seat="6" style="transform: translate(-20%, -30%) rotate(180deg) translateY(-210px);" onclick="selectSeat(this)"></div>
            <div class="seat" data-seat="7" style="transform: translate(-30%, -10%) rotate(216deg) translateY(-190px);" onclick="selectSeat(this)"></div>
            <div class="seat" data-seat="8" style="transform: translate(-50%, -30%) rotate(252deg) translateY(-170px);" onclick="selectSeat(this)"></div>
            <div class="seat" data-seat="8" style="transform: translate(-50%, -40%) rotate(288deg) translateY(-160px);" onclick="selectSeat(this)"></div>
            <div class="seat" data-seat="8" style="transform: translate(-50%, -50%) rotate(324deg) translateY(-160px);" onclick="selectSeat(this)"></div>
          </div>
        </div>
      </div>



      
      
      <div class="right-container">
        <div class="form-container">
          <div class="form-group">
            <label for="fecha">Elegir Fecha:</label>
            <input type="date" id="fecha" value="<?php echo date('Y-m-d'); ?>">
            <div class="calendar-container" style="display: none;">
              
            </div>
          </div>
          <div class="form-group">
          <label for="meal">Selecciona una comida:</label>
  <select id="meal" onchange="updateSchedule()">
      <option value="">--Selecciona una opción--</option>
      <option value="desayuno">Desayuno</option>
      <option value="comida">Comida</option>
      <option value="cena">Cena</option>
  </select>

  <label for="schedule">Horario:</label>
  <select id="schedule">
      <option value="">--Selecciona un horario--</option>
  </select>
          </div>
          <label for="mesa">No. de Mesa:</label>
          <input type="number" id="mesa">
          </div>
          <div>
          <label for="asientos">Número de Asientos:</label>
          <input type="number" id="asientos" value="0" min="0" max="10" onchange="seleccionarAsientos()">
          </div>

          
          <div class="field">
            <label for="personas">Personas:</label>
            <label for="adults">Adultos:</label>
            <select id="adults">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <span class="people-icon">
              <img src="https://cdn3.iconfinder.com/data/icons/google-material-design-icons/48/ic_account_child_48px-512.png" alt="People Icon">
            </span>
          </div>

          <div class="field">
            <label for="children">Menores:</label>
            <select id="children">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <span class="people-icon">
              <img src="https://cdn2.iconfinder.com/data/icons/baby-and-childhood-3/85/baby_child_kid_boy-512.png" alt="People Icon">
            </span>
          </div>

          <div class="form-group">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group">
            <label for="telefono">Número de Teléfono:</label>
            <input type="text" id="telefono" placeholder="Ingrese su número de teléfono" pattern="\d{10}" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
  
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Ingrese su correo electrónico">
          </div>

          <div class="form-group">
            <input type="checkbox" id="huesped" name="tipo" value="huesped">
            <label for="huesped">Huésped</label>
          <input type="checkbox" id="visitante" name="tipo" value="visitante">
            <label for="visitante">Visitante</label>
          </div>
          <div class="form-group" id="habitacion-container" style="display: none;">
            <label for="habitacion">N° de Habitación:</label>
            <input type="text" id="habitacion" placeholder="Ingrese su número de habitación">
          </div>



          <button onclick="reservarMesa()">Reservar</button>
          
          <a href="{{ url('/ReservationDetails') }}" class="inicio-button"> aaaa </a>
        </div>
      </div>
      </div>

    <div class="confirmation-container" style="display: none;">
    <div class="logo-container">
    <img alt="Mundo Imperial logo with text 'Entertainment &amp; Hospitality'" height="90" src="https://image-tc.galaxy.tf/wisvg-4z6c6butkkmcww6nrjwx56n1m/recurso-5.svg?width=300" width="300"/>
    <h2>Reservación Confirmada</h2>


  <div id="reservationDetails"></div>

  <div>
    <div id="qrcode"></div>
  
    <button onclick="window.print()">Imprimir</button>

  </div>
  

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
  <script>
        function makeCode(reservationData) {
    // Crear la URL con los datos de la reservación
    const baseURL = "{{ url('/reservacion') }}";
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
          timeSlots = ["08:00-08:20","08:20-08:40", "09:00- 09:20","09:20-09:40","09:40-10:00","10:00-10:20","10:20-10:40","10:40-11:00","11:00-11:20","11:20-11:40","11:40-12:00"];
        } else if (meal === "comida") {
          timeSlots = ["12:00-12:20","12:20-12:40", "13:00- 13:20","13:20-13:40","13:40-14:00","14:00-14:20","14:20-14:40","14:40-15:00","15:00-15:20","15:20-15:40","15:40-16:00","16:00-16:20","16:20-16:40","16:40-17:00","17:00-17:20","17:20-17:40","17:40-18:00"];
        } else if (meal === "cena") {
          timeSlots = ["18:00-18:20","18:20-18:40", "18:40- 19:00","19:00-19:20","19:20-19:40","19:40-20:00","20:00-20:20","20:20-20:40","20:40-21:00","21:00-21:20","21:20-21:40","21:40-22:00","22:00-22:20","22:20-22:40","22:40-23:00","23:00-23:20","23:20-23:40","23:40-00:00"];
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

        // Detener el temporizador
        clearInterval(reservationTimer);
        const timerDisplay = document.getElementById('timer-display');
        if (timerDisplay) timerDisplay.remove();

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

        // Marcar la mesa como reservada en el almacenamiento local
        if (mesa) {
            const mesaLabel = mesa;
            let mesasState = JSON.parse(localStorage.getItem('mesasStateMizumi')) || {};
            mesasState[mesaLabel] = { estado: 'reserved', timestamp: Date.now() };
            localStorage.setItem('mesasStateMizumi', JSON.stringify(mesasState));
            
            // Notificar a otras pestañas del cambio
            const event = new StorageEvent('storage', {
                key: 'mesasStateMizumi',
                newValue: JSON.stringify(mesasState)
            });
            window.dispatchEvent(event);
        }

        // Mostrar la página de confirmación
        document.querySelector('.confirmation-container').style.display = 'block';
        document.querySelector('.container').style.display = 'none';

        let reservationHTML = `
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

<script>
    // Variables para el temporizador
    let reservationTimer;
    let timeLeft = 300; // 5 minutos en segundos (5 x 60 = 300)
    
    // Función para actualizar el display del temporizador
    function updateTimerDisplay() {
        const minutes = Math.floor(timeLeft / 60); // Corregido: dividir entre 60
        const seconds = timeLeft % 60;
        const timerDisplay = document.getElementById('timer-display');
        
        if (timerDisplay) {
            timerDisplay.textContent = `Tiempo: ${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            
            // Cambiar color cuando quedan pocos segundos
            if (timeLeft <= 60) { // Cambia a rojo cuando queda 1 minuto
                timerDisplay.style.backgroundColor = '#ff0000';
            }
        }
    }
    
    // Función para cancelar la reserva
    async function cancelReservation() {
        try {
            const mesaId = new URLSearchParams(window.location.search).get('mesa');
            await fetch("{{ route('reservacion.cancel') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ mesa_id: mesaId })
            });
            
            alert("¡Tiempo agotado! La reserva ha sido cancelada.");
            window.location.href = "{{ route('reservar.mesa') }}";
        } catch (error) {
            console.error('Error al cancelar:', error);
        }
    }
    
    // Iniciar el temporizador
    function initTimer() {
        // Crear elemento del temporizador si no existe
        let timerDisplay = document.getElementById('timer-display');
        if (!timerDisplay) {
            timerDisplay = document.createElement('div');
            timerDisplay.id = 'timer-display';
            timerDisplay.style.position = 'fixed';
            timerDisplay.style.top = '20px';
            timerDisplay.style.right = '20px';
            timerDisplay.style.backgroundColor = '#033e59';
            timerDisplay.style.color = 'white';
            timerDisplay.style.padding = '10px 20px';
            timerDisplay.style.borderRadius = '5px';
            timerDisplay.style.fontWeight = 'bold';
            timerDisplay.style.zIndex = '9999';
            document.body.appendChild(timerDisplay);
        }

        // Mostrar el tiempo inicial (5:00)
        updateTimerDisplay();
        
        // Actualizar cada segundo
        reservationTimer = setInterval(() => {
            timeLeft--;
            updateTimerDisplay();
            
            if (timeLeft <= 0) {
                clearInterval(reservationTimer);
                cancelReservation();
            }
        }, 1000);
    }
    
    // Iniciar cuando la página cargue
    document.addEventListener('DOMContentLoaded', initTimer);
    
    // Detener temporizador si se envía el formulario
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', () => {
            clearInterval(reservationTimer);
            const timerDisplay = document.getElementById('timer-display');
            if (timerDisplay) timerDisplay.remove();
        });
    }
</script>


  </body>
  </html>





