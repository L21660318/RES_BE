<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Alumno</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Sidebar */
        .sidebar {
            background-color: #003B73;
            color: white;
            min-height: 100vh;
            width: 250px;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
        }

        .sidebar a:hover {
            background-color: #0056A1;
        }

        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header h1 {
            text-align: center;
            color: #003B73;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Projects Grid */
        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card .image {
            width: 100%;
            height: 150px;
            background-size: cover;
            background-position: center;
        }

        .card .content {
            padding: 16px;
        }

        .card .title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #003B73;
        }

        .card .desc {
            font-size: 14px;
            color: #666;
            margin-bottom: 12px;
        }

        .card .action {
            display: inline-block;
            padding: 8px 16px;
            background-color: #003B73;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background 0.3s ease;
        }

        .card .action:hover {
            background-color: #0056A1;
        }

        /* Logout Button */
        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #FF4C4C;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #E04343;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Inicio</a>
        <a href="#">Mi Proyecto</a>
        <a href="#">Documentos</a>
        <a href="#">Notificaciones</a>
        <a href="#">Mi Cuenta</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <button class="logout-btn">Cerrar Sesión</button>
        <div class="header">
            <h1>Bienvenido, Alumno</h1>
        </div>
        <div class="projects">
            <!-- Dynamic Projects Section -->
            @foreach($proyectos as $proyecto)
            <div class="card">
                <div class="image" style="background-image: url('{{ $proyecto->imagen }}');"></div>
                <div class="content">
                    <span class="title">{{ $proyecto->nombre }}</span>
                    <p class="desc">{{ $proyecto->descripcion }}</p>
                    <a class="action" href="#">Ver más</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
