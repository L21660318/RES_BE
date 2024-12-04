<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();  // Obtén todos los proyectos
        return view('alumno', compact('proyectos'));  // Pasa los proyectos a la vista
    }
}