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
            background-color: #f4f4f9;
        }

        .dashboard-container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #003B73;
            color: white;
            min-height: 100vh;
            padding: 20px 10px;
            box-sizing: border-box;
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

        .main-content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }

        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
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
