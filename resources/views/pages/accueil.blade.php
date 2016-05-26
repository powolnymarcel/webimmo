@extends('layout')

@section('contenu')
        <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <h1>Web immo !</h1>
    <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>

    <a href="{{route('AfficheroffresCreation')}}"><button class="btn btn-primary"> Créez une offre !</button>
    </a>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Total : {{$offres->count()}}</h2>
                <table class="table table-inverse">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Rue</th>
                        <th>Ville</th>
                        <th>Code postal</th>
                        <th>Pays</th>
                        <th>Prix</th>
                        <th>Voir</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offres as $key=>$offre)


                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$offre->id}}</td>
                            <td>{{$offre->rue}}</td>
                            <td>{{$offre->ville}}</td>
                            <td>{{$offre->codepostal}}</td>
                            <td>{{$offre->pays}}</td>
                            <td>{{$offre->prix}}</td>
                            <td><a href="{{route('voirOffre',['codepostal'=>$offre->codepostal,'rue'=>$offre->rue])}}" class="btn btn-primary">Voir</a></td>
                        </tr>


                    @endforeach


                    </tbody>
                </table>

            <a href="{{route('Affichageroffresjson')}}" class="btn btn-block btn-primary">Export JSON ICI</a>



        </div>
    </div>
</div>

    @stop