@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">💪 Nuevo Ejercicio</p>
            <h1 class="font-cinzel text-gold">Agregar Ejercicio</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card-op p-4">
                    <form method="POST" action="/user/rutinas-personalizadas">
                        @csrf

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Día</label>
                            <select name="dia" class="form-control bg-dark text-white border-gold @error('dia') is-invalid @enderror" required>
                                <option value="">Selecciona un día</option>
                                <option value="Lunes" {{ old('dia') == 'Lunes' ? 'selected' : '' }}>Lunes</option>
                                <option value="Martes" {{ old('dia') == 'Martes' ? 'selected' : '' }}>Martes</option>
                                <option value="Miercoles" {{ old('dia') == 'Miercoles' ? 'selected' : '' }}>Miércoles</option>
                                <option value="Jueves" {{ old('dia') == 'Jueves' ? 'selected' : '' }}>Jueves</option>
                                <option value="Viernes" {{ old('dia') == 'Viernes' ? 'selected' : '' }}>Viernes</option>
                                <option value="Sabado" {{ old('dia') == 'Sabado' ? 'selected' : '' }}>Sábado</option>
                                <option value="Domingo" {{ old('dia') == 'Domingo' ? 'selected' : '' }}>Domingo</option>
                            </select>
                            @error('dia')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Ejercicio</label>
                            <input type="text" name="ejercicio" value="{{ old('ejercicio') }}"
                                   class="form-control bg-dark text-white border-gold @error('ejercicio') is-invalid @enderror"
                                   placeholder="Ej: Press de banca" required>
                            @error('ejercicio')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Series</label>
                            <input type="text" name="series" value="{{ old('series') }}"
                                   class="form-control bg-dark text-white border-gold @error('series') is-invalid @enderror"
                                   placeholder="Ej: 4x12" required>
                            @error('series')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Notas (opcional)</label>
                            <textarea name="notas" rows="3"
                                      class="form-control bg-dark text-white border-gold"
                                      placeholder="Ej: Descanso 60 segundos entre series">{{ old('notas') }}</textarea>
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