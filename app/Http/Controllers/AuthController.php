<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('auth.login'); // Vista para el formulario de login
    }

    // Procesar el login
    public function login(Request $request)
    {
        // Validar los datos recibidos
        $credentials = $request->validate([
            'email' => 'required|email', // Validar que el email sea válido
            'password' => 'required',    // Validar que la contraseña esté presente
        ]);

        // Buscar al usuario en la base de datos
        $user = DB::table('usuarios')->where('email', $credentials['email'])->first();

        // Verificar si el usuario fue encontrado
        if (!$user) {
            return back()->withErrors([
                'email' => 'No se encontró un usuario con este correo electrónico.',
            ])->onlyInput('email');
        }

        // Comparar contraseñas en texto plano
        if ($user->password !== $credentials['password']) {
            return back()->withErrors([
                'password' => 'La contraseña es incorrecta.',
            ]);
        }

        // Iniciar sesión
        Auth::loginUsingId($user->id);
        $request->session()->regenerate(); // Regenerar la sesión por seguridad

        // Redirigir basado en el role_id
        if ($user->role_id == 2) {
            return redirect()->route('alumno');
        }

        return back()->withErrors([
            'error' => 'No tienes permisos para acceder al sistema.',
        ]);
    }

    // Procesar el logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirigir a la página de login
    }
}
