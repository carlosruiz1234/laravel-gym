@extends('layouts.app')

@section('content')

<div class="min-vh-100 op-panel-bg op-map-bg">

    <svg class="op-wheel-watermark d-none d-lg-block" viewBox="0 0 200 200" aria-hidden="true">
        <circle cx="100" cy="100" r="78" fill="none" stroke="currentColor" stroke-width="6"/>
        <circle cx="100" cy="100" r="30" fill="none" stroke="currentColor" stroke-width="6"/>
        @for ($i = 0; $i < 8; $i++)
            <g transform="rotate({{ $i * 45 }} 100 100)">
                <line x1="100" y1="22" x2="100" y2="0" stroke="currentColor" stroke-width="6"/>
                <circle cx="100" cy="6" r="8" fill="currentColor"/>
                <line x1="100" y1="70" x2="100" y2="130" stroke="currentColor" stroke-width="6"/>
            </g>
        @endfor
    </svg>

    <div class="container position-relative py-5">

        <div class="mb-5 d-flex justify-content-between align-items-end flex-wrap gap-3">
            <div>
                <p class="font-bebas text-red-op op-tracking-wide mb-1">Gestión</p>
                <h1 class="font-cinzel text-gold display-5">Clases</h1>
                <p class="fst-italic text-muted-op mb-0">Total: {{ $clases->count() }} clases registradas</p>
            </div>
            <a href="/admin/clases/crear" class="btn btn-op-red font-bebas px-4 op-tracking">+ Nueva Clase</a>
        </div>

        @if(session('success'))
            <div class="alert mb-4" style="background:rgba(201,146,42,0.15); border:1px solid rgba(201,146,42,0.3); color:#F0C060;">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive border border-gold border-opacity-25 rounded-4 overflow-hidden">
            <table class="table op-table mb-0">
                <thead>
                    <tr>
                        <th class="font-bebas text-gold op-tracking">Nombre</th>
                        <th class="font-bebas text-gold op-tracking">Horario</th>
                        <th class="font-bebas text-gold op-tracking">Instructor</th>
                        <th class="font-bebas text-gold op-tracking">Cupos</th>
                        <th class="font-bebas text-gold op-tracking">Membresía</th>
                        <th class="font-bebas text-gold op-tracking">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($clases as $clase)
                    <tr>
                        <td class="text-white">{{ $clase->nombre }}</td>
                        <td class="text-muted-op">{{ $clase->horario }}</td>
                        <td class="text-muted-op">{{ $clase->instructor }}</td>
                        <td class="text-muted-op">{{ $clase->cupos }}</td>
                        <td>
                            <span class="badge rounded-pill bg-gold-subtle text-gold-emphasis font-bebas op-badge-membresia px-3 py-2">
                                {{ $clase->membresia->icono }} {{ $clase->membresia->nombre }}
                            </span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="/admin/clases/{{ $clase->id }}/edit" class="btn btn-outline-gold btn-sm font-bebas">✏️ Editar</a>
                                <form method="POST" action="/admin/clases/{{ $clase->id }}" onsubmit="return confirm('¿Eliminar esta clase?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm font-bebas"
                                            style="border:1.5px solid var(--red); color:var(--red);">
                                        🗑️ Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted-op py-4">
                            Aún no hay clases registradas.
                            <a href="/admin/clases/crear" class="text-gold">Crea la primera →</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="/admin/dashboard" class="btn btn-op-red font-bebas px-4 op-tracking">← Volver al Panel</a>
        </div>

    </div>
</div>

@endsection