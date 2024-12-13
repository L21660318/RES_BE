<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - División de Estudios</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #ffffff, #e3f2fd); /* Fondo degradado */
            color: #333;
        }

        .dashboard-container {
            display: flex;
            min-height: 100vh;
        }

        /* Estilo del menú lateral */
        .sidebar {
            width: 250px;
            background-color: #003B73;
            color: white;
            min-height: 100vh;
            padding: 20px 10px;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
        }

        .sidebar-header {
            text-align: center;
        }

        .sidebar-header .logo {
            width: 80px;
            margin-bottom: 10px;
        }

        .sidebar-menu ul {
            list-style: none;
            padding: 0;
        }

        .sidebar-menu ul li {
            margin: 15px 0;
        }

        .sidebar-menu ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        .sidebar-menu ul li a i {
            margin-right: 10px;
        }

        .sidebar-menu ul li a:hover {
            background-color: #0056A1;
            padding: 10px;
            border-radius: 5px;
        }

        /* Estilo de contenido principal */
        .main-content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            position: relative;
            min-height: 100vh;
            background: url('https://sic.cultura.gob.mx/images/119479') no-repeat center center fixed;
            background-size: cover;
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

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            z-index: 1;
            position: relative;
        }

        .main-header h1 {
            color: #003B73;
            font-size: 24px;
        }

        .user-info {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #333;
        }

        .user-info i {
            margin-left: 10px;
            font-size: 20px;
        }

        .cards-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .card i {
            font-size: 40px;
            color: #003B73;
            margin-bottom: 15px;
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #333;
        }

        .card button {
            background-color: #003B73;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .card button:hover {
            background-color: #0056A1;
        }

        /* Botón de menú lateral */
        .btn-menu {
            font-size: 24px;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.7);
            color: #0d47a1;
            border: none;
            border-radius: 30%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
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
            background-color: #0d47a1;
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
            background: #0d47a1;
            transition: width 0.3s ease;
        }

        .offcanvas .nav-link:hover:after {
            width: 100%;
        }

        .offcanvas .nav-link:hover {
            color: #0d47a1;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Menú lateral -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="https://matehuala.tecnm.mx/SEPRET/Assets/img/favicon.png" alt="Logo" class="logo">
                <h2>SEPRET</h2>
            </div>
            <nav class="sidebar-menu">
                <ul>
                    <li><a href="dashboard.blade.php"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="estadisticas.blade.php"><i class="fas fa-book"></i> Bitácora de Residencias</a></li>
                    <li><a href="EST.blade.php"><i class="fas fa-file-alt"></i> Documentos de Residencias</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Contenido principal -->
        <main class="main-content">
            <header class="main-header">
                <h1>División de Estudios</h1>
                <div class="user-info">
                    <span>Hola, <?= htmlspecialchars($_SESSION['usuario']) ?></span>
                    <i class="fas fa-user-circle"></i>
                </div>
            </header>
            
            <section class="cards-section">
                <div class="card">
                    <i class="fas fa-folder-open"></i>
                    <h3>Proyectos Pendientes</h3>
                    <button>Ver detalles</button>
                </div>
                <div class="card">
                    <i class="fas fa-tasks"></i>
                    <h3>Proyectos Vigentes</h3>
                    <button>Ver detalles</button>
                </div>
                <div class="card">
                    <i class="fas fa-check-circle"></i>
                    <h3>Proyectos Finalizados</h3>
                    <button>Ver detalles</button>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
