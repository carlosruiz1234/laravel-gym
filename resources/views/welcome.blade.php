@extends('layouts.app')

@section('content')


<section class="min-vh-100 d-flex align-items-center position-relative overflow-hidden hero-video-section" style="padding-top:5rem;">

    <video autoplay muted loop playsinline class="hero-video-bg">
        <source src="{{ asset('videos/onepiece-intro.mp4') }}" type="video/mp4">
    </video>

    <div class="hero-video-overlay"></div>

    <img src="{{ asset('images/flag.png') }}" class="hero-deco" alt="">
    <div class="container position-relative" style="z-index: 3;">
        <div class="row">
            <div class="col-lg-7">
                <p class="font-bebas text-red-op" style="letter-spacing:0.4em;"> El Nuevo Mundo del Fitness</p>
                <h1 class="font-cinzel display-2 fw-bold mb-3">Thousand<br><span class="text-gold">Gym</span></h1>
                <p class="fst-italic fs-4 text-muted-op fw-light mb-3">"Un hombre no vive para siempre, pero una leyenda sí."</p>
                <p class="fs-5 text-muted-op mb-4" style="max-width:480px; line-height:1.8;">Forja tu cuerpo con la determinación de un Pirata Rey. Entrenamiento de élite, instructores legendarios y la voluntad de conquistar tus límites.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('register') }}" class="btn btn-op-red btn-lg px-5"> Únete a la Tripulación</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-gold btn-lg px-5">Ya Tengo Cuenta</a>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="bg-ocean border-top border-bottom border-gold py-4 log-strip-op">
    <div class="container">
        <div class="row text-center g-0">
            <div class="col log-item-op"><div class="stat-num font-mono-op">1.200+</div><div class="stat-label">Tripulantes Activos</div></div>
            <div class="col log-item-op"><div class="stat-num font-mono-op">18</div><div class="stat-label">Instructores</div></div>
            <div class="col log-item-op"><div class="stat-num font-mono-op">24/7</div><div class="stat-label">Acceso al Barco</div></div>
            <div class="col log-item-op"><div class="stat-num font-mono-op">12</div><div class="stat-label">Años Navegando</div></div>
            <div class="col log-item-op"><div class="stat-num font-mono-op">98%</div><div class="stat-label">Satisfacción</div></div>
        </div>
    </div>
</div>

<section class="bg-deep py-5 route-section-op">
    <div class="container">
        <p class="font-bebas text-red-op" style="letter-spacing:0.4em;">⚔ Bitácora de Ruta</p>
        <h2 class="font-cinzel mb-2">Cuatro paradas antes de <span class="text-gold">zarpar</span></h2>
        <p class="fst-italic text-muted-op mb-5" style="max-width:480px;">Cada escala te da una habilidad distinta. No hay atajos: se navega una a la vez.</p>

        <div class="route-op">
            <div class="route-line-op"></div>
            <div class="row g-4">

                <div class="col-md-3 stop-op">
                    <div class="stop-badge-op" data-mark="I">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M6 4v16M18 4v16M6 8h12M6 16h12"/></svg>
                    </div>
                    <div class="card-op p-4 text-start stop-card-op">
                        <div class="font-bebas text-gold fs-5 mb-2">Zona de Pesas</div>
                        <p class="text-muted-op small mb-0">Más de 200 máquinas para forjar la fuerza de un Yonko.</p>
                    </div>
                </div>

                <div class="col-md-3 stop-op stop-offset-op">
                    <div class="stop-badge-op" data-mark="II">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M8 8l8 8M16 8l-8 8"/><circle cx="12" cy="12" r="9"/></svg>
                    </div>
                    <div class="card-op p-4 text-start stop-card-op">
                        <div class="font-bebas text-gold fs-5 mb-2">Artes Marciales</div>
                        <p class="text-muted-op small mb-0">Boxeo, MMA y Jiu-jitsu. El Haki en su máxima expresión.</p>
                    </div>
                </div>

                <div class="col-md-3 stop-op">
                    <div class="stop-badge-op" data-mark="III">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="4"/><path d="M12 2v4M12 18v4M2 12h4M18 12h4"/></svg>
                    </div>
                    <div class="card-op p-4 text-start stop-card-op">
                        <div class="font-bebas text-gold fs-5 mb-2">Zona Zen</div>
                        <p class="text-muted-op small mb-0">Yoga y meditación. El Haki de Observación requiere mente tranquila.</p>
                    </div>
                </div>

                <div class="col-md-3 stop-op stop-offset-op">
                    <div class="stop-badge-op" data-mark="IV">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3l2.5 5 5.5.8-4 3.9.9 5.5L12 15.8 7.1 18.2l.9-5.5-4-3.9 5.5-.8z"/></svg>
                    </div>
                    <div class="card-op p-4 text-start stop-card-op">
                        <div class="font-bebas text-gold fs-5 mb-2">Rutinas Personalizadas</div>
                        <p class="text-muted-op small mb-0">Tu propio Log Pose. Planes diseñados para tus metas.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="bg-ocean text-center py-5 position-relative overflow-hidden cta-op">
    <div class="cta-ring-op cta-ring-lg-op"></div>
    <div class="cta-ring-op cta-ring-sm-op"></div>
    <div class="container position-relative">
        <p class="font-mono-op text-gold small" style="letter-spacing:0.2em;">COORDENADAS FIJADAS</p>
        <h2 class="font-cinzel mb-2">¿Listo para <span class="text-gold">zarpar?</span></h2>
        <p class="fst-italic text-muted-op fs-5 fw-light mb-4">"Yo quiero vivir aunque haya peligro. Eso es libertad." — Monkey D. Luffy</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('register') }}" class="btn btn-op-red btn-lg px-5">⚓ Registrarse Gratis</a>
            <a href="{{ route('login') }}" class="btn btn-outline-gold btn-lg px-5">Iniciar Sesión</a>
        </div>
    </div>
</section>

@endsection
