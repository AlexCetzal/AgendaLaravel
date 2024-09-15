<header>
    <img src="{{asset('assets/img/logo-modelo.png')}}" alt="example">
    <nav>
        <ul>
            <li><a href="">sesion</a></li>
        </ul>
    </nav>
</header>
<div class="padre">
    <div class=" menu_izquierda">
        <h1>Menu</h1>
        <ul>
            <li><a href="{{ route('index')}}">Home</a></li>
            <li><a href="{{ route('actividades_Modelo')}}">ActividadesModelo</a></li>
            <li><a href="{{ route('centro_cultural')}}">Centrocultural</a></li>
            <li><a href="{{ route('campos_Modelo')}}">CamposModelo</a></li>
            <li><a href="{{ route('transporte')}}">Transporte</a></li>
        </ul>
        <hr>
        <ul>
            <li><a href="{{ route('index')}}">Cerrar sesion</a></li>
            <li><a href="{{ route('actividades_Modelo')}}">configuracion</a></li>
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>

</div>
