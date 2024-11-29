<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio Social</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    

</head>
<body>
    <header>
        <h1>Tecnológico Nacional de México, Campus Matheula</h1>
    </header>

    <div class="container">
        <!-- Panel de búsqueda -->
        <div class="panel">
            <h2>Estatus del Proyecto</h2>
            <input type="text" id="search" placeholder="Buscar alumno">
        </div>

        <!-- Barra de progreso -->
        <div class="progress-bar-container">
            <div class="active"></div>
            <div class="active"></div>
            <div class="active"></div>
            <div></div>
            <div></div>
        </div>

        <!-- Constancia de Liberación -->
        <div class="panel download-section">
            <h3 class="section-title">Constancia de Liberación</h3>
            <p>Descarga tu constancia de liberación de servicio social.</p>

            <!-- Descarga -->
            <div>
                <p>Pasos a seguir:</p>
                <button class="btn-download">Descargar constancia de liberación en formato PDF</button>
            </div>

            <!-- Subir archivo -->
            <button class="btn-upload">Subir archivo</button>
        </div>
    </div>

    <footer>
        <p>Tecnológico Nacional de México, Campus Matheula</p>
    </footer>
</body>
</html>
