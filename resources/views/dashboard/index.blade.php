@extends('layouts.dashboard')

@section('header', 'Proyectos Nuevos')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>Proyectos Nuevos</h1>
            <input type="text" class="search-input" placeholder="Buscar un proyecto...">
        </div>
        <div class="projects">
            <!-- Tarjeta 1 -->
            <div class="card">
                <div class="image" style="background-image: url('https://www.doblemente.com/wp-content/uploads/2016/03/posicionamiento.jpg');"></div>
                <div class="content">
                    <span class="title">Sistema de Reservas</span>
                    <p class="desc">Gestión completa de espacios de trabajo.</p>
                    <a class="action" href="#">Ver más</a>
                </div>
            </div>
            <!-- Tarjeta 2 -->
            <div class="card">
                <div class="image" style="background-image: url('https://img.computing.es/wp-content/uploads/2018/12/20122931/Redes-ciberseguridad.jpeg');"></div>
                <div class="content">
                    <span class="title">Red de Monitoreo</span>
                    <p class="desc">Supervisión avanzada con cámaras inteligentes.</p>
                    <a class="action" href="#">Ver más</a>
                </div>
            </div>
            <!-- Tarjeta 3 -->
            <div class="card">
                <div class="image" style="background-image: url('https://www.esan.edu.pe/images/blog/2015/08/10/4-modelos-evaluar-proyectos-inversion-principal.jpg');"></div>
                <div class="content">
                    <span class="title">Evaluación de Proyectos</span>
                    <p class="desc">Plataforma para evaluar ideas innovadoras.</p>
                    <a class="action" href="#">Ver más</a>
                </div>
            </div>
        </div>
    </div>
@endsection