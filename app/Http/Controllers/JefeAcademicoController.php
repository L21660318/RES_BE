<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\TieneFase; // Modelo de la tabla tienefases
use Illuminate\Http\Request;

class JefeAcademicoController extends Controller
{
    public function index()
    {
        // Obtener los proyectos que están en la fase 3 (en revisión por academia) desde la tabla tienefases
        $proyectos = Proyecto::whereHas('tienefases', function ($query) {
            $query->where('fase_id', 3);  // Filtramos por fase_id = 3
        })->get();

        return view('jefe-academico.index', compact('proyectos'));
    }

    public function cambiarEstado(Request $request, $proyectoId, $estado)
    {
        // Validar el comentario
        $request->validate([
            'comentarios' => 'nullable|string|max:500',
        ]);

        // Buscar el proyecto y su fase
        $tieneFase = TieneFase::where('proyecto_id', $proyectoId)
                            ->where('fase_id', 3)  // Fase en revisión
                            ->first();

        if ($tieneFase) {
            // Cambiar el estado
            $tieneFase->fase_id = $estado;

            // Guardar el comentario si existe
            if ($request->has('comentarios')) {
                $tieneFase->comentarios = $request->comentarios;
            }

            $tieneFase->save();
        }

        return redirect()->route('jefe-academico.index');
    }


}

