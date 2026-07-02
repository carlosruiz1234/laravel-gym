@extends('layouts.app')

@section('content')

<div class="min-vh-100 d-flex align-items-center" style="padding-top:5rem; background: linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <div class="container">
        <div class="row g-0 shadow-lg mx-auto" style="border:1px solid rgba(201,146,42,0.2); max-width:900px;">

            <div class="col-lg-6 d-none d-lg-block position-relative overflow-hidden">
                <img src="{{ asset('images/flag.png') }}" alt="ThousandGym"
                     style="width:100%; height:100%; object-fit:cover; opacity:0.85;">
                <div style="position:absolute;inset:0;background:linear-gradient(to right, transparent, rgba(10,14,26,0.6));"></div>
                <div class="position-absolute bottom-0 start-0 p-5">
                    <h2 class="font-cinzel text-gold fs-3">¿Perdiste el<br>rumbo?</h2>
                    <p class="fst-italic text-muted-op mt-2">"Todo gran navegante se pierde alguna vez."</p>
                </div>
            </div>

            <div class="col-lg-6 bg-ocean p-5 d-flex flex-column justify-content-center">

                <div class="mb-4">
                    <p class="font-bebas text-red-op mb-1" style="letter-spacing:0.3em;">⚓ Recuperar Acceso</p>
                    <h3 class="font-cinzel text-gold">Olvidé mi Contraseña</h3>
                    <p class="text-muted-op small mt-2">Ingresa tu correo y te enviaremos un enlace para restablecer tu contraseña.</p>
                </div>

                @if($errors->any())
                    <div class="alert mb-3" style="background:rgba(232,53,32,0.15); border:1px solid rgba(232,53,32,0.3); color:#E83520;">
                        @foreach($errors->all() as $error)
                            <small>⚠ {{ $error }}</small><br>
                        @endforeach
                    </div>
                @endif

                @session('status')
                    <div class="alert mb-3" style="background:rgba(201,146,42,0.15); border:1px solid rgba(201,146,42,0.3); color:#F0C060;">
                        <small>✅ {{ $value }}</small>
                    </div>
                @endsession

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="font-bebas text-muted-op mb-1" style="letter-spacing:0.1em;">Correo Electrónico</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               class="form-control bg-deep text-white border-gold @error('email') is-invalid @enderror"
                               placeholder="tu@correo.com" required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-op-red w-100 btn-lg font-bebas" style="letter-spacing:0.2em;">
                        ⚓ Enviar Enlace
                    </button>

                    <p class="text-center text-muted-op mt-3 small">
                        ¿Recordaste tu contraseña?
                        <a href="{{ route('login') }}" class="text-gold">Iniciar Sesión</a>
                    </p>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection