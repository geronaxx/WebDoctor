<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div><a class="navbar-brand" href="/">Dr. Rub&eacute;n Castillo M&eacute;ndez</a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBarCollapse" aria-controls="navBarCollapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navBarCollapse">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="/">Inicio</a>
                <a class="nav-item nav-link" href="/candidato">¿Soy Candidato?</a>
                <a class="nav-item nav-link" href="/cirugias">Tipos de cirugía</a>
                <a class="nav-item nav-link" href="about">Acerca de mí</a>
            </div>
        </div>
    </nav>

    @if($image)
    <section class="header-image container-fluid" style="{{$image}}">

    </section>
    @endif

    <section id="header-section" class="container mb-4">
        @yield('content')
    </section>


    <div class="bg-dark min-150">
    <section id="footer-section" class="container white">
        <div class="row">
            <div class="col-4 mt-4">
                <h5>Contacto</h5>
                <div>
                Hospital General
                Av. Siempre Viva #123
                </div>
                <div>
                    Consultorio 2
                    Av. Siempre Viva # 456
                </div>
                
            </div>
            <div class="col-4 mt-4">
                <h5>Telefonos</h5>
                <div>
                    Cel. 666-6-666666
                </div>
                <div>
                    Oficina 666-6-666666
                </div>
            </div>
            <div class="col-4 mt-4">
                <h5>Redes</h5>
                <div>Facebook</div>
                <div>Twitter</div>
            </div>
        </div>
    </section>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/added.js') }}"></script>
</body>

</html>