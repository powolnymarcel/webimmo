@extends('layout')


@section('contenu')
    <div class="row">
        <div class="col-md-4">
            <h1>{{ $offre->rue }}</h1>

            <h2>€ {{ $offre->prix }}</h2>

            <hr>

            <div class="description">{!! nl2br($offre->description) !!}</div>
        </div>
        <div class="col-md-8 gallery">
            @foreach ($offre->photos as $set)
                <img src="{{asset($set->chemin)}}">
            @endforeach


        @foreach ($offre->photos->chunk(4) as $set)
                <div class="row">
                    @foreach ($set as $photo)
                        <div class="col-md-3 gallery__image">
                            <img src="/{{ $photo->thumbnail_path }}" alt="">
                        </div>
                    @endforeach
                </div>
            @endforeach



        </div>
    </div>
        <hr>
        <h2>Ajouter vos photos</h2>

    <form action="{{route('ajout_photos',['codepostal'=>$offre->codepostal,'rue'=>$offre->rue])}}" method="post" class="dropzone">
        {{csrf_field()}}
    </form>
@stop

@section('scripts.footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    <script type="text/javascript">
        Dropzone.options.addPhotosForm = {
            paramName: 'photo',
            maxFileSize: 3,
            acceptedFiles: '.jpg, .jpeg, .png, .bmp',
        };
    </script>
@endsection
