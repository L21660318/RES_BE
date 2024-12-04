<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* Estilos Personalizados */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a1a26, #0e0e18);
            color: #d6d6d6;
            margin: 0;
        }

        .main-content {
            padding: 40px;
            background: url('https://sic.cultura.gob.mx/images/119479') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            min-height: 100vh;
            overflow-y: auto;

        }

        .main-content:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: (0, 0, 0, 0.7);
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

        .main-content .header input {
            padding: 12px;
            width: 300px;
            border: none;
            border-radius: 4px;
            background: #2b2b38;
            color: #d6d6d6;
            font-size: 14px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
        }
        

        /* Ajustar el menú offcanvas */
        .offcanvas {
            background: #212131;
            color: #d6d6d6;
            min-height: 100vh;
        }

        .offcanvas .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding: 20px;

        }

        .offcanvas .logo-container img {
            height: 40px;
            margin-right: 10px;
        }

        .offcanvas .logo {
            font-size: 20px;
            font-weight: bold;
            color: #a54242;
        }

        .offcanvas .nav-link {
            color: #d6d6d6;
            font-weight: bold;
            font-size: 16px;
            margin: 10px 0;
            padding: 12px 15px;
            text-decoration: none;
            display: block;
            position: relative;
            transition: all 0.3s ease;
        }

        .offcanvas .nav-link:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background: #ff4040;
            transition: width 0.3s ease;
        }

        .offcanvas .nav-link:hover:after {
            width: 100%;
        }

        .offcanvas .nav-link:hover {
            color: #fff;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px; /* Espacio entre elementos */
        }

        .card {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 8px;
            padding: 16px;
            text-align: center;
        }

        .card .image {
            width: 100%;
            height: 150px;
            background-size: cover;
            border-radius: 4px;
        }

        .card .title {
            color: #fff;
            font-size: 18px;
            font-weight: bold;
        }

        .card .desc {
            color: #d6d6d6;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <!-- Botón para abrir el menú lateral -->
    <button class="btn btn-dark m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Menú lateral (Offcanvas) -->
    <div class="offcanvas offcanvas-start" id="offcanvasMenu" tabindex="-1" aria-labelledby="offcanvasLabel">
        <div class="logo-container">
            <img src="https://es.uni24k.com/media/logos/logo_school_ubf6e84cc_13283000.png" alt="Logo">
            <div class="logo">Tecnologico nacional de mexico </div>
        </div>
        <ul class="nav flex-column px-3">
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.pagina1') }}"><i class="fas fa-project-diagram"></i> Proyectos</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-bell"></i> Notificaciones</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-file-alt"></i> Documentos</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Mi Cuenta</a></li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link text-white">
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Contenido principal -->
    <main class="main-content">
        <div class="projects">
            @yield('content')
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
