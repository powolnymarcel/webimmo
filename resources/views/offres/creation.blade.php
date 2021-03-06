<!--arobase inject('pays','App\Http\Utiles\Pays'); -->

@extends('layout')

@section('contenu')
<h1>Vous voulez vendre votre maison ?</h1>
<hr>
<form action="{{route('offresCreation')}}" method="POST" enctype="multipart/form-data" >
    <div class="row">
        <div class="col-md-6">
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

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

        </div>
        <div class="col-md-6">


    <div class="form-group">
        <label for="prix">Prix de vente:</label>
        <input type="text" name="prix" id="prix" class="form-control" value="{{old('prix')}}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>




    <input type="hidden" name="_token" value="{{Session::token()}}">


        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Créer une offre </button>
        </div>
    </div>
</form>
    @stop

@section('scripts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
    @stop