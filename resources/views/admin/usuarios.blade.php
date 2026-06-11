@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">👥 Gestión</p>
            <h1 class="font-cinzel text-gold">Usuarios</h1>
            <p class="fst-italic text-muted-op">Total: {{ $usuarios->count() }} tripulantes registrados</p>
        </div>

        <div class="table-responsive">
            <table class="table" style="border-color:rgba(201,146,42,0.2);">
                <thead>
                    <tr style="border-color:rgba(201,146,42,0.2);">
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Nombre</th>
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Cédula</th>
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Email</th>
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Membresía</th>
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Registro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr style="border-color:rgba(201,146,42,0.1);">
                        <td class="text-white">{{ $usuario->name }}</td>
                        <td class="text-muted-op">{{ $usuario->cedula }}</td>
                        <td class="text-muted-op">{{ $usuario->email }}</td>
                        <td>
                            @if($usuario->membresia)
                                <span class="font-bebas" style="color:#F0C060;">
                                    {{ $usuario->membresia->icono }} {{ $usuario->membresia->nombre }}
                                </span>
                            @else
                                <span class="text-muted-op small">Sin plan</span>
                            @endif
                        </td>
                        <td class="text-muted-op small">{{ $usuario->created_at->format('d/m/Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="/admin/dashboard" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">← Volver al Panel</a>
        </div>

    </div>
</div>

@endsection