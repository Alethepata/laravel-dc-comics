@extends('layout.main')

@section('content')

    <div class="show rounded-5">

        <h1>Fumetto {{$comic->title}}</h1>
        <div class="button d-flex">
            <a href="{{route('comics.edit', $comic)}}" class="btn btn_edit me-3">Edit</a>

            <form
            action="{{ route('comics.destroy', $comic) }}"
            method="POST"
            onsubmit="return confirm ('Cancellare {{$comic->title}}?')"
            >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn_delete">Delete</button>
            </form>
        </div>

        <div class="content text-center">
            <div class="image">
                <img src="{{$comic->thumb}}" alt="">
            </div>

            <div class="text my-3">
                <h2>{{$comic->title}}</h2>
                <h4>Price: {{$comic->price}}</h4>
                <p>{{$comic->description}}</p>
                <p>
                    Series: {{$comic->series}} |
                    Type: {{$comic->type}} |
                    Sale date: {{$comic->sale_date}}
                </p>

            </div>

        </div>
    </div>

@endsection
