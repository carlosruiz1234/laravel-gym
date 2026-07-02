@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;"> Panel de Administración</p>
            <h1 class="font-cinzel text-gold">Bienvenido, {{ auth()->user()->name }}</h1>
            <p class="fst-italic text-muted-op">"El Rey de los Piratas manda aquí."</p>
        </div>

        {{-- ESTADISTICAS --}}
        <div class="row g-3 mb-5">
            <div class="col-md-3">
                <div class="card-op p-4 text-center">
                    <div class="font-bebas text-gold" style="font-size:3rem; line-height:1;">{{ $totalUsuarios }}</div>
                    <div class="font-bebas text-muted-op" style="letter-spacing:0.2em;">Usuarios</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-op p-4 text-center">
                    <div class="font-bebas text-gold" style="font-size:3rem; line-height:1;">{{ $totalMembresias }}</div>
                    <div class="font-bebas text-muted-op" style="letter-spacing:0.2em;">Membresías</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-op p-4 text-center">
                    <div class="font-bebas text-gold" style="font-size:3rem; line-height:1;">{{ $totalClases }}</div>
                    <div class="font-bebas text-muted-op" style="letter-spacing:0.2em;">Clases</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-op p-4 text-center">
                    <div class="font-bebas text-gold" style="font-size:3rem; line-height:1;">{{ $totalRutinas }}</div>
                    <div class="font-bebas text-muted-op" style="letter-spacing:0.2em;">Rutinas</div>
                </div>
            </div>
        </div>

        {{-- NAVEGACION --}}
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card-op p-4 h-100">
                    <div class="fs-2 mb-3"></div>
                    <div class="font-bebas text-gold fs-5 mb-2">Usuarios</div>
                    <p class="text-muted-op small mb-3">Ver todos los tripulantes registrados y sus membresías.</p>
                    <a href="/admin/usuarios" class="btn btn-outline-gold btn-sm font-bebas">Ver Usuarios →</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-op p-4 h-100">
                    <div class="fs-2 mb-3"></div>
                    <div class="font-bebas text-gold fs-5 mb-2">Membresías</div>
                    <p class="text-muted-op small mb-3">Gestiona los planes Pirata, Shichibukai y Yonkou.</p>
                    <a href="/admin/membresias" class="btn btn-outline-gold btn-sm font-bebas">Ver Membresías →</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-op p-4 h-100">
                    <div class="fs-2 mb-3"></div>
                    <div class="font-bebas text-gold fs-5 mb-2">Clases</div>
                    <p class="text-muted-op small mb-3">Gestiona las clases disponibles por membresía.</p>
                    <a href="/admin/clases" class="btn btn-outline-gold btn-sm font-bebas">Ver Clases →</a>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <a href="/" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;"> Volver al Inicio</a>
        </div>

    </div>
</div>

@endsection