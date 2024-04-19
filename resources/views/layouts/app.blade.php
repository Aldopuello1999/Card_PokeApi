<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Pokemon</title>
    <!-- icono -->
    <link rel="icon" href="https://slackmojis.com/emojis/186-pokeball/download">
    <!-- Agrega aquí tus enlaces a archivos CSS, si es necesario -->
</head>
<body>
    <nav>
        @include('layouts.navbar.navbar')<!-- Aquí va la barra de navegación -->
    </nav>

    <div class="container">
        @yield('content') <!-- Esto es donde se insertará el contenido de las vistas -->
    </div>

    <footer>
        <!-- Aquí va el pie de página -->
    </footer>

    <!-- Agrega aquí tus enlaces a archivos JavaScript, si es necesario -->
</body>
    <!-- Scripts Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</html>
