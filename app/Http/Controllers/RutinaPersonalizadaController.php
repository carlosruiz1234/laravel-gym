<?php

namespace App\Http\Controllers;

use App\Models\RutinaPersonalizada;
use Illuminate\Http\Request;

class RutinaPersonalizadaController extends Controller
{
    public function index()
    {
        $rutinas = RutinaPersonalizada::where('user_id', auth()->id())->get();
        return view('user.rutinas-personalizadas.index', compact('rutinas'));
    }

    public function crear()
    {
        return view('user.rutinas-personalizadas.crear');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'dia'       => 'required|string|max:255',
            'ejercicio' => 'required|string|max:255',
            'series'    => 'required|string|max:255',
            'notas'     => 'nullable|string',
        ]);

        RutinaPersonalizada::create([
            'user_id'   => auth()->id(),
            'dia'       => $request->dia,
            'ejercicio' => $request->ejercicio,
            'series'    => $request->series,
            'notas'     => $request->notas,
        ]);

        return redirect('/user/rutinas-personalizadas')->with('success', ' Ejercicio creado correctamente');
    }

    public function editar($id)
    {
        $rutina = RutinaPersonalizada::where('user_id', auth()->id())->findOrFail($id);
        return view('user.rutinas-personalizadas.editar', compact('rutina'));
    }

    public function actualizar(Request $request, $id)
    {
        $rutina = RutinaPersonalizada::where('user_id', auth()->id())->findOrFail($id);

        $request->validate([
            'dia'       => 'required|string|max:255',
            'ejercicio' => 'required|string|max:255',
            'series'    => 'required|string|max:255',
            'notas'     => 'nullable|string',
        ]);

        $rutina->update($request->all());
        return redirect('/user/rutinas-personalizadas')->with('success', ' Ejercicio actualizado correctamente');
    }

    public function eliminar($id)
    {
        RutinaPersonalizada::where('user_id', auth()->id())->findOrFail($id)->delete();
        return redirect('/user/rutinas-personalizadas')->with('success', ' Ejercicio eliminado correctamente');
    }
}