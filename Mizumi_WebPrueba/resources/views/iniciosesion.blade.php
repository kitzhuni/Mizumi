<!DOCTYPE html>
<html>
 <head>
  <title>
   Login Page
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

   <!-- Se agregan los estilos de bosstrap para poder usar el modal-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
   body {
   
   /**Se reemplaza el fondo de color por el de la imagen */
   background-image: url('{{ asset('storage/Fotos Hoteles/Tres-propiedades.jpg') }}');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            /**Se agrega el size para para adaptarse a la resolución de la pantalla */
            background-size: cover;
        }
     

        .login-container {
            background-color: #d3d3d3;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            /**Se desabilita la altura que estaba de forma estática */
            /**height: 470px;**/
            }

   
        .login-container img {
            width: 70%;
            height: auto;
        }
        .login-container h2 {
            color: #033e59;
            margin: 20px 0;
        }
        .login-container label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            color: #000;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container a {
            color: #000;
            text-decoration: none;
            font-size: 14px;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
        .login-container button {
            background-color: #033e59;
            color: #ecfbfc;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
        .login-container button:hover {
            background-color: #ECFBFC;
            color: #000;
        }

    
        .centered-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    
        
  </style>
 </head>
 <body>
  <div class="login-container">
  <img class="centered-image" alt="Mundo Imperial logo with text 'Entertainment &amp; Hospitality'" height="90" src="https://image-tc.galaxy.tf/wisvg-4z6c6butkkmcww6nrjwx56n1m/recurso-5.svg?width=300" width="300"/>
   <h2>
    Iniciar sesión
   </h2>

   @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
       <form action="{{ route('login.post') }}" method="POST">
    @csrf
    <label for="email">Correo electrónico</label>
    <input type="text" id="email" name="email" placeholder="Ingrese su correo" required>

    <label for="password">Contraseña</label>
    <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>

    <a href="#" onclick="mostrarModal()">¿Olvidó su contraseña?</a>

    <button type="submit">Iniciar sesión</button>

    <p><a href="{{ url('/registrousuarios') }}" id="show-register">Regístrarse</a></p>
</form>

<!-- MODAL -->
<div id="modal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="cerrarModal()">&times;</span>
        <h3>Recuperar Contraseña</h3>
        <p>
            Le informamos que, para restablecer su contraseña, debe comunicarse con el Departamento de Calidad mediante correo electrónico.
        </p>
        <p>
            Al enviar su mensaje, por favor indique su nombre de usuario, su unidad de negocio y la razón de su solicitud.
        </p>
    </div>
</div>

<!-- ESTILOS -->
<style>
.modal {
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px 30px;
    border: 1px solid #ccc;
    width: 80%;
    max-width: 500px;
    border-radius: 8px;
    box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
    font-family: 'Arial', sans-serif;
}

.modal-content h3 {
    margin-top: 0;
    font-size: 18px;
    color: #002E4B;
}

.modal-content p {
    font-size: 14px;
    color: #333;
    margin-bottom: 10px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover {
    color: #000;
}
</style>

<!-- SCRIPT -->
<script>
function mostrarModal() {
    document.getElementById('modal').style.display = 'block';
}

function cerrarModal() {
    document.getElementById('modal').style.display = 'none';
}
</script>

  </div>
  
 </body>
 
</html>