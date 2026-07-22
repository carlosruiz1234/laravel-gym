@extends('layouts.app')

@section('content')

<div class="min-vh-100 position-relative overflow-hidden op-map-bg"
     style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">

    {{-- Silueta de barco como marca de agua --}}
    <svg class="position-absolute bottom-0 start-0 text-gold opacity-10 d-none d-md-block"
         style="width:520px; height:260px; transform:translate(-8%, 15%);"
         viewBox="0 0 520 260" aria-hidden="true">
        <path d="M40 170 L480 170 L440 220 L80 220 Z" fill="none" stroke="currentColor" stroke-width="4"/>
        <line x1="260" y1="170" x2="260" y2="20" stroke="currentColor" stroke-width="4"/>
        <path d="M260 30 L340 150 L260 150 Z" fill="none" stroke="currentColor" stroke-width="3"/>
        <path d="M260 60 L200 150 L260 150 Z" fill="none" stroke="currentColor" stroke-width="3"/>
        <line x1="150" y1="170" x2="150" y2="90" stroke="currentColor" stroke-width="3"/>
        <path d="M150 100 L110 165 L150 165 Z" fill="none" stroke="currentColor" stroke-width="2.5"/>
    </svg>

    <div class="container position-relative py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">Gestión</p>
            <h1 class="font-cinzel text-gold display-5">Usuarios</h1>
            <p class="fst-italic text-muted-op">Total: {{ $usuarios->count() }} tripulantes registrados</p>
        </div>

        <div class="table-responsive border border-gold border-opacity-25 rounded-4 overflow-hidden">
            <table class="table op-table mb-0" style="border-color:rgba(201,146,42,0.2);">
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
                    @forelse($usuarios as $usuario)
                    <tr style="border-color:rgba(201,146,42,0.1);">
                        <td class="text-white">{{ $usuario->name }}</td>
                        <td class="text-muted-op">{{ $usuario->cedula }}</td>
                        <td class="text-muted-op">{{ $usuario->email }}</td>
                        <td>
                            @if($usuario->membresia)
                                <span class="badge rounded-pill bg-gold-subtle text-gold-emphasis font-bebas px-3 py-2"
                                      style="letter-spacing:0.05em;">
                                    {{ $usuario->membresia->icono }} {{ $usuario->membresia->nombre }}
                                </span>
                            @else
                                <span class="text-muted-op small">Sin plan</span>
                            @endif
                        </td>
                        <td class="text-muted-op small">{{ $usuario->created_at->format('d/m/Y') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted-op py-4">Aún no hay tripulantes registrados.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="/admin/dashboard" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">← Volver al Panel</a>
        </div>

    </div>
</div>


@push('styles')
<style>
    .op-map-bg::before{
        content:"";
        position:absolute;
        inset:0;
        background-image:
            radial-gradient(1px 1px at 15% 25%, rgba(212,175,55,.18) 0, transparent 60%),
            radial-gradient(1px 1px at 75% 12%, rgba(212,175,55,.14) 0, transparent 60%),
            radial-gradient(1px 1px at 50% 70%, rgba(212,175,55,.12) 0, transparent 60%),
            radial-gradient(1px 1px at 90% 60%, rgba(212,175,55,.14) 0, transparent 60%),
            linear-gradient(rgba(212,175,55,.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(212,175,55,.05) 1px, transparent 1px);
        background-size: auto, auto, auto, auto, 48px 48px, 48px 48px;
        pointer-events:none;
    }

    .op-table tbody tr{ transition: background-color .15s ease; }
    .op-table tbody tr:hover{ background-color: rgba(212,175,55,.05); }
</style>
@endpush

@endsection