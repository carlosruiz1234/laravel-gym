<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use Illuminate\Http\Request;

class MembresiaController extends Controller
{



    public function edit($id)
    {
        $membresia = Membresia::findOrFail($id);
        return view('admin.membresias.edit', compact('membresia'));
    }

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

        return redirect('/admin/membresias')->with('success', ' Membresía actualizada correctamente');
    }

    public function verMembresias()
    {
        $membresias = Membresia::all();
        return view('user.membresias', compact('membresias'));
    }
}