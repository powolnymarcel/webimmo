<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>webimmo</title>
    <link rel="stylesheet" href="{{ URL::to('css/libs.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
</head>
<body>
@include('flash')
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/projetFlyers/public/">webimmo</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/projetFlyers/public/">Accueil</a></li>
                <li><a href="#about">A propos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            @if($estConnecte)
                <p class="navbar-text navbar-right">
                    Salut, {{$utilisateur->name}}
                    <a href="{{route('logout')}}">Deconnexion</a>
                </p>
                @endif
            @if(!$estConnecte)
                <p class="navbar-text navbar-right">
                    <a href="{{route('login')}}">Connexion</a>
                </p>
            @endif
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    @yield('contenu')
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{ URL::to('js/libs.js') }}"></script>
@yield('scripts.footer')
@include('flash')
</body>
</html>