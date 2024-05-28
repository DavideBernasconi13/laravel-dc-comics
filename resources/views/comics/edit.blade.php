@extends('layouts.app')

@section('title', 'Modifica Fumetto')

@section('content')

<div class="container">
    <h1>
        Modifica Fumetto | Edit
    </h1>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title"
                value="{{$comic->title}}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control">{!!$comic->description!!}</textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="image" name="image" value="{{$comic->image}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di vendita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}"
                required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-control" id="type" name="type" value="{{$comic->type}}" required>
                <option value="comic book" {{$comic->type === "comic book" ? "selected" : ""}}>comic book</option>
                <option value="graphic novel" {{$comic->type === "graphic novel" ? "selected" : ""}}>graphic novel
                </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</div>

@endsection