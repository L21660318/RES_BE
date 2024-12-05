@extends('layouts.app')

@section('title', 'Crear Cuenta')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Crear Cuenta</h2>
    <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Escribe tu nombre" required>
        </div>
        <div class="form-group mb-3">
            <label for="number">Número de Identificación:</label>
            <input type="text" name="number" id="number" class="form-control" placeholder="Ingresa tu numero de control" maxlength="8" pattern="\d{8}" required>
            <small class="form-text text-muted">Tu correo será generado automáticamente: Lxxxxx@matehuala.tecnm.mx</small>
        </div>
        <div class="form-group mb-3">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <div class="form-group mb-3">
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repite tu contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
    </form>
    <div class="d-grid mt-3">
        <a href="{{ route('login') }}" class="btn btn-secondary">Inicia sesión aquí</a>
    </div>
</div>
@endsection
