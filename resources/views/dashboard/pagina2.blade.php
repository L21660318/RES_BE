@extends('dashboard')

@section('title', 'Página 2')

@section('header', 'Gestión de Proyectos')

@section('content')
    <div class="card">
        <div class="image" style="background-image: url('https://via.placeholder.com/300x150');"></div>
        <div class="content">
            <span class="title">Proyecto 2</span>
            <p class="desc">Descripción del proyecto 2</p>
            <a class="btn btn-primary" href="#">Ver más</a>
        </div>
    </div>
@endsection
