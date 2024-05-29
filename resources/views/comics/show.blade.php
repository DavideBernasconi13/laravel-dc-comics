@extends('layouts.app')
@section('title', $comic->title)
@section('content')
<section class="container bg-white mt-4">
    <h1 class="pb-4">{{$comic->title}}</h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="{{$comic->image}}" class="img-fluid" alt="{{$comic->title}}">
        </div>
        <div class="col-12 col-md-8">
            <p>{!!$comic->description!!}</p>
            <div>
                Tipo: {{$comic->type}}
            </div>
            <div>
                Serie: {{$comic->series}}
            </div>
            <div class="mb-4">
                Data di vendita: {{$comic->sale_date}}
            </div>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    id="comicDelete">
                    Elimina
                </button>
            </form>
        </div>
    </div>

</section>
@endsection