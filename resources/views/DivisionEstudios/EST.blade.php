<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos de Residencias</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
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
            background-color: transparent;
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

        .dashboard-container { display: flex; }
        .sidebar { width: 250px; background: linear-gradient(135deg, #003B73, #0056A1); color: white; min-height: 100vh; padding: 20px 10px; box-sizing: border-box; }
        .sidebar-header { text-align: center; }
        .sidebar-header .logo { width: 80px; margin-bottom: 10px; }
        .sidebar-menu ul { list-style: none; padding: 0; }
        .sidebar-menu ul li { margin: 15px 0; }
        .sidebar-menu ul li a { color: white; text-decoration: none; font-size: 16px; display: flex; align-items: center; }
        .sidebar-menu ul li a i { margin-right: 10px; }
        .sidebar-menu ul li a:hover { background: rgba(255, 255, 255, 0.2); padding: 10px; border-radius: 5px; }
        .main-content { flex: 1; padding: 20px; }
        .main-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .main-header h1 { color: #003B73; font-size: 26px; }
        .user-info { display: flex; align-items: center; font-size: 16px; color: #555; }
        .user-info i { margin-left: 10px; font-size: 24px; color: #0056A1; }
        .form-section { margin-bottom: 20px; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .form-select, .form-label { font-size: 16px; color: #003B73; }
        .form-control { border: 1px solid #ccc; border-radius: 8px; padding: 10px 15px; font-size: 16px; width: 100%; }
        .table-responsive { box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 8px; background-color: #fff; margin-top: 20px; }
        .table th, .table td { vertical-align: middle; padding: 15px; font-size: 14px; text-align: center; }
        .table-striped tbody tr:nth-child(odd) { background-color: #f9f9f9; }
        .table-hover tbody tr:hover { background-color: #eef3fc; }
        .btn-custom { background-color: #0056A1; color: white; border-radius: 50px; padding: 10px 20px; font-size: 16px; transition: background-color 0.3s, transform 0.3s; display: inline-flex; align-items: center; text-decoration: none; justify-content: center; }
        .btn-custom:hover { background-color: #003B73; transform: scale(1.05); }
        .btn-custom i { margin-right: 5px; }
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
                <h1>Documentos de Residencias</h1>
                <div class="user-info">
                    <span>Hola, <?= htmlspecialchars($_SESSION['usuario']) ?></span>
                    <i class="fas fa-user-circle"></i>
                </div>
            </header>

            <section class="table-section">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Total de Trabajos</th>
                                <th>Trabajos Pendientes</th>
                                <th>Trabajos Fallidos</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobBatches as $jobBatch)
                                <tr>
                                    <td>{{ $jobBatch->name }}</td>
                                    <td>{{ $jobBatch->total_jobs }}</td>
                                    <td>{{ $jobBatch->pending_jobs }}</td>
                                    <td>{{ $jobBatch->failed_jobs }}</td>
                                    <td>
                                        <a href="{{ route('descargar.documento', ['id' => $jobBatch->id]) }}" class="btn btn-custom btn-sm">
                                            <i class="fas fa-download"></i> Descargar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

