<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #002f4b;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #001f3b;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Editar Usuario</h2>
        <form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ $usuario->name }}" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $usuario->email }}" required>
            </div>
            <div>
                <label for="puesto">Puesto:</label>
                <input type="text" id="puesto" name="puesto" value="{{ $usuario->puesto }}" required>
            </div>

            <div>
                <label for="permisos">Permisos:</label>
                <select id="permisos" name="permisos" required>
                    <option value="Administrador" {{ $usuario->permisos == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                    <option value="Master" {{ $usuario->permisos == 'Master' ? 'selected' : '' }}>Master</option>
                </select>
            </div>

            <div>
                <label for="password">Contraseña (dejar en blanco para no cambiar):</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>