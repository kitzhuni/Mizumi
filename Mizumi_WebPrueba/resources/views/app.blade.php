<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    
    @vite(['resources/css/sidebar.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Sidebar o dashboard como le llamen -->
    <div class="sidebar">
        @include('layout.sidebar')
    </div>

    <!-- Contenido -->
    <div class="content">
        @yield('content')
    </div>
    
 
    
    
</body>


</html>
