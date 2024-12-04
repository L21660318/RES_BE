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
        /* Copia aquí todo el CSS que proporcionaste */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a1a26, #0e0e18);
            color: #d6d6d6;
            margin: 0;
        }
        /* Incluye el resto de tus estilos */
        ...
    </style>
</head>
<body>
    <!-- Offcanvas Button -->
    <button class="btn btn-dark m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Offcanvas Menu -->
    <div class="offcanvas offcanvas-start" id="offcanvasMenu" tabindex="-1">
        <div class="logo-container">
            <img src="https://es.uni24k.com/media/logos/logo_school_ubf6e84cc_13283000.png" alt="Logo">
            <div class="logo">Tecnologico Nacional De Mexico</div>
        </div>
        <ul class="nav flex-column px-3">
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.pagina1') }}"><i class="fas fa-project-diagram"></i> Página 1</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.pagina2') }}"><i class="fas fa-bell"></i> Página 2</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
