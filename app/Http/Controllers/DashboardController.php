<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
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