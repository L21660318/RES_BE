<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Residencias - SEPENET</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome para los iconos -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
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

    .main-content:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6); /* Fondo gris para oscurecer la imagen */
      z-index: 0;
    }

    .sidebar {
      background-color: #212131;
      height: 100vh;
      padding-top: 30px;
      box-shadow: 4px 0px 15px rgba(0, 0, 0, 0.5);
    }

    .sidebar .logo {
      font-size: 30px;
      font-weight: bold;
      margin-bottom: 30px;
      text-align: center;
      color: #ffffff;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .sidebar .menu li {
      margin-bottom: 25px;
    }

    .sidebar .menu a {
      text-decoration: none;
      color: #dcdcdc;
      font-size: 20px;
      display: flex;
      align-items: center;
      gap: 15px;
      padding: 15px;
      transition: all 0.3s ease;
      border-radius: 8px;
    }

    .sidebar .menu a:hover {
      background-color: #2c3e50;
      color: #ffffff;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.5);
    }

    .main-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
      z-index: 1;
    }

    .main-header input {
      width: 400px;
      padding: 15px;
      border: none;
      border-radius: 12px;
      background-color: #333333;
      color: #dcdcdc;
      font-size: 18px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
    }

    .main-header input::placeholder {
      color: #7f8c8d;
    }

    .main-header .notification {
      display: flex;
      align-items: center;
      gap: 15px;
      color: #ecf0f1;
    }

    .main-header .notification img {
      width: 40px;
      height: 40px;
    }

    .card-projects {
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

    .card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
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

    /* Responsiveness */
    @media (max-width: 768px) {
      .main-content {
        padding: 20px;
      }
      .main-header input {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar col-3">
      <div class="logo">SEPENET</div>
      <ul class="menu list-unstyled">
        <li><a href="#"><i class="fas fa-school"></i> Dirección de Estudios</a></li>
        <li><a href="#"><i class="fas fa-chart-line"></i> Estadísticas de Residencias</a></li>
        <li><a href="#"><i class="fas fa-book"></i> Bitácoras de Residencias</a></li>
        <li><a href="#"><i class="fas fa-house-user"></i> Residencias</a></li>
        <li><a href="#"><i class="fas fa-file-alt"></i> Documentos de Residencias</a></li>
        <li><a href="#"><i class="fas fa-check-circle"></i> No Adeudo</a></li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content col-9">
      <div class="main-header">
        <input type="text" placeholder="Buscar un proyecto de residencia...">
        <div class="notification">
          <img src="https://img.icons8.com/material-outlined/24/000000/bell--v1.png" alt="Notificaciones">
          <span>3</span>
        </div>
      </div>
      <!-- Tarjetas de proyectos -->
      <div class="card-projects">
        <div class="card">
          <img src="https://www.tuxtla.tecnm.mx/wp-content/uploads/2021/09/resprof_02.jpg" alt="Residencia 1">
          <div class="content">
            <div class="title">Residencia 1</div>
            <div class="desc">Revisión de procesos administrativos</div>
            <a href="#" class="action">Ver detalles</a>
          </div>
        </div>
        <div class="card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCpUZm98Zmg6L0ddSfIHUsomyla_KHdseXnowgZ6WzgrJJhqQjkkv2_gffS4ArydcnAjA&usqp=CAU" alt="Residencia 2">
          <div class="content">
            <div class="title">Residencia 2</div>
            <div class="desc">Optimización de recursos</div>
            <a href="#" class="action">Ver detalles</a>
          </div>
        </div>
        <div class="card">
          <img src="https://www.tuxtla.tecnm.mx/wp-content/uploads/2021/09/PortadaProyectosProf.jpg" alt="Residencia 3">
          <div class="content">
            <div class="title">Residencia 3</div>
            <div class="desc">Desarrollo de software interno</div>
            <a href="#" class="action">Ver detalles</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
