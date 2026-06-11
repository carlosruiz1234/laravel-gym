@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">⚓ Elige tu Poder</p>
            <h1 class="font-cinzel text-gold">Membresías</h1>
            <p class="fst-italic text-muted-op">"Cada pirata elige su propio camino."</p>
        </div>

        @if(session('success'))
            <div class="alert mb-4" style="background:rgba(201,146,42,0.15); border:1px solid rgba(201,146,42,0.3); color:#F0C060;">
                {{ session('success') }}
            </div>
        @endif

        <div class="row g-3">
            @foreach($membresias as $membresia)
            <div class="col-md-4">
                <div class="card-op p-4 h-100 text-center {{ auth()->user()->membresia_id == $membresia->id ? 'border border-warning' : '' }}">
                    <div class="fs-1 mb-3">{{ $membresia->icono }}</div>
                    <div class="font-bebas text-gold fs-3 mb-1">{{ $membresia->nombre }}</div>
                    <div class="font-bebas text-red-op mb-3" style="letter-spacing:0.1em;">{{ $membresia->rango }}</div>
                    <p class="text-white fs-4 mb-3">${{ $membresia->precio }}<span class="text-muted-op fs-6">/mes</span></p>
                    <p class="text-muted-op small mb-4">{{ $membresia->beneficios }}</p>

                    @if(auth()->user()->membresia_id == $membresia->id)
                        <button class="btn font-bebas w-100" style="background:rgba(201,146,42,0.2); color:#F0C060; border:1px solid #C9922A; letter-spacing:0.15em;">
                            ✅ Plan Actual
                        </button>
                    @else
                        <a href="/user/membresia/{{ $membresia->id }}/pago" class="btn btn-outline-gold font-bebas w-100" style="letter-spacing:0.15em;">
                            💰 Comprar Plan
                        </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5">
            <a href="/user/dashboard" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">← Volver al Panel</a>
        </div>

    </div>
</div>

@endsection