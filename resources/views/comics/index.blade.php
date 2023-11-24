@extends('layout.main')

@section('content')

    <h1>Fumetti</h1>

    @if (session('deleted'))

        <div class="alert alert-primary" role="alert">
            {{session('deleted')}}
          </div>

    @endif

    <div class="card_container d-flex flex-wrap justify-content-center">
        @foreach ($comics as $comic)
            <div class="card mx-3 my-4">
                <a href="{{route('comics.show', $comic->id)}}">
                    <img src="{{$comic->thumb}}" alt="">
                </a>
            </div>
        @endforeach
    </div>


@endsection
