@extends('layouts.app')

@section('content')

<div class="min-vh-100 op-panel-bg op-map-bg">
    <div class="container position-relative py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op op-tracking-wide mb-1">Editar Ejercicio</p>
            <h1 class="font-cinzel text-gold display-5">{{ $rutina->ejercicio }}</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4">
                    <form method="POST" action="/user/rutinas-personalizadas/{{ $rutina->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Día</label>
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
                            <label class="font-bebas text-muted-op op-tracking mb-1">Ejercicio</label>
                            <input type="text" name="ejercicio" value="{{ $rutina->ejercicio }}"
                                   class="form-control bg-dark text-white border-gold" required>
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Series</label>
                            <input type="text" name="series" value="{{ $rutina->series }}"
                                   class="form-control bg-dark text-white border-gold" required>
                        </div>

                        <div class="mb-4">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Notas (opcional)</label>
                            <textarea name="notas" rows="3"
                                      class="form-control bg-dark text-white border-gold">{{ $rutina->notas }}</textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-op-red font-bebas px-4 op-tracking">💾 Guardar</button>
                            <a href="/user/rutinas-personalizadas" class="btn btn-outline-gold font-bebas px-4">← Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection