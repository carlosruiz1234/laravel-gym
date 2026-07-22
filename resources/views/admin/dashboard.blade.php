@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="background:#0A0E1A;">

    {{-- ===== HERO ===== --}}
    <div class="position-relative overflow-hidden pt-5"
         style="background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">

        {{-- Timón de barco como marca de agua --}}
        <svg class="op-wheel position-absolute top-0 end-0 text-gold opacity-10"
             style="width:380px; height:380px; transform:translate(15%,-15%);"
             viewBox="0 0 200 200" aria-hidden="true">
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
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:.3em;">Panel de Administración</p>
            <h1 class="font-cinzel text-gold display-5">Bienvenido, {{ auth()->user()->name }}</h1>
            <p class="fst-italic text-muted-op mb-0">"El Rey de los Piratas manda aquí."</p>
        </div>

        {{-- Divisor de olas --}}
        <svg class="d-block w-100" style="height:40px;" viewBox="0 0 1200 60" preserveAspectRatio="none" aria-hidden="true">
            <path d="M0,30 C150,60 350,0 600,30 C850,60 1050,0 1200,30 L1200,60 L0,60 Z" fill="#0A0E1A"/>
        </svg>
    </div>

    <div class="container pb-5">

        {{-- ===== ESTADISTICAS ===== --}}
        <div class="row g-3 mb-5">
            <div class="col-6 col-md-3">
                <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 text-center">
                    <div class="font-bebas text-gold display-4">{{ $totalUsuarios }}</div>
                    <div class="font-bebas text-muted-op small" style="letter-spacing:.2em;">Tripulantes</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 text-center">
                    <div class="font-bebas text-gold display-4">{{ $totalMembresias }}</div>
                    <div class="font-bebas text-muted-op small" style="letter-spacing:.2em;">Membresías</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 text-center">
                    <div class="font-bebas text-gold display-4">{{ $totalClases }}</div>
                    <div class="font-bebas text-muted-op small" style="letter-spacing:.2em;">Clases</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 text-center">
                    <div class="font-bebas text-gold display-4">{{ $totalRutinas }}</div>
                    <div class="font-bebas text-muted-op small" style="letter-spacing:.2em;">Rutinas</div>
                </div>
            </div>
        </div>

        {{-- ===== NAVEGACION ===== --}}
        <div class="row g-4">

            <div class="col-md-4">
                <a href="/admin/usuarios"
                   class="op-poster card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100 d-block position-relative text-decoration-none">
                    <span class="badge rounded-pill bg-gold-subtle text-gold-emphasis font-bebas position-absolute top-0 end-0 m-2"
                          style="letter-spacing:.1em; font-size:.65rem;">Tripulación</span>
                    <svg class="text-gold mb-3" style="width:40px; height:40px;" viewBox="0 0 48 48" aria-hidden="true">
                        <circle cx="24" cy="16" r="9" fill="none" stroke="currentColor" stroke-width="2.5"/>
                        <path d="M6 42c0-10 8-16 18-16s18 6 18 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                    <div class="font-bebas text-gold fs-5 mb-2">Usuarios</div>
                    <p class="text-muted-op small mb-3">Ver todos los tripulantes registrados y sus membresías.</p>
                    <span class="btn btn-outline-gold btn-sm font-bebas">Ver Usuarios →</span>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/admin/membresias"
                   class="op-poster card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100 d-block position-relative text-decoration-none">
                    <span class="badge rounded-pill bg-gold-subtle text-gold-emphasis font-bebas position-absolute top-0 end-0 m-2"
                          style="letter-spacing:.1em; font-size:.65rem;">Rango</span>
                    <svg class="text-gold mb-3" style="width:40px; height:40px;" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M24 4 L29 16 L42 17 L32 26 L35 39 L24 32 L13 39 L16 26 L6 17 L19 16 Z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                    </svg>
                    <div class="font-bebas text-gold fs-5 mb-2">Membresías</div>
                    <p class="text-muted-op small mb-3">Gestiona los planes Pirata, Shichibukai y Yonkou.</p>
                    <span class="btn btn-outline-gold btn-sm font-bebas">Ver Membresías →</span>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/admin/clases"
                   class="op-poster card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100 d-block position-relative text-decoration-none">
                    <span class="badge rounded-pill bg-gold-subtle text-gold-emphasis font-bebas position-absolute top-0 end-0 m-2"
                          style="letter-spacing:.1em; font-size:.65rem;">Rumbo</span>
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
                    <div class="font-bebas text-gold fs-5 mb-2">Clases</div>
                    <p class="text-muted-op small mb-3">Gestiona las clases disponibles por membresía.</p>
                    <span class="btn btn-outline-gold btn-sm font-bebas">Ver Clases →</span>
                </a>
            </div>

        </div>

        <div class="mt-5">
            <a href="/" class="btn btn-op-red font-bebas px-4" style="letter-spacing:.15em;">← Volver al Inicio</a>
        </div>

    </div>
</div>

@push('styles')
<style>
    @keyframes op-spin { to { transform: translate(15%,-15%) rotate(360deg); } }
    .op-wheel { animation: op-spin 140s linear infinite; }
    @media (prefers-reduced-motion: reduce) {
        .op-wheel { animation: none; }
    }

    .op-poster { transition: transform .2s ease, box-shadow .2s ease; }
    .op-poster:hover { transform: translateY(-4px); }
</style>
@endpush

@endsection