@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">🥊 Nueva Clase</p>
            <h1 class="font-cinzel text-gold">Crear Clase</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card-op p-4">
                    <form method="POST" action="/admin/clases">
                        @csrf

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Nombre</label>
                            <input type="text" name="nombre" value="{{ old('nombre') }}"
                                   class="form-control bg-deep text-white border-gold @error('nombre') is-invalid @enderror"
                                   placeholder="Nombre de la clase" required>
                            @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Horario</label>
                            <input type="text" name="horario" value="{{ old('horario') }}"
                                   class="form-control bg-deep text-white border-gold @error('horario') is-invalid @enderror"
                                   placeholder="Ej: Lunes 7am" required>
                            @error('horario')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Instructor</label>
                            <input type="text" name="instructor" value="{{ old('instructor') }}"
                                   class="form-control bg-deep text-white border-gold @error('instructor') is-invalid @enderror"
                                   placeholder="Nombre del instructor" required>
                            @error('instructor')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Cupos</label>
                            <input type="number" name="cupos" value="{{ old('cupos') }}"
                                   class="form-control bg-deep text-white border-gold @error('cupos') is-invalid @enderror"
                                   placeholder="Número de cupos" required>
                            @error('cupos')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Membresía</label>
                            <select name="membresia_id" class="form-control bg-deep text-white border-gold @error('membresia_id') is-invalid @enderror" required>
                                <option value="">Selecciona una membresía</option>
                                @foreach($membresias as $membresia)
                                    <option value="{{ $membresia->id }}" {{ old('membresia_id') == $membresia->id ? 'selected' : '' }}>
                                        {{ $membresia->icono }} {{ $membresia->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('membresia_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">💾 Guardar</button>
                            <a href="/admin/clases" class="btn btn-outline-gold font-bebas px-4">← Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection