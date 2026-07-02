@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;"> Gestión</p>
            <h1 class="font-cinzel text-gold">Membresías</h1>
        </div>

        @if(session('success'))
            <div class="alert mb-4" style="background:rgba(201,146,42,0.15); border:1px solid rgba(201,146,42,0.3); color:#F0C060;">
                {{ session('success') }}
            </div>
        @endif

        <div class="row g-3">
            @foreach($membresias as $membresia)
            <div class="col-md-4">
                <div class="card-op p-4 h-100">
                    <div class="fs-2 mb-2">{{ $membresia->icono }}</div>
                    <div class="font-bebas text-gold fs-4 mb-1">{{ $membresia->nombre }}</div>
                    <div class="font-bebas text-red-op mb-2" style="letter-spacing:0.1em;">{{ $membresia->rango }}</div>
                    <p class="text-white fs-5 mb-2">${{ $membresia->precio }}</p>
                    <p class="text-muted-op small mb-3">{{ $membresia->beneficios }}</p>
                    <a href="/admin/membresias/{{ $membresia->id }}/edit" class="btn btn-outline-gold btn-sm font-bebas">✏️ Editar</a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5">
            <a href="/admin/dashboard" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">← Volver al Panel</a>
        </div>

    </div>
</div>

@endsection