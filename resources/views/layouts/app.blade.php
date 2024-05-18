<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Pokemon</title>
    <!-- icono -->
    <link rel="icon" href="https://slackmojis.com/emojis/186-pokeball/download">
    <!-- Agrega aquí tus enlaces a archivos CSS, si es necesario -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
