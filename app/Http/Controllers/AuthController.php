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
        // Validación de los datos recibidos
        $credentials = $request->validate([
            'email' => 'required|email', // Asegurarse de que el email sea válido
            'password' => 'required',    // Asegurarse de que la contraseña esté presente
        ]);

        // Buscar el usuario en la base de datos por el correo electrónico (en la tabla 'usuarios')
        $user = DB::table('usuarios')->where('email', $credentials['email'])->first();

        // Verificar si el usuario fue encontrado
        if (!$user) {
            return back()->withErrors([
                'email' => 'No se encontró un usuario con este correo electrónico.',
            ])->onlyInput('email');
        }

        // Verificar si las contraseñas coinciden
        if ($user->password !== $credentials['password']) {
            return back()->withErrors([
                'password' => 'La contraseña es incorrecta.',
            ]);
        }

        // Iniciar sesión
        Auth::loginUsingId($user->id);
        $request->session()->regenerate();

        // Redirigir según el role_id del usuario
        switch ($user->role_id) {
            case 1:
                return redirect('/maestro');
            case 2:
                return redirect('/dashboard');
            case 3:
                return redirect('/pagina-role-3');
            case 4:
                return redirect('/pagina-role-4');
            case 5:
                return redirect('/pagina-role-5');
            case 6:
                return redirect('/pagina-role-6');
            default:
                return redirect('/default-page'); // Redirigir a una página por defecto si no coincide
        }
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
