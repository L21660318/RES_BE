<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Pasar los datos del usuario a la vista
        return view('profile', ['user' => $user]);
    }
}
