@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section class="min-vh-100 d-flex align-items-center position-relative overflow-hidden" style="padding-top:5rem; background: radial-gradient(ellipse 70% 80% at 20% 50%, rgba(13,31,60,0.95), transparent), linear-gradient(160deg, #0A0E1A 0%, #0D1F3C 60%, #0A0E1A 100%);">
    <img src="{{ asset('images/flag.png') }}" class="hero-deco" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <p class="font-bebas text-red-op" style="letter-spacing:0.4em;">⚓ El Nuevo Mundo del Fitness</p>
                <h1 class="font-cinzel display-2 fw-bold mb-3">Thousand<br><span class="text-gold">Gym</span></h1>
                <p class="fst-italic fs-4 text-muted-op fw-light mb-3">"Un hombre no vive para siempre, pero una leyenda sí."</p>
                <p class="fs-5 text-muted-op mb-4" style="max-width:480px; line-height:1.8;">Forja tu cuerpo con la determinación de un Pirata Rey. Entrenamiento de élite, instructores legendarios y la voluntad de conquistar tus límites.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('register') }}" class="btn btn-op-red btn-lg px-5">⚓ Únete a la Tripulación</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-gold btn-lg px-5">Ya Tengo Cuenta</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- STATS --}}
<div class="bg-ocean border-top border-bottom border-gold py-4">
    <div class="container">
        <div class="row text-center g-0">
            <div class="col border-end border-gold"><div class="stat-num">1200+</div><div class="stat-label">Piratas Activos</div></div>
            <div class="col border-end border-gold"><div class="stat-num">18</div><div class="stat-label">Instructores</div></div>
            <div class="col border-end border-gold"><div class="stat-num">24/7</div><div class="stat-label">Acceso</div></div>
            <div class="col border-end border-gold"><div class="stat-num">12</div><div class="stat-label">Años</div></div>
            <div class="col"><div class="stat-num">98%</div><div class="stat-label">Satisfacción</div></div>
        </div>
    </div>
</div>

{{-- SERVICIOS --}}
<section class="bg-deep py-5">
    <div class="container text-center">
        <p class="font-bebas text-red-op" style="letter-spacing:0.4em;">⚔ Nuestros Poderes</p>
        <h2 class="font-cinzel mb-2">Servicios <span class="text-gold">Legendarios</span></h2>
        <p class="fst-italic text-muted-op mb-5">Como las frutas del Diablo, cada servicio te da habilidades únicas.</p>
        <div class="row g-1">
            <div class="col-md-3">
                <div class="card-op p-4 h-100 text-start">
                    <div class="fs-2 mb-3">🏋️</div>
                    <div class="font-bebas text-gold fs-5 mb-2">Zona de Pesas</div>
                    <p class="text-muted-op small">Más de 200 máquinas para forjar la fuerza de un Yonko.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-op p-4 h-100 text-start">
                    <div class="fs-2 mb-3">🥊</div>
                    <div class="font-bebas text-gold fs-5 mb-2">Artes Marciales</div>
                    <p class="text-muted-op small">Boxeo, MMA y Jiu-jitsu. El Haki en su máxima expresión.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-op p-4 h-100 text-start">
                    <div class="fs-2 mb-3">🧘</div>
                    <div class="font-bebas text-gold fs-5 mb-2">Zona Zen</div>
                    <p class="text-muted-op small">Yoga y meditación. El Haki de Observación requiere mente tranquila.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-op p-4 h-100 text-start">
                    <div class="fs-2 mb-3">🗺️</div>
                    <div class="font-bebas text-gold fs-5 mb-2">Rutinas Personalizadas</div>
                    <p class="text-muted-op small">Tu propio Log Pose. Planes diseñados para tus metas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-ocean text-center py-5 position-relative overflow-hidden">
    <div style="position:absolute;font-size:30rem;opacity:0.03;top:50%;left:50%;transform:translate(-50%,-50%);pointer-events:none;">☠</div>
    <div class="container position-relative">
        <h2 class="font-cinzel mb-2">¿Listo para <span class="text-gold">zarpar?</span></h2>
        <p class="fst-italic text-muted-op fs-5 fw-light mb-4">"Yo quiero vivir aunque haya peligro. Eso es libertad." — Monkey D. Luffy</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('register') }}" class="btn btn-op-red btn-lg px-5">⚓ Registrarse Gratis</a>
            <a href="{{ route('login') }}" class="btn btn-outline-gold btn-lg px-5">Iniciar Sesión</a>
        </div>
    </div>
</section>

@endsection
