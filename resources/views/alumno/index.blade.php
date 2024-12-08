@extends('layouts.dashboard')

@section('header', 'Mis Proyectos')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>Mi proyecto</h1>
            <input type="text" class="search-input" placeholder="Buscar un proyecto...">
        </div>
        <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Crear Proyecto</a>
        <div class="projects">
            @forelse ($proyectos as $proyecto)
                <div class="card">
                    <div class="content">
                        <span class="title">{{ $proyecto->nombre }}</span>
                        <p class="desc">{{ $proyecto->descripcion }}</p>
                        <a class="action" href="{{ route('proyectos.show', $proyecto->id) }}">Ver más</a>
                    </div>
                </div>
            @empty
                <p>No tienes proyectos creados.</p>
            @endforelse
        </div>
    </div>
@endsection
