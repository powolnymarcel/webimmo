<!--arobase inject('pays','App\Http\Utiles\Pays'); -->

@extends('layout')

@section('contenu')
<h1>Vous voulez vendre votre maison ?</h1>
<hr>

<form action="{{route('offresCreation')}}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="rue">Rue:</label>
        <input type="text" name="rue" id="rue" class="form-control" value="{{old('rue')}}">
    </div>



    <div class="form-group">
        <label for="ville">Ville:</label>
        <input type="text" name="ville" id="ville" class="form-control" value="{{old('ville')}}">
    </div>

    <div class="form-group">
        <label for="codepostal">Code postal:</label>
        <input type="text" name="codepostal" id="codepostal" class="form-control" value="{{old('codepostal')}}">
    </div>



    <div class="form-group">
        <label for="pays">Pays:</label>
        <select name="pays" id="pays" class="form-control">
            @foreach($pays as $pay => $code)
                <option value="{{$code}}">{{$pay}}</option>
                @endforeach
        </select>
    </div>

    <hr>


    <div class="form-group">
        <label for="prix">Prix de vente:</label>
        <input type="text" name="prix" id="prix" class="form-control" value="{{old('prix')}}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>



    <div class="form-group">
        <label for="photos">Photos:</label>
        <input type="file" name="photos" id="photos" class="form-control" value="{{old('photos')}}">
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-default">Créer une offre </button>
    </div>
    <input type="hidden" name="_token" value="{{Session::token()}}">

</form>
    @stop