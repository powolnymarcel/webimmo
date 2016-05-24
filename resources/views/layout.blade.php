<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>webimmo</title>
    <link rel="stylesheet" href="{{ URL::to('css/libs.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">

</head>
<body>
@include('flash')
<nav class="navbar navbar-inverse navbar-fixed-top">
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
                <li class="active"><a href="/">Accueil</a></li>
                <li><a href="#about">A propos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    @yield('contenu')
</div>

<script src="{{ URL::to('js/libs.js') }}"></script>
<script>
    swal({
        title: "Error!",
        text: "Here's my error message!",
        type: "error",
        confirmButtonText: "Cool"
    });
</script>
</body>
</html>