<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>

</head>
<body>
    <header>
        @include('layouts._admin._nav')         
    </header>

    <main>
        @if(Session::has('mensagem'))

            <div class="container">
                <div class="row">
                    <div class="card {{Session::get('mensagem')['class']}}">
                        <div class="card-content">
                            <div class="card-content">
                                {{Session::get('mensagem')['msg']}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endif


        @yield('content')
    </main>

    <footer class="page-footer blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">SisAdmin</h5>
                <p>Sistema de Administração</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Navegue</h5>
            <ul>
                <li><a class="grey-text text-lighten-3" href="{{ route('site.home') }}">Site</a></li>
                <li><a class="grey-text text-lighten-3" href="{{ route('admin.principal') }}">Início</a></li>
            </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
        © 2018 Copyright Text
        <a href="#" class="grey-text text-lighten-4 right">Gabriel S. Cabral</a>
        </div>
    </div>
</footer>


<script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>

</body>
</html>
