@extends('layouts.app')

@section('content')

<div class="min-vh-100 d-flex align-items-center" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container">
        <div class="row g-0 shadow-lg" style="border:1px solid rgba(201,146,42,0.2); min-height:600px;">

            {{-- COLUMNA IMAGEN --}}
            <div class="col-lg-6 d-none d-lg-block position-relative overflow-hidden">
                <img src="{{ asset('images/flag2.png') }}" alt="ThousandGym"
                     style="width:100%; height:100%; object-fit:cover; opacity:0.85;">
                <div style="position:absolute;inset:0;background:linear-gradient(to right, transparent, rgba(10,14,26,0.6));"></div>
                <div class="position-absolute bottom-0 start-0 p-5">
                    <h2 class="font-cinzel text-gold fs-3">Únete a la<br>Tripulación</h2>
                    <p class="fst-italic text-muted-op mt-2">"El sueño no muere jamás."</p>
                </div>
            </div>

            <div class="col-lg-6 bg-ocean p-5 d-flex flex-column justify-content-center">

                <div class="mb-4">
                    <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">⚓ Nueva Tripulación</p>
                    <h3 class="font-cinzel text-gold">Crear Cuenta</h3>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Nombre Completo</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                               class="form-control bg-dark text-white border-gold @error('name') is-invalid @enderror"
                               placeholder="Tu nombre completo" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Cédula</label>
                        <input type="number" name="cedula" value="{{ old('cedula') }}"
                               class="form-control bg-dark text-white border-gold @error('cedula') is-invalid @enderror"
                               placeholder="Tu número de cédula" required>
                        @error('cedula')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Correo Electrónico</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               class="form-control bg-dark text-white border-gold @error('email') is-invalid @enderror"
                               placeholder="tu@correo.com" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Contraseña</label>
                        <input type="password" name="password"
                               class="form-control bg-dark text-white border-gold @error('password') is-invalid @enderror"
                               placeholder="Mínimo 8 caracteres" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- CONFIRMAR PASSWORD --}}
                    <div class="mb-4">
                        <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation"
                               class="form-control bg-dark text-white border-gold"
                               placeholder="Repite tu contraseña" required>
                    </div>

                    <button type="submit" class="btn btn-op-red w-100 btn-lg font-bebas" style="letter-spacing:0.2em;">
                        ⚓ Unirme Ahora
                    </button>

                    <p class="text-center text-muted-op mt-3 small">
                        ¿Ya tienes cuenta?
                        <a href="{{ route('login') }}" class="text-gold">Iniciar Sesión</a>
                    </p>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
