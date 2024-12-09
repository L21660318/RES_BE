<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function uploadFile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'file' => 'required|file|max:2048', // Tamaño máximo: 2MB
        ]);

        $filePath = $request->file('file')->store('descargas', 'public');

        return back()->with('success', 'Archivo subido correctamente a: ' . $filePath);
    }

}
