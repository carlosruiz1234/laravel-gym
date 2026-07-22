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
        <p style="color:red; font-size:2rem;">TEST 123</p>
        <div class="mb-5">
            <p class="font-bebas text-red-op op-tracking-wide mb-1">Gestión</p>
            <h1 class="font-cinzel text-gold display-5">Membresías</h1>
        </div>

        @if(session('success'))
            <div class="alert mb-4" style="background:rgba(201,146,42,0.15); border:1px solid rgba(201,146,42,0.3); color:#F0C060;">
                {{ session('success') }}
            </div>
        @endif

        <div class="row g-4">
            @foreach($membresias as $membresia)
            <div class="col-md-4">
                <div class="op-poster card-op h-100 overflow-hidden">

                    @php
                        $imgNombre = \Illuminate\Support\Str::slug($membresia->nombre);
                        $imgRuta = null;
                        foreach (['jpg', 'jpeg', 'png', 'webp'] as $ext) {
                            $candidato = 'images/membresias/'.$imgNombre.'.'.$ext;
                            if (file_exists(public_path($candidato))) {
                                $imgRuta = $candidato;
                                break;
                            }
                        }
                    @endphp
                        <div class="position-relative" style="height:160px; border-bottom:1px dashed rgba(201,146,42,.35);">                                @if($imgRuta)
                            <img src="{{ asset($imgRuta) }}" alt="{{ $membresia->nombre }}"
                                class="w-100 h-100" style="object-fit:cover; object-position:center 20%;"> 
                        @else
                            <div class="d-flex align-items-center justify-content-center w-100 h-100" style="background:rgba(0,0,0,.2);">
                                <span class="text-muted-op small op-tracking text-center px-3">
                                    Falta: images/membresias/{{ $imgNombre }}.(jpg|png|webp)
                                </span>
                            </div>
                        @endif

                    </div>

                    <div class="p-4">
                        <div class="font-bebas text-gold fs-4 mb-1">{{ $membresia->nombre }}</div>
                        <div class="font-bebas text-red-op op-tracking mb-2">{{ $membresia->rango }}</div>
                        <p class="text-white fs-5 mb-2">${{ $membresia->precio }}</p>
                        <p class="text-muted-op small mb-3">{{ $membresia->beneficios }}</p>
                        <a href="/admin/membresias/{{ $membresia->id }}/edit" class="btn btn-outline-gold btn-sm font-bebas">Editar</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-5">
            <a href="/admin/dashboard" class="btn btn-op-red font-bebas px-4 op-tracking">← Volver al Panel</a>
        </div>

    </div>
</div>

@endsection