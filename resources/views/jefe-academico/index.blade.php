@extends('layouts.academia')

@section('header', 'Proyectos en Revisión')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>Proyectos en Revisión por Academia</h1>
            <input type="text" class="search-input" placeholder="Buscar un proyecto...">
        </div>
        <div class="projects">
            @forelse ($proyectos as $proyecto)
                <div class="card">
                    <div class="content">
                        <!-- Imagen del proyecto -->
                        <div class="image">
                            <img src="{{ asset('storage/' . $proyecto->imagen) }}" alt="Imagen del proyecto">
                        </div>
                        <span class="title">{{ $proyecto->nombre }}</span>
                        <p class="desc">{{ Str::limit($proyecto->descripcion, 100) }}</p>

                        <!-- Enlace para ver el PDF -->
                        <a class="action" href="{{ asset('storage/' . $proyecto->archivo_pdf) }}" target="_blank">Ver PDF</a>

                        <!-- Formulario para aceptar o rechazar con un solo campo de comentario -->
                        <form action="{{ route('jefe-academico.cambiarEstado', [$proyecto->id, 5]) }}" method="POST">
                            @csrf
                            <label for="comentarios">Comentario:</label>
                            <textarea id="comentarios" name="comentarios" rows="4" cols="50" placeholder="Escribe un comentario..."></textarea>

                            <!-- Botón para aceptar -->
                            <button type="submit" class="btn btn-success" name="estado" value="5">Aceptar</button>
                        </form>

                        <form action="{{ route('jefe-academico.cambiarEstado', [$proyecto->id, 1]) }}" method="POST">
                            @csrf
                            <label for="comentarios">Comentario:</label>
                            <textarea id="comentarios" name="comentarios" rows="4" cols="50" placeholder="Escribe un comentario..."></textarea>

                            <!-- Botón para rechazar -->
                            <button type="submit" class="btn btn-danger" name="estado" value="1">Rechazar</button>
                        </form>
                    </div>
                </div>
            @empty
                <p>No hay proyectos en revisión.</p>
            @endforelse
        </div>
    </div>
@endsection


<style>
    /* Estilos de las tarjetas */
    .main-content {
        background: #f5f5f5;
        padding: 30px;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .header h1 {
        font-size: 28px;
        color: #333;
    }

    .search-input {
        padding: 10px;
        width: 300px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    .projects {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    /* Estilo de la imagen */
    .card .image img {
        width: 100%;
        height: 150px; /* Ajuste de altura */
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .card .title {
        font-size: 20px;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 15px;
    }

    .card .desc {
        font-size: 14px;
        color: #555;
        margin-bottom: 20px;
        height: 60px; /* Para que las descripciones largas no deformen la tarjeta */
        overflow: hidden;
    }

    .card .action {
        display: inline-block;
        padding: 10px 20px;
        font-size: 14px;
        color: #fff;
        background-color: #007bff;
        border-radius: 5px;
        text-decoration: none;
        margin-bottom: 15px;
    }

    .card .action:hover {
        background-color: #0056b3;
    }

    .card .actions {
        justify-content: space-between;
    }

    .card .btn {
        padding: 8px 16px;
        font-size: 14px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .card .btn-success {
        background-color: #28a745;
        color: white;
    }

    .card .btn-danger {
        background-color: #dc3545;
        color: white;
    }

    .card .btn:hover {
        opacity: 0.8;
    }

    .card textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical;
    margin-bottom: 10px;
    }


</style>
