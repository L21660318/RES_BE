<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaestroController extends Controller
{
    public function index()
    {
        return view('maestro.index'); // Renderiza la vista maestro.blade.php
    }
}
