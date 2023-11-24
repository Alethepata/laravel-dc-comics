@extends('layout.main')

@section('content')

    <h1>Modifica di {{$comic->title}}</h1>

     <div class="form my-5">
        <form action= "{{route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')

            <div class="form-floating my-3">
                <input type="text" class="form-control" placeholder="Title" name="title" value="{{$comic->title}}">
                <label for="title">Title</label>
             </div>

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Price" name="price" value="{{$comic->price}}">
                <label for="price">price</label>
             </div>

            <div class="form-floating my-3">
                <input type="text" class="form-control" placeholder="Series" name="series" value="{{$comic->series}}">
                <label for="series">Series</label>
             </div>

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Sale date" name="sale_date" value="{{$comic->sale_date}}">
                <label for="sale_date">Sale date</label>
             </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" placeholder="type" name="type" value="{{$comic->type}}">
                <label for="type">Type</label>
             </div>

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="Image" name="thumb" value="{{$comic->thumb}}">
                <label for="thumb">Image</label>
            </div>

            <div class="form-floating my-3">
                <textarea class="form-control" placeholder="Description" name="description">{{$comic->description}}</textarea>
                <label for="description">Description</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Artists" name="artists">{{$comic->artists}}</textarea>
                <label for="artists">Artists</label>
            </div>
            <div class="form-floating my-3">
                <textarea class="form-control" placeholder="Writers" name="writers">{{$comic->writers}}</textarea>
                <label for="writers">Writers</label>
            </div>

            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-danger">Cancella</button>

        </form>
    </div>


@endsection
