@extends('layouts.app')

@section('content')

<div class="min-vh-100 op-panel-bg op-map-bg">
    <div class="container position-relative py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op op-tracking-wide mb-1">Entrenamiento</p>
            <h1 class="font-cinzel text-gold display-5">Mis Clases</h1>
            @if($membresia)
                <p class="fst-italic text-muted-op mb-0">Plan {{ $membresia->icono }} {{ $membresia->nombre }}</p>
            @endif
        </div>

        @if(!$membresia)
            <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-5 text-center">
                <div class="fs-1 mb-3">⚓</div>
                <h3 class="font-cinzel text-gold mb-3">No tienes un plan activo</h3>
                <p class="text-muted-op mb-4">Elige una membresía para ver las clases disponibles.</p>
                <a href="/user/membresia" class="btn btn-op-red font-bebas px-4 op-tracking">Ver Membresías</a>
            </div>
        @else
            <div class="row g-4">
                @foreach($clases as $clase)
                <div class="col-md-4">
                    <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100">
                        <svg class="text-gold mb-3" style="width:36px; height:36px;" viewBox="0 0 48 48" aria-hidden="true">
                            <circle cx="24" cy="26" r="16" fill="none" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M24 17 L24 26 L31 30" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="17" y1="6" x2="21" y2="10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                            <line x1="31" y1="6" x2="27" y2="10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                        <div class="font-bebas text-gold fs-4 mb-2">{{ $clase->nombre }}</div>
                        <p class="text-muted-op small mb-1">{{ $clase->horario }}</p>
                        <p class="text-muted-op small mb-1">{{ $clase->instructor }}</p>
                        <p class="text-muted-op small mb-0">{{ $clase->cupos }} cupos</p>
                    </div>
                </div>
                @endforeach
            </div>
        @endif

        <div class="mt-5">
            <a href="/user/dashboard" class="btn btn-op-red font-bebas px-4 op-tracking">← Volver al Panel</a>
        </div>

    </div>
</div>

@endsection