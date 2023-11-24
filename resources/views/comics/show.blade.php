@extends('layout.main')

@section('content')

    <h1>Fumetto {{$comic->title}}</h1>
    <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">Edit</a>

    <form
    action="{{ route('comics.destroy', $comic) }}"
    method="POST"
    onsubmit="return confirm ('Cancellare {{$comic->title}}?')"
    >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

        <div class="content text-center">
            <div class="image">
                <img class="w-25" src="{{$comic->thumb}}" alt="">
            </div>

            <div class="text my-3">
                <h2>{{$comic->title}}</h2>
                <p>{{$comic->description}}</p>
                <p>
                    Series: {{$comic->series}} |
                    Type: {{$comic->type}} |
                    Sale date: {{$comic->sale_date}} |
                    Price: {{$comic->price}}
                </p>

            </div>

        </div>

@endsection
