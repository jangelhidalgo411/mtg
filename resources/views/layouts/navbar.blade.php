@section('navbar')
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--a class="navbar-brand" href="#">Fixed navbar</a-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{Request::is('/' ?  'active' : '')}}">
                    <a class="nav-link" href="/">INICIO</a>
                </li>
                <li class="nav-item {{Request::is('lexico' ?  'active' : '')}}">
                    <a class="nav-link" href="/lexico">LEXICO</a>
                </li>
                <li class="nav-item {{Request::is('turno' ?  'active' : '')}}">
                    <a class="nav-link" href="/turno">TURNO</a>
                </li>
                <li class="nav-item {{Request::is('cartas' ?  'active' : '')}}">
                    <a class="nav-link" href="/cartas">CARTAS</a>
                </li>
                <li class="nav-item {{Request::is('habilidades' ?  'active' : '')}}">
                    <a class="nav-link" href="/habilidades">HABILIDADES</a>
                </li>
                <!--li class="nav-item">
                    <a class="nav-link" href="/buscador">BUSCADOR</a>
                </li-->
                <!--li class="nav-item">
                    <a class="nav-link" href="#">CURIOSIDADES</a>
                </li-->
                <!--li class="nav-item {{Request::is('polemicas' ?  'active' : '')}}">
                    <a class="nav-link" href="/polemicas">POLEMICAS</a-->
                </li>
                <li class="nav-item {{Request::is('mazos' ?  'active' : '')}}">
                    <a class="nav-link" target="_blank" href="https://magic.wizards.com/es/articles/archive/magic-academy/agresivo-combo-y-control-2007-01-27">MAZOS</a>
                </li>
            </ul>   
        </div>
    </nav>

