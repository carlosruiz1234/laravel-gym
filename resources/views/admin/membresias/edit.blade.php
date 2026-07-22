@extends('layouts.app')

@section('content')

<div class="min-vh-100 op-panel-bg op-map-bg">
    <div class="container position-relative py-5">

        <div class="mb-5">
            <p class="font-bebas text-red-op op-tracking-wide mb-1">Editar</p>
            <h1 class="font-cinzel text-gold display-5">{{ $membresia->nombre }}</h1>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-op p-4">
                    <form method="POST" action="/admin/membresias/{{ $membresia->id }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Nombre</label>
                            <input type="text" name="nombre" value="{{ $membresia->nombre }}"
                                   class="form-control bg-dark text-white border-gold @error('nombre') is-invalid @enderror">
                            @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Rango</label>
                            <input type="text" name="rango" value="{{ $membresia->rango }}"
                                   class="form-control bg-dark text-white border-gold @error('rango') is-invalid @enderror">
                            @error('rango')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Precio</label>
                            <input type="text" name="precio" value="{{ $membresia->precio }}"
                                   class="form-control bg-dark text-white border-gold @error('precio') is-invalid @enderror">
                            @error('precio')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-4">
                            <label class="font-bebas text-muted-op op-tracking mb-1">Beneficios</label>
                            <textarea name="beneficios" rows="4"
                                      class="form-control bg-dark text-white border-gold @error('beneficios') is-invalid @enderror">{{ $membresia->beneficios }}</textarea>
                            @error('beneficios')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-op-red font-bebas px-4 op-tracking">💾 Guardar Cambios</button>
                            <a href="/admin/membresias" class="btn btn-outline-gold font-bebas px-4">← Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>

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
            <div class="col-md-6">
                <div class="card-op p-4 h-100 d-flex flex-column">
                    <label class="font-bebas text-muted-op op-tracking mb-2">Imagen de la membresía</label>
                    <div class="d-flex align-items-center justify-content-center flex-grow-1 overflow-hidden"
                         style="min-height:260px; border:1px dashed rgba(201,146,42,.35); border-radius:.5rem; background:rgba(0,0,0,.2);">
                        @if($imgRuta)
                            <img src="{{ asset($imgRuta) }}" alt="{{ $membresia->nombre }}"
                                 class="w-100 h-100" style="object-fit:cover; object-position:center 20%;">
                        @else
                            <span class="text-muted-op small op-tracking text-center px-3">
                                Coloca el archivo en:<br>public/images/membresias/{{ $imgNombre }}.(jpg|png|webp)
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection