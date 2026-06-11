<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use Illuminate\Http\Request;

class MembresiaController extends Controller
{
    // Admin ve todas las membresías
    public function index()
    {
        $membresias = Membresia::all();
        return view('admin.membresias.index', compact('membresias'));
    }

    // Admin edita una membresía
    public function edit($id)
    {
        $membresia = Membresia::findOrFail($id);
        return view('admin.membresias.edit', compact('membresia'));
    }

    // Admin guarda los cambios
    public function update(Request $request, $id)
    {
        $membresia = Membresia::findOrFail($id);

        $request->validate([
            'nombre'     => 'required|string|max:255',
            'rango'      => 'required|string|max:255',
            'precio'     => 'required|string|max:255',
            'beneficios' => 'required|string',
        ]);

        $membresia->update($request->all());

        return redirect('/admin/membresias')->with('success', '✅ Membresía actualizada correctamente');
    }

    // Usuario ve las membresías
    public function verMembresias()
    {
        $membresias = Membresia::all();
        return view('user.membresias', compact('membresias'));
    }
}