@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">💰 Confirmar Compra</p>
            <h1 class="font-cinzel text-gold">Resumen de Pago</h1>
        </div>

        <div class="row g-4">

            {{-- RESUMEN MEMBRESIA --}}
            <div class="col-md-6">
                <div class="card-op p-4 h-100 text-center">
                    <div class="fs-1 mb-3">{{ $membresia->icono }}</div>
                    <div class="font-bebas text-gold fs-3 mb-1">{{ $membresia->nombre }}</div>
                    <div class="font-bebas text-red-op mb-3" style="letter-spacing:0.1em;">{{ $membresia->rango }}</div>
                    <p class="text-white fs-3 mb-3">${{ $membresia->precio }}<span class="text-muted-op fs-6">/mes</span></p>
                    <p class="text-muted-op small">{{ $membresia->beneficios }}</p>
                </div>
            </div>

            {{-- DATOS DEL USUARIO Y CONFIRMACION --}}
            <div class="col-md-6">
                <div class="card-op p-4">
                    <div class="font-bebas text-gold fs-5 mb-4" style="letter-spacing:0.1em;">📋 Tus Datos</div>

                    <p class="text-muted-op small mb-1">Nombre: <span class="text-white">{{ $user->name }}</span></p>
                    <p class="text-muted-op small mb-1">Cédula: <span class="text-white">{{ $user->cedula }}</span></p>
                    <p class="text-muted-op small mb-1">Email: <span class="text-white">{{ $user->email }}</span></p>
                    <p class="text-muted-op small mb-4">Método de pago: <span class="text-white">💵 Efectivo</span></p>

                    <div class="p-3 mb-4" style="background:rgba(201,146,42,0.1); border:1px solid rgba(201,146,42,0.3);">
                        <p class="font-bebas text-gold mb-1" style="letter-spacing:0.1em;">Total a pagar:</p>
                        <p class="text-white fs-3 mb-0">${{ $membresia->precio }}</p>
                        <p class="text-muted-op small mt-1">⚠️ El pago se realiza en caja al momento de la visita.</p>
                    </div>

                    <form method="POST" action="/user/membresia/{{ $membresia->id }}/pago">
                        @csrf
                        <button type="submit" class="btn btn-op-red w-100 font-bebas btn-lg" style="letter-spacing:0.2em;">
                            ✅ Confirmar Plan
                        </button>
                    </form>

                    <a href="/user/membresia" class="btn btn-outline-gold w-100 font-bebas mt-2" style="letter-spacing:0.15em;">
                        ← Volver
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection