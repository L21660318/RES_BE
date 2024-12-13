<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AdminController extends Controller
{
    public function index()
    {
        // Obtener los usuarios desde la base de datos
        $usuarios = Usuario::all();

        // Pasar los usuarios a la vista
        return view('admin.admin', compact('usuarios'));
    }

    public function admincuen()
    {
        return view('admin.admincuen');
    }
}
