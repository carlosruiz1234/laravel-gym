@extends('layouts.app')

@section('content')

<div class="min-vh-100 op-panel-bg op-map-bg">
    <div class="container position-relative py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op op-tracking-wide mb-1">Elige tu Poder</p>
            <h1 class="font-cinzel text-gold display-5">Membresías</h1>
            <p class="fst-italic text-muted-op mb-0">"Cada pirata elige su propio camino."</p>
        </div>

        @if(session('success'))
            <div class="alert mb-4" style="background:rgba(201,146,42,0.15); border:1px solid rgba(201,146,42,0.3); color:#F0C060;">
                {{ session('success') }}
            </div>
        @endif

        <div class="row g-4">
            @foreach($membresias as $membresia)
            @php($esActual = auth()->user()->membresia_id == $membresia->id)
            <div class="col-md-4">
                <div class="card-op border rounded-4 shadow-sm p-4 h-100 text-center {{ $esActual ? 'border-gold' : 'border-gold border-opacity-25' }}">
                    <div class="fs-1 mb-3">{{ $membresia->icono }}</div>
                    <div class="font-bebas text-gold fs-3 mb-1">{{ $membresia->nombre }}</div>
                    <div class="font-bebas text-red-op op-tracking mb-3">{{ $membresia->rango }}</div>
                    <p class="text-white fs-4 mb-3">${{ $membresia->precio }}<span class="text-muted-op fs-6">/mes</span></p>
                    <p class="text-muted-op small mb-4">{{ $membresia->beneficios }}</p>

                    @if($esActual)
                        <span class="badge rounded-pill bg-gold-subtle text-gold-emphasis font-bebas op-tracking w-100 py-2">
                            Plan Actual
                        </span>
                    @else
                        <a href="/user/membresia/{{ $membresia->id }}/pago" class="btn btn-outline-gold font-bebas w-100 op-tracking">
                            Comprar Plan
                        </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5">
            <a href="/user/dashboard" class="btn btn-op-red font-bebas px-4 op-tracking">← Volver al Panel</a>
        </div>

    </div>
</div>

@endsection