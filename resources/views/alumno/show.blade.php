@extends('layouts.dashboard')

@section('header', $proyecto->nombre)

@section('content')
    <div class="project-details">
        <h1>{{ $proyecto->nombre }}</h1>
        <p>{{ $proyecto->descripcion }}</p>
        @if($proyecto->imagen)
            <img src="{{ asset('storage/' . $proyecto->imagen) }}" alt="{{ $proyecto->nombre }}">
        @endif
        @if($proyecto->archivo_pdf)
            <a href="{{ asset('storage/' . $proyecto->archivo_pdf) }}" target="_blank">Descargar PDF</a>
        @endif
    </div>
@endsection
