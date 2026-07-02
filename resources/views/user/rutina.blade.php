@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;"> Entrenamiento</p>
            <h1 class="font-cinzel text-gold">Mi Rutina</h1>
            @if($membresia)
                <p class="fst-italic text-muted-op">Plan {{ $membresia->icono }} {{ $membresia->nombre }}</p>
            @endif
        </div>

        @if(!$membresia)
            <div class="card-op p-5 text-center">
                <div class="fs-1 mb-3">⚓</div>
                <h3 class="font-cinzel text-gold mb-3">No tienes un plan activo</h3>
                <p class="text-muted-op mb-4">Elige una membresía para ver tu rutina.</p>
                <a href="/user/membresia" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">Ver Membresías</a>
            </div>
        @else
            <div class="row g-3">
                @foreach($rutinas as $rutina)
                <div class="col-md-4">
                    <div class="card-op p-4 h-100">
                        <div class="font-bebas text-red-op mb-1" style="letter-spacing:0.2em;">{{ $rutina->dia }}</div>
                        <div class="font-bebas text-gold fs-4 mb-2">{{ $rutina->ejercicio }}</div>
                        <p class="text-muted-op small mb-0"> Series: <span class="text-white">{{ $rutina->series }}</span></p>
                    </div>
                </div>
                @endforeach
            </div>
        @endif

        <div class="mt-5">
            <a href="/user/dashboard" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">← Volver al Panel</a>
        </div>

    </div>
</div>

@endsection