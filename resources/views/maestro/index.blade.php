@extends('layouts.dashboard')

@section('header', 'Proyectos de Alumnos')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>Proyectos de Alumnos</h1>
            <input type="text" class="search-input" placeholder="Buscar un proyecto...">
        </div>
        <div class="projects">
            <!-- Aquí se añadirán las tarjetas de proyectos dinámicamente -->
            <div class="card">
                <div class="image" style="background-image: url('https://via.placeholder.com/300x200');"></div>
                <div class="content">
                    <span class="title">Título del Proyecto</span>
                    <p class="desc">Descripción breve del proyecto.</p>
                    <p class="student">Alumno: Nombre del Alumno</p>
                    <a class="action" href="#">Ver más</a>
                </div>
            </div>
        </div>
    </div>
@endsection
