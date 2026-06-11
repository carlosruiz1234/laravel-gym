<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use App\Models\Clase;
use App\Models\Rutina;

class UserController extends Controller
{
    public function dashboard()
    {
        $membresia = auth()->user()->membresia;
        return view('user.dashboard', ['membresia' => $membresia]);
    }

    public function clases()
    {
        $user = auth()->user();

        if ($user->membresia_id) {
            $clases = Clase::where('membresia_id', $user->membresia_id)->get();
            $membresia = $user->membresia;
        } else {
            $clases = collect();
            $membresia = null;
        }

        return view('user.clases', compact('clases', 'membresia'));
    }

    public function membresia()
    {
        $membresias = Membresia::all();
        return view('user.membresia', ['membresias' => $membresias]);
    }

    public function elegirMembresia($id)
    {
        auth()->user()->update(['membresia_id' => $id]);
        return redirect('/user/dashboard')->with('success', '✅ Membresía elegida correctamente');
    }

    public function rutina()
    {
        $user = auth()->user();

        if ($user->membresia_id) {
            $rutinas = Rutina::where('membresia_id', $user->membresia_id)->get();
            $membresia = $user->membresia;
        } else {
            $rutinas = collect();
            $membresia = null;
        }

        return view('user.rutina', compact('rutinas', 'membresia'));
    }
    public function verPago($id)
    {
        $membresia = Membresia::findOrFail($id);
        $user = auth()->user();
        return view('user.pago', compact('membresia', 'user'));
    }

    public function procesarPago($id)
    {
        $membresia = Membresia::findOrFail($id);
        $user = auth()->user();

        \App\Models\Pago::create([
            'user_id'      => $user->id,
            'membresia_id' => $membresia->id,
            'estado'       => 'pendiente',
            'metodo_pago'  => 'efectivo',
            'monto'        => str_replace('.', '', $membresia->precio),
        ]);

        $user->update(['membresia_id' => $membresia->id]);

        return redirect('/user/dashboard')->with('success', '✅ Pago registrado correctamente');
    }
}