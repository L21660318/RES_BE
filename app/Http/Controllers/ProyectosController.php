<?php

use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{
    public function index()
    {
        // Mostrar los proyectos del alumno
        $proyectos = Proyecto::where('usuario_id', auth()->id())->get();
        return view('alumno.proyectos.index', compact('proyectos'));
    }

    public function store(Request $request)
    {
        // Validar el formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'archivo_pdf' => 'required|file|mimes:pdf|max:10240', // 10MB máximo
        ]);

        // Subir el archivo PDF
        $path = $request->file('archivo_pdf')->store('proyectos', 'public');

        // Crear el proyecto
        $proyecto = new Proyecto();
        $proyecto->nombre = $request->input('nombre');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->archivo_pdf = $path;
        $proyecto->usuario_id = auth()->id(); // Asignar el ID del alumno logueado
        $proyecto->save();

        return redirect()->route('alumno.proyecto.index')->with('success', 'Proyecto subido con éxito.');
    }
}
