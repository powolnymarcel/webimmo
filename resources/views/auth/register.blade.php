@extends('layout')

@section('contenu')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1>Inscription</h1>
                <h2>Vous avez déjà un compte ? <a href="{{route('login')}}">Connectez vous ici</a></h2>

                @include('partials._form-errors')

                <form role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="name" class="control-label">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('nom') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="control-label">Confirmation Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Inscription</button>

                    </div>
                </form>




            </div>
        </div>
    </div>
@endsection