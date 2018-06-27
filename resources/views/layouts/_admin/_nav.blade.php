<nav>
    <div class="nav-wrapper blue">
        <div class="container">
            <a href="{{ route('admin.principal') }}" class="brand-logo">SisAdmin</a>
            <a href="#" data-target="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('admin.principal') }}">Início</a></li>
                <li><a href="{{ route('site.home') }} " target="_blank">Site</a></li>
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                @endif
            </ul>
            
            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{ route('admin.principal') }}">Início</a></li>
                <li><a href="{{ route('site.home') }}" target="_blank">Site</a></li>
                @if(Auth::guest())
                <li><a href="{{ route('admin.login') }}">Login</a></li>
                @else
                <li><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('admin.login.sair') }}">Sair</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
