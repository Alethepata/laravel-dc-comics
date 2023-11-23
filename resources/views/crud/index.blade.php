@extends('layout.main')

@section('content')

    <h1>Fumetti</h1>

    <a href="">
        <div class="card_container d-flex flex-wrap justify-content-center">
            @foreach ($comics as $comic)
                <div class="card mx-3 my-4">
                    <img src="{{$comic->thumb}}" alt="">
                </div>
            @endforeach
        </div>
    </a>

@endsection
