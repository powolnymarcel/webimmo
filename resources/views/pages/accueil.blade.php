@extends('layout')

@section('contenu')
        <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <h1>Web immo !</h1>
    <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>

    <a href="{{route('AfficheroffresCreation')}}"><button class="btn btn-primary"> Créez une offre !</button>
    </a>

</div>

    @stop