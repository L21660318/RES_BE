<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; // Usar DB para consultas directas

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
        // Validación de los datos recibidos
        $credentials = $request->validate([
            'email' => 'required|email', // Asegurarse de que el email sea válido
            'password' => 'required',    // Asegurarse de que la contraseña esté presente
        ]);

        // Buscar el usuario en la base de datos por el correo electrónico (en la tabla 'usuarios')
        $user = DB::table('usuarios')->where('email', $credentials['email'])->first();

        // Depuración: Verificar si el usuario fue encontrado
        if (!$user) {
            return back()->withErrors([
                'email' => 'No se encontró un usuario con este correo electrónico.',
            ])->onlyInput('email');
        }

        // Depuración: Verificar si las contraseñas coinciden
        if ($user->password !== $credentials['password']) {
            return back()->withErrors([
                'password' => 'La contraseña es incorrecta.',
            ]);
        }

        // Si las credenciales son correctas, iniciar sesión
        Auth::loginUsingId($user->id); // Usar ID del usuario para iniciar sesión
        $request->session()->regenerate(); // Regenerar la sesión para prevenir ataques de fijación de sesión
        return redirect()->intended('/dashboard'); // Redirigir a la página deseada
    }

    // Procesar el logout
    public function logout(Request $request)
    {
        Auth::logout(); // Cerrar sesión
        $request->session()->invalidate(); // Invalidar la sesión
        $request->session()->regenerateToken(); // Regenerar el token CSRF

        return redirect('/login'); // Redirigir a la página de login
    }
}
