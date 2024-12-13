@extends('layouts.dashboard')

@section('header', 'Modificar Estado de la Empresa')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>Modificar Estado de la Empresa</h1>
        </div>
        <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" class="form-control" required>
                    <option value="en proceso" {{ $empresa->estado == 'en proceso' ? 'selected' : '' }}>En proceso</option>
                    <option value="aceptado" {{ $empresa->estado == 'aceptado' ? 'selected' : '' }}>Aceptado</option>
                    <option value="rechazado" {{ $empresa->estado == 'rechazado' ? 'selected' : '' }}>Rechazado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Estado</button>
        </form>
    </div>
@endsection
