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
        // Validar el nuevo rol
        $request->validate([
            'role_id' => 'required|integer|min:1|max:3',
        ]);

        // Buscar el usuario y actualizar el rol
        $usuario = Usuario::findOrFail($id);
        $usuario->role_id = $request->input('role_id');
        $usuario->save();

        return response()->json(['success' => true]);
    }
}
