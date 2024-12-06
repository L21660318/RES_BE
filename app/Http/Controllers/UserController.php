<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Verificar si la contraseña antigua es correcta (sin encriptar en este caso)
        if ($user->password !== $request->old_password) {
            return back()->withErrors(['old_password' => 'La contraseña antigua no coincide.']);
        }

        // Actualizar la contraseña sin encriptar
        $user->password = $request->new_password;
        $user->save();

        return back()->with('success', 'Contraseña actualizada correctamente.');
    }


}
