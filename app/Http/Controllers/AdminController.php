<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Membresia;
use App\Models\Clase;
use App\Models\Rutina;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsuarios  = User::role('user')->count();
        $totalMembresias = Membresia::count();
        $totalClases    = Clase::count();
        $totalRutinas   = Rutina::count();

        return view('admin.dashboard', compact(
            'totalUsuarios',
            'totalMembresias',
            'totalClases',
            'totalRutinas'
        ));
    }

    public function usuarios()
    {
        $usuarios = User::role('user')->with('membresia')->get();
        return view('admin.usuarios', compact('usuarios'));
    }
    public function clases()
    {
        $clases = \App\Models\Clase::with('membresia')->get();
        return view('admin.clases', compact('clases'));
    }
    public function crearClase()
    {
        $membresias = \App\Models\Membresia::all();
        return view('admin.clases-crear', compact('membresias'));
    }

    public function guardarClase(Request $request)
    {
        $request->validate([
            'nombre'       => 'required|string|max:255',
            'horario'      => 'required|string|max:255',
            'instructor'   => 'required|string|max:255',
            'cupos'        => 'required|integer|min:1',
            'membresia_id' => 'required|exists:membresias,id',
        ]);

        \App\Models\Clase::create($request->all());
        return redirect('/admin/clases')->with('success', '✅ Clase creada correctamente');
    }

    public function editarClase($id)
    {
        $clase = \App\Models\Clase::findOrFail($id);
        $membresias = \App\Models\Membresia::all();
        return view('admin.clases-editar', compact('clase', 'membresias'));
    }

    public function actualizarClase(Request $request, $id)
    {
        $clase = \App\Models\Clase::findOrFail($id);
        $request->validate([
            'nombre'       => 'required|string|max:255',
            'horario'      => 'required|string|max:255',
            'instructor'   => 'required|string|max:255',
            'cupos'        => 'required|integer|min:1',
            'membresia_id' => 'required|exists:membresias,id',
        ]);

        $clase->update($request->all());
        return redirect('/admin/clases')->with('success', '✅ Clase actualizada correctamente');
    }

    public function eliminarClase($id)
    {
        \App\Models\Clase::findOrFail($id)->delete();
        return redirect('/admin/clases')->with('success', '✅ Clase eliminada correctamente');
    }
}