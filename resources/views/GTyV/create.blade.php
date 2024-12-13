@extends('layouts.gtyv')

@section('header', 'Registrar Nueva Empresa')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>Registrar Empresa</h1>
        </div>
        <form action="{{ route('empresas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre de la Empresa</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rfc">RFC</label>
                <input type="text" name="rfc" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lema">Lema</label>
                <input type="text" name="lema" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mision">Misión</label>
                <textarea name="mision" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Empresa</button>
        </form>
    </div>
@endsection
