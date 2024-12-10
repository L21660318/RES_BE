<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProyectoController extends Controller
{
    // Mostrar lista de proyectos del alumno
    public function index()
    {
        $proyectos = Proyecto::where('usuario_id', Auth::id())->get();
        return view('alumno.index', compact('proyectos'));
    }

    // Mostrar formulario para crear un proyecto
    public function create()
    {
        return view('alumno.create');
    }

    // Guardar un nuevo proyecto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'archivo_pdf' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        $imagenPath = $request->file('imagen') ? $request->file('imagen')->store('imagenes', 'public') : null;
        $archivoPdfPath = $request->file('archivo_pdf') ? $request->file('archivo_pdf')->store('archivos', 'public') : null;

        Proyecto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath,
            'archivo_pdf' => $archivoPdfPath,
            'usuario_id' => Auth::id(),
        ]);

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado con éxito.');
    }

    // Mostrar detalles de un proyecto
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('dashboard.index', compact('proyecto'));
    }
}
