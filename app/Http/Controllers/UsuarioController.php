<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Mostrar la vista con la tabla
    public function index()
    {
        // Obtener todos los usuarios
        $usuarios = Usuario::all();

        // Pasar los datos a la vista
        return view('usuarios.index', compact('usuarios'));
    }

    // Actualizar el rol del usuario
    public function updateRole(Request $request, $id)
    {
        // Validar los datos recibidos
        $validated = $request->validate([
            'role_id' => 'required|in:1,2,3',
        ]);

        try {
            // Buscar al usuario por su ID
            $usuario = Usuario::findOrFail($id);

            // Actualizar el rol del usuario
            $usuario->role_id = $request->input('role_id');
            $usuario->save();

            // Mensaje de éxito
            return redirect()->route('admin.index')->with('success', 'Rol actualizado correctamente.');
        } catch (\Exception $e) {
            // Mensaje de error si ocurre una excepción
            return redirect()->route('admin.index')->with('error', 'Hubo un problema al actualizar el rol.');
        }
    }

}
