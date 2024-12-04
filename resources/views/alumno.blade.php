<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Alumno</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* General Reset */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a1a26, #0e0e18);
            color: #d6d6d6;
            margin: 0;
        }

        /* Sidebar */
        .sidebar {
            background: #212131;
            color: #d6d6d6;
            min-height: 100vh;
            width: 250px;
            position: fixed;
            padding: 20px;
        }

        .sidebar .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .sidebar .logo-container img {
            height: 40px;
            margin-right: 10px;
        }

        .sidebar .logo {
            font-size: 26px;
            font-weight: bold;
            color: #a54242;
        }

        .sidebar .nav-link {
            color: #d6d6d6;
            font-weight: bold;
            font-size: 16px;
            margin: 10px 0;
            padding: 12px 20px;
            text-decoration: none;
            display: block;
            position: relative;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background: #ff4040;
            transition: width 0.3s ease;
        }

        .sidebar .nav-link:hover:after {
            width: 100%;
        }

        .sidebar .nav-link:hover {
            color: #fff;
        }

        .sidebar .nav-link i {
            margin-right: 15px;
        }

        /* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 40px;
            background: url('https://sic.cultura.gob.mx/images/119479') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            min-height: 100vh;
        }

        .main-content:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 0;
        }

        .main-content .header {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .main-content .header h1 {
            font-size: 36px;
            color: #a0d9ff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            position: relative;
            z-index: 1;
        }

        .card {
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.15);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            backdrop-filter: blur(8px);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card .image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            background-color: #eee;
            background-size: cover;
            background-position: center;
        }

        .card .content {
            padding: 16px;
            display: flex;
            flex-direction: column;
        }

        .card .title {
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .card .desc {
            color: #d6d6d6;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .card .action {
            align-self: flex-start;
            padding: 8px 12px;
            border-radius: 4px;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .card .action:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-container">
            <img src="https://es.uni24k.com/media/logos/logo_school_ubf6e84cc_13283000.png" alt="Logo">
            <div class="logo">SEPRENET</div>
        </div>
        <a class="nav-link" href="#"><i class="fas fa-home"></i> Inicio</a>
        <a class="nav-link" href="#"><i class="fas fa-project-diagram"></i> Mis Proyectos</a>
        <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notificaciones</a>
        <a class="nav-link" href="#"><i class="fas fa-file-alt"></i> Documentos</a>
        <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Mi Cuenta</a>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Bienvenido, Alumno</h1>
        </div>
            <div class="projects">
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
    </div>
</body>

</html>