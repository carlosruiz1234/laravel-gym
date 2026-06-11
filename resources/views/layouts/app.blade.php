<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThousandGym</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel+Decorative:wght@700&family=Crimson+Pro:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    @stack('styles')
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top py-3 border-bottom border-gold" style="background:rgba(10,14,26,0.95);backdrop-filter:blur(10px);">
    <div class="container">
        <a class="navbar-brand font-cinzel text-gold fs-5" href="/">Thousand<span class="text-red-op">Gym</span></a>
        <div class="d-flex gap-2">
            @auth
                @if(auth()->user()->hasRole('admin'))
                    <a href="/admin/dashboard" class="btn btn-outline-gold px-4">Mi Panel</a>
                @else
                    <a href="/user/dashboard" class="btn btn-outline-gold px-4">Mi Panel</a>
                @endif
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-op-red px-4">Cerrar Sesión</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-gold px-4">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="btn btn-op-red px-4">Registrarse</a>
            @endauth
        </div>
    </div>
</nav>

@yield('content')

<footer class="py-4 border-top border-gold" style="background:#060810;">
    <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div class="font-cinzel text-gold">Thousand<span class="text-red-op">Gym</span></div>
        <p class="mb-0 small text-muted-op opacity-50">© 2026 ThousandGym — Motivate a encontrar el one piece uniendote a esta tripulacion</p>
        <p class="mb-0 font-bebas" style="color:rgba(201,146,42,0.4); letter-spacing:0.2em;">⚓ Navega. Entrena. Conquista.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>