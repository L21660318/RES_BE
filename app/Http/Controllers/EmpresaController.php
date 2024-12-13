<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all(); // Obtener todas las empresas
        return view('GTyV.index', compact('empresas'));
    }

    public function create()
    {
        return view('GTyV.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'rfc' => 'required',
            'lema' => 'required',
            'mision' => 'required',
        ]);

        Empresa::create($request->all());

        return redirect()->route('empresas.index')->with('success', 'Empresa creada exitosamente');
    }

    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('GTyV.edit', compact('empresa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'rfc' => 'required',
            'lema' => 'required',
            'mision' => 'required',
        ]);

        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());

        return redirect()->route('empresas.index')->with('success', 'Estado de la empresa actualizado');
    }
}

