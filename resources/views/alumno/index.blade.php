@extends('layouts.dashboard')

@section('header', 'Subir Proyecto')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>Subir Proyecto</h1>
            <p>Por favor, completa los siguientes campos para cargar tu proyecto.</p>
        </div>
        
        <!-- Formulario para subir proyecto -->
        <form action="{{ route('alumno.proyecto.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Título del Proyecto</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción del Proyecto</label>
                <textarea name="descripcion" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="archivo_pdf">Subir PDF del Proyecto</label>
                <input type="file" name="archivo_pdf" class="form-control" accept=".pdf" required>
            </div>

            <button type="submit" class="btn btn-primary">Subir Proyecto</button>
        </form>

        <hr>

        <div class="projects">
            <h2>Proyectos Subidos</h2>
            <!-- Mostrar proyectos subidos -->
            @foreach($proyectos as $proyecto)
                <div class="card">
                    <div class="image" style="background-image: url('https://via.placeholder.com/300x200');"></div>
                    <div class="content">
                        <span class="title">{{ $proyecto->nombre }}</span>
                        <p class="desc">{{ $proyecto->descripcion }}</p>
                        <p class="student">Alumno: {{ $proyecto->usuario->nombre }}</p>
                        <a class="action" href="{{ asset('storage/' . $proyecto->archivo_pdf) }}" target="_blank">Ver PDF</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
