<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Estilo de la página de inicio de sesión */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .logo {
            width: 80px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #3498db;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }

        .error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 15px;
        }

        /* Efecto de animación al cargar */
        .login-container {
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo principal -->
        <img src="https://matehuala.tecnm.mx/SEPRET/Assets/img/favicon.png" alt="Logo TecNM" class="logo">
        <h1>Iniciar Sesión</h1>

        <!-- Formulario de inicio de sesión -->
        <form method="POST" action="">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>

        <!-- Mensaje de error -->
        <p class="error" id="error-message"></p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Simulando un error en caso de que se envíen credenciales incorrectas (ejemplo de JS)
        const errorMessage = "Usuario o contraseña incorrectos."; // Simula un error

        if (errorMessage) {
            document.getElementById('error-message').textContent = errorMessage;
        }
    </script>
</body>
</html>
