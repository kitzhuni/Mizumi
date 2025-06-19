<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro de usuarios</title>
    <style>
        
        body {
             background-image: url('{{ asset('storage/Fotos Hoteles/Tres-propiedades.jpg') }}');
            font-family: 'Arial', sans-serif;
            background-color: #1a1a1a;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #000000;
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            color: #000000;
            font-size: 14px;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="password"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #d4a373;
            background-color: #f5f5f5;
            color: #a9a9a9;
            font-size: 14px;
        }
        input[type="text"]::placeholder, input[type="email"]::placeholder, input[type="password"]::placeholder {
            color: #a9a9a9;
        }
        select {
            appearance: none;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iOCIgdmlld0JveD0iMCAwIDE2IDgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEgMUwxNiA4TTE2IDFMMSA4IiBzdHJva2U9IiM2NjYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+PC9zdmc+') no-repeat right 10px center;
            background-size: 10px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #0d1b2a;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1a2b3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registro de usuario</h1>
        <form action="{{ route('registrousuarios.store') }}" method="POST">
            @csrf 
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="name" placeholder="Ingrese el nombre del Anfitrión" required>

            <label for="correo">Correo</label>
            <input type="email" id="correo" name="email" placeholder="Ingrese el correo electrónico del Anfitrión" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingrese la contraseña" required>

            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme la contraseña" required>


            <label for="puesto">Puesto</label>
            <input type="text" id="puesto" name="puesto" placeholder="Ingrese el nombre del Departamento" required>

            <label for="permisos">Permisos:</label>
            <select id="permisos" name="permisos" required>
                <option value="" disabled selected>Seleccione el tipo de usuario</option>
                <option value="administrador">Administrador</option>
                <option value="master">Master</option>
            </select>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>