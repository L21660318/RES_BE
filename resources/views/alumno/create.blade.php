@extends('layouts.dashboard')

@section('header', 'Crear Proyecto')

@section('content')
    <div class="main-content">
        <h1>Crear Proyecto</h1>
        <form action="{{ route('proyectos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Proyecto</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control">
            </div>
            <div class="form-group">
                <label for="archivo_pdf">Archivo PDF</label>
                <input type="file" name="archivo_pdf" id="archivo_pdf" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
        </form>
    </div>
@endsection
