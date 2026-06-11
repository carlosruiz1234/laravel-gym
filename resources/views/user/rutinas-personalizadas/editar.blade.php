@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">✏️ Editar Ejercicio</p>
            <h1 class="font-cinzel text-gold">{{ $rutina->ejercicio }}</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card-op p-4">
                    <form method="POST" action="/user/rutinas-personalizadas/{{ $rutina->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Día</label>
                            <select name="dia" class="form-control bg-dark text-white border-gold" required>
                                <option value="Lunes" {{ $rutina->dia == 'Lunes' ? 'selected' : '' }}>Lunes</option>
                                <option value="Martes" {{ $rutina->dia == 'Martes' ? 'selected' : '' }}>Martes</option>
                                <option value="Miercoles" {{ $rutina->dia == 'Miercoles' ? 'selected' : '' }}>Miércoles</option>
                                <option value="Jueves" {{ $rutina->dia == 'Jueves' ? 'selected' : '' }}>Jueves</option>
                                <option value="Viernes" {{ $rutina->dia == 'Viernes' ? 'selected' : '' }}>Viernes</option>
                                <option value="Sabado" {{ $rutina->dia == 'Sabado' ? 'selected' : '' }}>Sábado</option>
                                <option value="Domingo" {{ $rutina->dia == 'Domingo' ? 'selected' : '' }}>Domingo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Ejercicio</label>
                            <input type="text" name="ejercicio" value="{{ $rutina->ejercicio }}"
                                   class="form-control bg-dark text-white border-gold" required>
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Series</label>
                            <input type="text" name="series" value="{{ $rutina->series }}"
                                   class="form-control bg-dark text-white border-gold" required>
                        </div>

                        <div class="mb-4">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Notas (opcional)</label>
                            <textarea name="notas" rows="3"
                                      class="form-control bg-dark text-white border-gold">{{ $rutina->notas }}</textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">💾 Guardar</button>
                            <a href="/user/rutinas-personalizadas" class="btn btn-outline-gold font-bebas px-4">← Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection