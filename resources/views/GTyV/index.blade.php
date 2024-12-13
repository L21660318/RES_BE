@extends('layouts.dashboard')

@section('header', 'Gestión Tecnológica y Vinculación')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>Empresas Registradas</h1>
            <a href="{{ route('empresas.create') }}" class="btn btn-primary">Registrar Nueva Empresa</a>
        </div>
        <div class="companies">
            @forelse ($empresas as $empresa)
                <div class="card">
                    <div class="content">
                        <span class="title">{{ $empresa->nombre }}</span>
                        <p class="desc">RFC: {{ $empresa->rfc }}</p>
                        <p class="desc">{{ $empresa->lema }}</p>
                        <p class="desc">{{ $empresa->mision }}</p>
                        <p class="desc">Estado: {{ ucfirst($empresa->estado) }}</p>
                        <a class="action" href="{{ route('empresas.edit', $empresa->id) }}">Modificar Estado</a>
                    </div>
                </div>
            @empty
                <p>No tienes empresas registradas.</p>
            @endforelse
        </div>
    </div>
@endsection
