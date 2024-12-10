@extends('layouts.dashboard')

@section('header', 'Proyectos Nuevos')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>Proyectos Nuevos</h1>
            <input type="text" class="search-input" placeholder="Buscar un proyecto...">
        </div>
        <div class="projects">
            @foreach($proyectos as $proyecto)
            <div class="card">
                <!-- Imagen dinámica -->
                <div class="image" style="background-image: url('{{ asset($proyecto->imagen) }}');"></div>
                <div class="content">
                    <!-- Nombre del proyecto -->
                    <span class="title">{{ $proyecto->nombre }}</span>
                    <!-- Descripción -->
                    <p class="desc">{{ $proyecto->descripcion }}</p>
                    <!-- Enlace al PDF -->
                    <a class="action" href="{{ asset($proyecto->archivo_pdf) }}" target="_blank">Ver más</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
