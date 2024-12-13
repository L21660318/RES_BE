<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitácora de Residencias</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background: url('https://sic.cultura.gob.mx/images/119479') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        .dashboard-container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: linear-gradient(135deg, #003B73, #0056A1);
            color: white;
            min-height: 100vh;
            padding: 20px 10px;
            box-sizing: border-box;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
            transition: all 0.3s;
        }

        .sidebar-menu ul li a i {
            margin-right: 10px;
        }

        .sidebar-menu ul li a:hover {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px;
            border-radius: 5px;
            transform: scale(1.05);
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
            font-size: 26px;
        }

        .user-info {
            display: flex;
            align-items: center;
            font-size: 16px;
            color: #555;
        }

        .user-info i {
            margin-left: 10px;
            font-size: 24px;
            color: #0056A1;
        }

        .form-section {
            margin-bottom: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-select, .form-label {
            font-size: 16px;
            color: #003B73;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 16px;
            width: 100%;
        }

        .progress-section {
            margin-top: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .progress-bar {
            background: #0056A1;
            height: 25px;
            border-radius: 12px;
            transition: width 0.3s ease-in-out;
        }

        .progress-container {
            width: 100%;
            background: #e6e6e6;
            border-radius: 12px;
            overflow: hidden;
        }

        .btn-custom {
            background-color: #0056A1;
            color: white;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            justify-content: center;
        }

        .btn-custom:hover {
            background-color: #003B73;
            transform: scale(1.05);
        }

        .btn-custom i {
            margin-right: 5px;
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
                <h1>Bitácora de Residencias</h1>
                <div class="user-info">
                    <span>Hola, {{ session('usuario') }}</span>
                    <i class="fas fa-user-circle"></i>
                </div>
            </header>

            <!-- Formulario para seleccionar un proyecto -->
            <section class="form-section">
                <form method="POST" action="{{ route('estadisticas.index') }}">
                    @csrf
                    <div class="form-group">
                        <label for="proyecto_id" class="form-label">Selecciona un Proyecto</label>
                        <select name="proyecto_id" id="proyecto_id" class="form-control">
                            <option value="">--Seleccionar Proyecto--</option>
                            @foreach ($proyectos as $proyecto)
                                <option value="{{ $proyecto->id }}" {{ old('proyecto_id', $proyecto_id) == $proyecto->id ? 'selected' : '' }}>
                                    {{ $proyecto->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-custom mt-3">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                </form>
            </section>

            <!-- Sección de progreso -->
            @if ($progreso)
                <section class="progress-section">
                    <h3>Progreso del Proyecto</h3>
                    <div class="progress-container">
                        <div class="progress-bar" style="width: {{ $progreso->porcentaje }}%;"></div>
                    </div>
                    <p>{{ $progreso->etapa_actual }} de {{ $progreso->total_etapas }} etapas completadas.</p>
                </section>

                <!-- Gráfico de avance -->
                <section class="progress-section">
                    <h3>Gráfico de Avance</h3>
                    <canvas id="progressChart"></canvas>
                </section>
            @endif
        </main>
    </div>

    <script>
        const ctx = document.getElementById('progressChart');
        const progressChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($etapas),
                datasets: [{
                    label: 'Progreso',
                    data: @json($datos_etapas),
                    backgroundColor: '#0056A1',
                    borderColor: '#003B73',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>




