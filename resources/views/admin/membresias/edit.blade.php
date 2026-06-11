@extends('layouts.app')

@section('content')

<div class="min-vh-100" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">✏️ Editar</p>
            <h1 class="font-cinzel text-gold">{{ $membresia->nombre }}</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card-op p-4">
                    <form method="POST" action="/admin/membresias/{{ $membresia->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Nombre</label>
                            <input type="text" name="nombre" value="{{ $membresia->nombre }}"
                                   class="form-control bg-dark text-white border-gold @error('nombre') is-invalid @enderror">
                            @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Rango</label>
                            <input type="text" name="rango" value="{{ $membresia->rango }}"
                                   class="form-control bg-dark text-white border-gold @error('rango') is-invalid @enderror">
                            @error('rango')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Precio</label>
                            <input type="text" name="precio" value="{{ $membresia->precio }}"
                                   class="form-control bg-dark text-white border-gold @error('precio') is-invalid @enderror">
                            @error('precio')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Beneficios</label>
                            <textarea name="beneficios" rows="4"
                                      class="form-control bg-dark text-white border-gold @error('beneficios') is-invalid @enderror">{{ $membresia->beneficios }}</textarea>
                            @error('beneficios')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-op-red font-bebas px-4" style="letter-spacing:0.15em;">💾 Guardar Cambios</button>
                            <a href="/admin/membresias" class="btn btn-outline-gold font-bebas px-4">← Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection