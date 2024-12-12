<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        try {
            // Validar los datos de entrada
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'number' => 'required|digits:8',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Generar el correo electrónico basado en el número
            $email = 'L' . $validated['number'] . '@matehuala.tecnm.mx';

            // Crear el usuario
            $usuario = Usuario::create([
                'nombre' => $validated['name'],
                'email' => $email,
                'password' => $validated['password'], // Guardar la contraseña sin encriptar
                'role_id' => 2, // Rol por defecto
            ]);

            // Crear una carpeta para el usuario en el sistema de archivos
            $carpetaUsuario = 'archivos/' . $usuario->email; // Usar el correo electrónico como nombre de la carpeta

            if (!Storage::disk('public')->exists($carpetaUsuario)) {
                Storage::disk('public')->makeDirectory($carpetaUsuario);
            }

            Log::info('Carpeta creada para el usuario: ' . $carpetaUsuario);

            return redirect()->route('login')->with('success', 'Cuenta creada exitosamente.');
        } catch (\Throwable $e) {
            // Registrar errores en los logs
            Log::error('Error en el registro: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);

            // Mostrar errores en el navegador si APP_DEBUG está habilitado
            if (config('app.debug')) {
                return response()->json([
                    'error' => $e->getMessage(),
                    'trace' => $e->getTrace(),
                ], 500);
            }

            // Redirigir con un mensaje de error si APP_DEBUG está deshabilitado
            return redirect()->back()->withErrors(['error' => 'Ocurrió un error al registrarse. Por favor, inténtalo de nuevo.']);
        }
    }
}
