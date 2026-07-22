@extends('layouts.app')

@section('content')

<div class="min-vh-100 op-panel-bg op-map-bg">
    <div class="container position-relative py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op op-tracking-wide mb-1">Confirmar Compra</p>
            <h1 class="font-cinzel text-gold display-5">Resumen de Pago</h1>
        </div>

        <div class="row g-4">

            {{-- RESUMEN MEMBRESIA --}}
            <div class="col-md-6">
                <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100 text-center">
                    <div class="fs-1 mb-3">{{ $membresia->icono }}</div>
                    <div class="font-bebas text-gold fs-3 mb-1">{{ $membresia->nombre }}</div>
                    <div class="font-bebas text-red-op op-tracking mb-3">{{ $membresia->rango }}</div>
                    <p class="text-white fs-3 mb-3">${{ $membresia->precio }}<span class="text-muted-op fs-6">/mes</span></p>
                    <p class="text-muted-op small">{{ $membresia->beneficios }}</p>
                </div>
            </div>

            {{-- DATOS DEL USUARIO Y CONFIRMACION --}}
            <div class="col-md-6">
                <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4">
                    <div class="font-bebas text-gold fs-5 op-tracking mb-4">Tus Datos</div>

                    <p class="text-muted-op small mb-1">Nombre: <span class="text-white">{{ $user->name }}</span></p>
                    <p class="text-muted-op small mb-1">Cédula: <span class="text-white">{{ $user->cedula }}</span></p>
                    <p class="text-muted-op small mb-1">Email: <span class="text-white">{{ $user->email }}</span></p>
                    <p class="text-muted-op small mb-4">Método de pago: <span class="text-white">Efectivo</span></p>

                    <div class="rounded-3 p-3 mb-4" style="background:rgba(201,146,42,0.1); border:1px solid rgba(201,146,42,0.3);">
                        <p class="font-bebas text-gold op-tracking mb-1">Total a pagar:</p>
                        <p class="text-white fs-3 mb-0">${{ $membresia->precio }}</p>
                        <p class="text-muted-op small mt-1 mb-0">El pago se realiza en caja al momento de la visita.</p>
                    </div>

                    <form method="POST" action="/user/membresia/{{ $membresia->id }}/pago">
                        @csrf
                        <button type="submit" class="btn btn-op-red w-100 font-bebas btn-lg" style="letter-spacing:0.2em;">
                            Confirmar Plan
                        </button>
                    </form>

                    <a href="/user/membresia" class="btn btn-outline-gold w-100 font-bebas mt-2 op-tracking">
                        ← Volver
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection