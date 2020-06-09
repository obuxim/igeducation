<header class="container-fluid shadow bg-light navbar-light">
    <div class="row">
        <div class="col-11 mx-auto">
            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ route('homepage') }}" class="navbar-brand">
                    <img src="{{ asset('img/logo.png') }}" class="logo" alt="{{ config('app.name') }}"/>
                </a>
                <button class="d-block d-lg-none navbar-toggler" id="toggleNav">
                    <i class="fas fa-bars text-primary"></i>
                </button>
                <ul class="navbar-nav d-none d-lg-flex flex-row">
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('homepage') }}">home</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('about') }}">about</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('services') }}">services</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('countries') }}">countries</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('institutes') }}">institutes</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('testimonials') }}">testimonials</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('news') }}">news</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ route('apply') }}">apply</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div id="mobileMenu" class="d-none bg-dark">

</div>
