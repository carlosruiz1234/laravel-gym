@extends('layouts.app')

@section('content')

<div class="min-vh-100 op-panel-bg op-map-bg">
    <div class="container position-relative py-5">

        <div class="mb-5 d-flex justify-content-between align-items-end flex-wrap gap-3">
            <div>
                <p class="font-bebas text-red-op op-tracking-wide mb-1">Mi Entrenamiento</p>
                <h1 class="font-cinzel text-gold display-5">Rutina Personalizada</h1>
                <p class="fst-italic text-muted-op mb-0">{{ $rutinas->count() }} ejercicios creados</p>
            </div>
            <a href="/user/rutinas-personalizadas/crear" class="btn btn-op-red font-bebas px-4 op-tracking">+ Agregar Ejercicio</a>
        </div>

        @if(session('success'))
            <div class="alert mb-4" style="background:rgba(201,146,42,0.15); border:1px solid rgba(201,146,42,0.3); color:#F0C060;">
                {{ session('success') }}
            </div>
        @endif

        @if($rutinas->count() == 0)
            <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-5 text-center">
                <svg class="text-gold mb-3 mx-auto d-block" style="width:48px; height:48px;" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M24 6 L24 42 M14 12 L34 12 M14 12 L10 22 A6 6 0 0 0 22 22 L18 12 M34 12 L30 22 A6 6 0 0 0 42 22 L38 12"
                          fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round" stroke-linecap="round"/>
                    <path d="M16 42 L32 42" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
                <h3 class="font-cinzel text-gold mb-3">No tienes ejercicios aún</h3>
                <p class="text-muted-op mb-4">Crea tu primera rutina personalizada.</p>
                <a href="/user/rutinas-personalizadas/crear" class="btn btn-op-red font-bebas px-4 op-tracking">+ Agregar Ejercicio</a>
            </div>
        @else
            <div class="row g-4">
                @foreach($rutinas as $rutina)
                <div class="col-md-4">
                    <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4 h-100">
                        <div class="font-bebas text-red-op op-tracking-wide mb-1">{{ $rutina->dia }}</div>
                        <div class="font-bebas text-gold fs-4 mb-2">{{ $rutina->ejercicio }}</div>
                        <p class="text-muted-op small mb-1">Series: <span class="text-white">{{ $rutina->series }}</span></p>
                        @if($rutina->notas)
                            <p class="text-muted-op small mb-3">{{ $rutina->notas }}</p>
                        @endif
                        <div class="d-flex gap-2 mt-3">
                            <a href="/user/rutinas-personalizadas/{{ $rutina->id }}/edit" class="btn btn-outline-gold btn-sm font-bebas">✏️ Editar</a>
                            <form method="POST" action="/user/rutinas-personalizadas/{{ $rutina->id }}" onsubmit="return confirm('¿Eliminar este ejercicio?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm font-bebas" style="border:1.5px solid var(--red); color:var(--red);">
                                    🗑️ Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif

        <div class="mt-5">
            <a href="/user/rutina" class="btn btn-op-red font-bebas px-4 op-tracking">← Ver Rutina del Plan</a>
        </div>

    </div>
</div>

@endsection