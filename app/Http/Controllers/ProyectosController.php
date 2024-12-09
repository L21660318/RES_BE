<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto; // Importa el modelo


class ProyectosController extends Controller
{
    public function showProyectos()
    {
        // Obtenemos todos los proyectos usando el modelo
        $proyectos = Proyecto::all();

        // Pasamos los datos a la vista
        return view('dashboard.index', compact('proyectos'));
    }
}
