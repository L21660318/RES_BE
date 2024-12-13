<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::where('usuario_id', Auth::id())->get(); // Proyectos del usuario actual
        return view('dashboard.index', compact('proyectos')); // Enviar $proyectos a la vista
    }

    public function pagina1()
    {
        return view('dashboard.pagina1');
    }
    
    public function pagina2()
    {
        return view('dashboard.pagina2');
    }
}