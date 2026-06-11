@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5 d-flex justify-content-between align-items-end">
            <div>
                <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">🥊 Gestión</p>
                <h1 class="font-cinzel text-gold">Clases</h1>
                <p class="fst-italic text-muted-op">Total: {{ $clases->count() }} clases registradas</p>
            </div>
            <a href="/admin/clases/crear" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">+ Nueva Clase</a>
        </div>

        @if(session('success'))
            <div class="alert mb-4" style="background:rgba(201,146,42,0.15); border:1px solid rgba(201,146,42,0.3); color:#F0C060;">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table" style="border-color:rgba(201,146,42,0.2);">
                <thead style="background:rgba(13,31,60,0.8);">
                    <tr style="border-color:rgba(201,146,42,0.2);">
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Nombre</th>
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Horario</th>
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Instructor</th>
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Cupos</th>
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Membresía</th>
                        <th class="font-bebas text-gold" style="letter-spacing:0.1em;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clases as $clase)
                    <tr style="border-color:rgba(201,146,42,0.1); background:rgba(13,31,60,0.5);">
                        <td class="text-white" style="background:transparent;">{{ $clase->nombre }}</td>
                        <td class="text-muted-op" style="background:transparent;">{{ $clase->horario }}</td>
                        <td class="text-muted-op" style="background:transparent;">{{ $clase->instructor }}</td>
                        <td class="text-muted-op" style="background:transparent;">{{ $clase->cupos }}</td>
                        <td style="background:transparent;">
                            <span class="font-bebas text-gold">{{ $clase->membresia->icono }} {{ $clase->membresia->nombre }}</span>
                        </td>
                        <td style="background:transparent;">
                            <div class="d-flex gap-2">
                                <a href="/admin/clases/{{ $clase->id }}/edit" class="btn btn-outline-gold btn-sm font-bebas">✏️ Editar</a>
                                <form method="POST" action="/admin/clases/{{ $clase->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm font-bebas"
                                        style="border:1px solid var(--red); color:var(--red);"
                                        onclick="return confirm('¿Eliminar esta clase?')">🗑️ Eliminar</button>
                                </form>
                            </div>
                        </td>
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