@extends('layout')

@section('contenu')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1>Connexion</h1>
<h2>Pas encore de compte ? <a href="{{route('register')}}">Creez en un ici</a></h2>
                @include('partials._form-errors')

                <form role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="email" class="control-label">E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Se souvenir de moi ?
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Connexion</button>

                        <a class="btn btn-link" href="{{ url('/password/email') }}">Mot de passe oublié?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection