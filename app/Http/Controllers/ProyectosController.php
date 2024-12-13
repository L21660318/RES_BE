<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProyectosController extends Controller
{
    public function create()
    {
        return view('proyectos.create');
    }

    public function index()
    {
        $proyectos = Proyecto::where('usuario_id', Auth::id())->get(); // Obtener todos los proyectos del usuario
        return view('dashboard.index', compact('proyectos')); // Pasar como "proyectos"
    }


    public function store(Request $request)
    {
        try {
            // Validar los datos de entrada
            $request->validate([
                'nombre' => 'required|string|max:255',
                'descripcion' => 'required|string|max:1000',
                'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'archivo_pdf' => 'nullable|file|mimes:pdf|max:2048',
            ], [
                'nombre.required' => 'El nombre del proyecto es obligatorio.',
                'descripcion.required' => 'La descripción es obligatoria.',
            ]);

            // Obtener el correo electrónico del usuario autenticado
            $usuarioEmail = Auth::user()->email;

            // Definir la carpeta basada en el correo electrónico del usuario
            $carpeta = 'archivos/' . $usuarioEmail;

            // Subir la imagen
            $imagenPath = null;
            if ($request->hasFile('imagen')) {
                $imagenPath = $request->file('imagen')->store($carpeta, ['disk' => 'public']);
            }

            // Subir el archivo PDF
            $pdfPath = null;
            if ($request->hasFile('archivo_pdf')) {
                $pdfPath = $request->file('archivo_pdf')->store($carpeta, ['disk' => 'public']);
            }

            // Crear un nuevo proyecto
            Proyecto::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'imagen' => $imagenPath,
                'archivo_pdf' => $pdfPath,
                'usuario_id' => Auth::id(),
            ]);

            return redirect()->route('proyectos.create')->with('success', 'Proyecto creado correctamente.');
        } catch (\Throwable $e) {
            // Registrar el error en los logs
            Log::error('Error en la creación del proyecto: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);

            // Mostrar errores en el navegador si APP_DEBUG está habilitado
            if (config('app.debug')) {
                return response()->json([
                    'error' => $e->getMessage(),
                    'trace' => $e->getTrace()
                ], 500);
            }

            // Redirigir con un mensaje de error si APP_DEBUG está deshabilitado
            return redirect()->back()->withErrors(['error' => 'Ocurrió un error al crear el proyecto. Por favor, inténtalo de nuevo.']);
        }
    }
}
