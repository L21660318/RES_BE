<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <!-- Importar Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #0d47a1; /* Fondo azul */
            background-image: url('https://th.bing.com/th/id/R.418aad279098b8cee2a075ed29b48011?rik=q23X1HjmoWFcgQ&riu=http%3a%2f%2fwww.veracruz.tecnm.mx%2ftemplates%2frt_manticore%2fcustom%2fimages%2fImagenes%2fA2020%2fwebmay2020%2fwhite+eagle.png&ehk=X%2bhUhCScz6ur03iD%2fn1TgEYVXjltC%2blyuan6qdGnJr4%3d&risl=&pid=ImgRaw&r=0'); /* Imagen */
            background-repeat: no-repeat; /* No repetir la imagen */
            background-position: top left; /* Posiciona la imagen en la parte superior */
            background-size: 260px; /* Ajusta el tamaño de la imagen */
            color: grey;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .main-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .left-section {
            width: 50%;
            color: white;
            margin-top: -300px;
            padding-left: 180px;
        }

        .left-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 50px;
        }

        .left-section p {
            font-size: 1.2rem;
            line-height: 1.5;
        }

        .right-section {
            background-color: #D1D1D1;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            color: black;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
            background-color: #0d47a1;
            border: none;
        }

        .btn-primary:hover {
            background-color: #002171;
        }

        .extra-links {
            text-align: center;
            margin-top: 10px;
        }

        .extra-links a {
            text-decoration: none;
            color: #0d47a1;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }

        .bottom-rectangle {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 300px;
            background-color: white;
            z-index: 0;
        }
    </style>
</head>
<body>
    <div class="bottom-rectangle"></div>
    <div class="container">
        <div class="main-section">
            <!-- Sección izquierda -->
            <div class="left-section">
                <h1>CREAR CUENTA</h1>
                <p>
                    Solo para estudiantes del Instituto Tecnológico de Matehuala. <br>
                    Crea tu cuenta para acceder a las oportunidades de residencias profesionales, registrar tu proyecto y dar seguimiento a tus actividades.
                </p>
            </div>

            <!-- Formulario de registro -->
            <div class="right-section">
                <h2 class="text-center mb-4">Crear Cuenta</h2>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Escribe tu nombre" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="number">Número de Identificación:</label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="Ingresa tu número de control" maxlength="8" pattern="\d{8}" required>
                        <small class="form-text text-muted">Tu correo será generado automáticamente: Lxxxxx@matehuala.tecnm.mx</small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Contraseña:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_confirmation">Confirmar Contraseña:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repite tu contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrar</button>
                </form>
                <div class="d-grid mt-3">
                    <a href="{{ route('login') }}" class="btn btn-secondary">Inicia sesión aquí</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Importar Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
