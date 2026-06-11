```php
@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">⚓ Panel de Tripulante</p>
            <h1 class="font-cinzel text-gold">Bienvenido, {{ auth()->user()->name }}</h1>
            <p class="fst-italic text-muted-op">"El viaje continúa, nakama."</p>
        </div>

        <div class="row g-3">

        <div class="col-md-4">
            <div class="card-op p-4 h-100">
                <div class="fs-2 mb-3">💳</div>
                <div class="font-bebas text-gold fs-5 mb-2">Mi Membresía</div>
                @if($membresia)
                    <p class="text-muted-op small mb-1">Plan: <span class="text-white">{{ $membresia->icono }} {{ $membresia->nombre }}</span></p>
                    <p class="text-muted-op small mb-1">Rango: <span class="text-white">{{ $membresia->rango }}</span></p>
                    <p class="text-muted-op small mb-3">Precio: <span class="text-white">${{ $membresia->precio }}</span></p>
                @else
                    <p class="text-muted-op small mb-3">No tienes un plan activo aún.</p>
                @endif
                <a href="/user/membresia" class="btn btn-outline-gold btn-sm font-bebas">Ver Membresías →</a>
            </div>
        </div>

            <div class="col-md-4">
                <div class="card-op p-4 h-100">
                    <div class="fs-2 mb-3">🥊</div>
                    <div class="font-bebas text-gold fs-5 mb-2">Clases Disponibles</div>
                    <p class="text-muted-op small mb-3">Explora todas las clases disponibles y reserva tu cupo.</p>
                    <a href="/user/clases" class="btn btn-outline-gold btn-sm font-bebas">Ver Clases →</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-op p-4 h-100">
                    <div class="fs-2 mb-3">💪</div>
                    <div class="font-bebas text-gold fs-5 mb-2">Mi Rutina</div>
                    <p class="text-muted-op small mb-3">Consulta tu plan de entrenamiento semanal personalizado.</p>
                    <a href="/user/rutina" class="btn btn-outline-gold btn-sm font-bebas">Ver Rutina →</a>
                </div>
            </div>

                        <div class="col-md-4">
                <div class="card-op p-4 h-100">
                    <div class="fs-2 mb-3">📝</div>
                    <div class="font-bebas text-gold fs-5 mb-2">Mi Rutina Personalizada</div>
                    <p class="text-muted-op small mb-3">Crea y gestiona tus propios ejercicios personalizados.</p>
                    <a href="/user/rutinas-personalizadas" class="btn btn-outline-gold btn-sm font-bebas">Ver Rutina →</a>
                </div>
            </div>

        </div>

        <div class="mt-5">
            <a href="/" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">⚓ Volver al Inicio</a>
        </div>

    </div>
</div>

@endsection
```
