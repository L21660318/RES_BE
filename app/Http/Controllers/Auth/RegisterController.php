<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create ()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|digits:8',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //es el correo w
        $email = 'L' . $validated['number'] . '@matehuala.tecnm.mx';

        //con esta los guardo 
        Usuario::create([
            'nombre' => $validated['name'],
            'correo' => $email,
            'contraseña' => $validated['password'],
        ]);

        //redireccion bb
        return redirect()->route('login')->with('success', 'cuenta crada exitosamente');
    }
}
