<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'jefe-departamento')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* Estilos Personalizados */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ffffff, #e3f2fd);
            color: #333;
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

        .main-content:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.7);
            z-index: 0;
        }

        .main-content .header {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background-color: transparent; /* Eliminar la barra blanca, haciéndola transparente */
            padding: 15px;
            border-radius: 8px;
        }

        .main-content .header h1 {
            font-size: 36px;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .main-content .header input {
            padding: 12px;
            width: 300px;
            border: none;
            border-radius: 4px;
            background: #f5f5f5;
            color: #333;
            font-size: 14px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Botón menú lateral más grande */
        .btn-menu {
            font-size: 24px;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.7); /* Fondo transparente */
            color: #0d47a1;
            border: none;
            border-radius: 30%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: absolute; /* Posicionar por encima del fondo */
            top: 20px; /* Ajusta la posición del botón */
            left: 20px; /* Ajusta la posición del botón */
            z-index: 10; /* Asegura que el botón quede por encima del contenido */
        }

        .btn-menu:hover {
            background-color: #0d47a1;
            color: #ffffff;
        }

        /* Ajustar el menú offcanvas */
        .offcanvas {
            background: #ffffff;
            color: #333;
            min-height: 100vh;
            box-shadow: 4px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .offcanvas .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding: 20px;
            background-color: #0d47a1; /* Azul oscuro */
        }

        .offcanvas .logo-container img {
            height: 40px;
            margin-right: 10px;
        }

        .offcanvas .logo {
            font-size: 20px;
            font-weight: bold;
            color: #fff;
        }

        .offcanvas .nav-link {
            color: #333;
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
            background: #0d47a1; /* Azul oscuro */
            transition: width 0.3s ease;
        }

        .offcanvas .nav-link:hover:after {
            width: 100%;
        }

        .offcanvas .nav-link:hover {
            color: #0d47a1; /* Azul oscuro */
        }

        /* Estilo de la sección del perfil */
        .profile-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 10px;
            position: relative;
            box-shadow: 0 5px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            margin-top: 80px;  /* Agregado: Baja el recuadro para evitar que tape el botón */
        }

        .profile-section .profile-image {
            width: 90px;
            height: 100px;
            border-radius: 70%;
            background-color: #0d47a1;
            color: white;
            font-size: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .profile-section .profile-name {
            font-size: 24px;
            font-weight: bold;
            color: #0d47a1;
        }

        .profile-section .profile-email {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .profile-section .btn {
            margin: 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <!-- Botón para abrir el menú lateral (icono grande) -->
    <button class="btn btn-menu m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708"/>
            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708"/>
        </svg>
    </button>

    <!-- Menú lateral (Offcanvas) -->
    <div class="offcanvas offcanvas-start" id="offcanvasMenu" tabindex="-1" aria-labelledby="offcanvasLabel">
        <div class="logo-container">
            <img src="https://th.bing.com/th/id/R.418aad279098b8cee2a075ed29b48011?rik=q23X1HjmoWFcgQ&riu=http%3a%2f%2fwww.veracruz.tecnm.mx%2ftemplates%2frt_manticore%2fcustom%2fimages%2fImagenes%2fA2020%2fwebmay2020%2fwhite+eagle.png&ehk=X%2bhUhCScz6ur03iD%2fn1TgEYVXjltC%2blyuan6qdGnJr4%3d&risl=&pid=ImgRaw&r=0" alt="Logo">
            <div class="logo">Tecnologico nacional de mexico</div>
        </div>
        <ul class="nav flex-column px-3">
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.pagina1') }}"><i class="fas fa-home"></i> Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-project-diagram"></i>Revision</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.pagina2') }}"><i class="fas fa-file-alt"></i> Documentos revisados</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.pagina2') }}"><i class="fas fa-file-alt"></i> Documentos en revision</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.pagina2') }}"><i class="fas fa-file-alt"></i> Documentos</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.pagina2') }}"><i class="fas fa-file-alt"></i> Documentos</a></li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link text-dark">
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- Contenido principal -->
    <main class="main-content">
        <!-- Sección de perfil -->
        <div class="profile-section">
            <div class="logo">Modulo Jefe de departamento</div>
        </div>
    </main>

    




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
