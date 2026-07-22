@extends('layouts.app')

@section('content')

<div class="min-vh-100 op-panel-bg op-map-bg">
    <div class="container position-relative py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op op-tracking-wide mb-1">Nueva Clase</p>
            <h1 class="font-cinzel text-gold display-5">Crear Clase</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card-op border border-gold border-opacity-25 rounded-4 shadow-sm p-4">
                    <form method="POST" action="/admin/clases">
                        @csrf

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Nombre</label>
                            <input type="text" name="nombre" value="{{ old('nombre') }}"
                                   class="form-control bg-dark text-white border-gold @error('nombre') is-invalid @enderror"
                                   placeholder="Nombre de la clase" required>
                            @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Horario</label>
                            <input type="text" name="horario" value="{{ old('horario') }}"
                                   class="form-control bg-dark text-white border-gold @error('horario') is-invalid @enderror"
                                   placeholder="Ej: Lunes 7am" required>
                            @error('horario')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Instructor</label>
                            <input type="text" name="instructor" value="{{ old('instructor') }}"
                                   class="form-control bg-dark text-white border-gold @error('instructor') is-invalid @enderror"
                                   placeholder="Nombre del instructor" required>
                            @error('instructor')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Cupos</label>
                            <input type="number" name="cupos" value="{{ old('cupos') }}"
                                   class="form-control bg-dark text-white border-gold @error('cupos') is-invalid @enderror"
                                   placeholder="Número de cupos" required>
                            @error('cupos')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Membresía</label>
                            <select name="membresia_id" class="form-control bg-dark text-white border-gold @error('membresia_id') is-invalid @enderror" required>
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
                            <button type="submit" class="btn btn-op-red font-bebas px-4 op-tracking">💾 Guardar</button>
                            <a href="/admin/clases" class="btn btn-outline-gold font-bebas px-4">← Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection