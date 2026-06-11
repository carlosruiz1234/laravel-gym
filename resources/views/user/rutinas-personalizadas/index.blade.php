@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5 d-flex justify-content-between align-items-end">
            <div>
                <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">💪 Mi Entrenamiento</p>
                <h1 class="font-cinzel text-gold">Rutina Personalizada</h1>
                <p class="fst-italic text-muted-op">{{ $rutinas->count() }} ejercicios creados</p>
            </div>
            <a href="/user/rutinas-personalizadas/crear" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">+ Agregar Ejercicio</a>
        </div>

        @if(session('success'))
            <div class="alert mb-4" style="background:rgba(201,146,42,0.15); border:1px solid rgba(201,146,42,0.3); color:#F0C060;">
                {{ session('success') }}
            </div>
        @endif

        @if($rutinas->count() == 0)
            <div class="card-op p-5 text-center">
                <div class="fs-1 mb-3">💪</div>
                <h3 class="font-cinzel text-gold mb-3">No tienes ejercicios aún</h3>
                <p class="text-muted-op mb-4">Crea tu primera rutina personalizada.</p>
                <a href="/user/rutinas-personalizadas/crear" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">+ Agregar Ejercicio</a>
            </div>
        @else
            <div class="row g-3">
                @foreach($rutinas as $rutina)
                <div class="col-md-4">
                    <div class="card-op p-4 h-100">
                        <div class="font-bebas text-red-op mb-1" style="letter-spacing:0.2em;">{{ $rutina->dia }}</div>
                        <div class="font-bebas text-gold fs-4 mb-2">{{ $rutina->ejercicio }}</div>
                        <p class="text-muted-op small mb-1">📊 Series: <span class="text-white">{{ $rutina->series }}</span></p>
                        @if($rutina->notas)
                            <p class="text-muted-op small mb-3">📝 {{ $rutina->notas }}</p>
                        @endif
                        <div class="d-flex gap-2 mt-3">
                            <a href="/user/rutinas-personalizadas/{{ $rutina->id }}/edit" class="btn btn-outline-gold btn-sm font-bebas">✏️ Editar</a>
                            <form method="POST" action="/user/rutinas-personalizadas/{{ $rutina->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm font-bebas"
                                    style="border:1px solid var(--red); color:var(--red);"
                                    onclick="return confirm('¿Eliminar este ejercicio?')">🗑️ Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif

        <div class="mt-5">
            <a href="/user/rutina" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">← Ver Rutina del Plan</a>
        </div>

    </div>
</div>

@endsection