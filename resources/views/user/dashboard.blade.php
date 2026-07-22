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

        <div class="mb-5">
            <p class="font-bebas text-red-op op-tracking-wide mb-1">Panel de Tripulante</p>
            <h1 class="font-cinzel text-gold display-5">Bienvenido, {{ auth()->user()->name }}</h1>
            <p class="fst-italic text-muted-op mb-0">"El viaje continúa, nakama."</p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <a href="/user/membresia" class="op-poster card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100 d-block text-decoration-none">
                    <svg class="text-gold mb-3" style="width:40px; height:40px;" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M24 4 L29 16 L42 17 L32 26 L35 39 L24 32 L13 39 L16 26 L6 17 L19 16 Z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                    </svg>
                    <div class="font-bebas text-gold fs-5 mb-2">Mi Membresía</div>
                    @if($membresia)
                        <p class="text-muted-op small mb-1">Plan: <span class="text-white">{{ $membresia->icono }} {{ $membresia->nombre }}</span></p>
                        <p class="text-muted-op small mb-1">Rango: <span class="text-white">{{ $membresia->rango }}</span></p>
                        <p class="text-muted-op small mb-3">Precio: <span class="text-white">${{ $membresia->precio }}</span></p>
                    @else
                        <p class="text-muted-op small mb-3">No tienes un plan activo aún.</p>
                    @endif
                    <span class="btn btn-outline-gold btn-sm font-bebas">Ver Membresías →</span>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/user/clases" class="op-poster card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100 d-block text-decoration-none">
                    <svg class="text-gold mb-3" style="width:40px; height:40px;" viewBox="0 0 48 48" aria-hidden="true">
                        <circle cx="24" cy="24" r="15" fill="none" stroke="currentColor" stroke-width="2.5"/>
                        <circle cx="24" cy="24" r="4" fill="currentColor"/>
                        <g stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                            <line x1="24" y1="4" x2="24" y2="11"/>
                            <line x1="24" y1="37" x2="24" y2="44"/>
                            <line x1="4" y1="24" x2="11" y2="24"/>
                            <line x1="37" y1="24" x2="44" y2="24"/>
                        </g>
                    </svg>
                    <div class="font-bebas text-gold fs-5 mb-2">Clases Disponibles</div>
                    <p class="text-muted-op small mb-3">Explora todas las clases disponibles y reserva tu cupo.</p>
                    <span class="btn btn-outline-gold btn-sm font-bebas">Ver Clases →</span>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/user/rutina" class="op-poster card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100 d-block text-decoration-none">
                    <svg class="text-gold mb-3" style="width:40px; height:40px;" viewBox="0 0 48 48" aria-hidden="true">
                        <rect x="10" y="6" width="28" height="36" rx="2" fill="none" stroke="currentColor" stroke-width="2.5"/>
                        <line x1="16" y1="16" x2="32" y2="16" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <line x1="16" y1="24" x2="32" y2="24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <line x1="16" y1="32" x2="26" y2="32" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                    <div class="font-bebas text-gold fs-5 mb-2">Mi Rutina</div>
                    <p class="text-muted-op small mb-3">Consulta tu plan de entrenamiento semanal personalizado.</p>
                    <span class="btn btn-outline-gold btn-sm font-bebas">Ver Rutina →</span>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/user/rutinas-personalizadas" class="op-poster card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100 d-block text-decoration-none">
                    <svg class="text-gold mb-3" style="width:40px; height:40px;" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M24 6 L24 42 M14 12 L34 12 M14 12 L10 22 A6 6 0 0 0 22 22 L18 12 M34 12 L30 22 A6 6 0 0 0 42 22 L38 12"
                              fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round" stroke-linecap="round"/>
                        <path d="M16 42 L32 42" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                    <div class="font-bebas text-gold fs-5 mb-2">Mi Rutina Personalizada</div>
                    <p class="text-muted-op small mb-3">Crea y gestiona tus propios ejercicios personalizados.</p>
                    <span class="btn btn-outline-gold btn-sm font-bebas">Ver Rutina →</span>
                </a>
            </div>

        </div>

        <div class="mt-5">
            <a href="/" class="btn btn-op-red font-bebas px-4 op-tracking">← Volver al Inicio</a>
        </div>

    </div>
</div>

@endsection