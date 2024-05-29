@extends('layouts.app')

@section('title', 'Dc Comics')

@section('content')

<div class="container">
    <h1>
        Current Series
    </h1>
    <div class="row">

        @foreach ($comics as $comic)
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $comic->image }}" class="card-img-top" alt="{{ $comic->title }}" />
                    <span class="text-white position-absolute spanpop shadow-lg"
                        style="display: none;">{{ $comic['description'] }}</span>
                    <div class="card-body">
                        <h4 class="card-title">{{ $comic->title }}</h4>
                        <h5 class="card-title">{{ $comic->series }}</h5>
                        <p>
                            Price: <span>{{ $comic->price }}</span>
                        </p>
                        <p>
                            Type: <span>{{ $comic->type }}</span>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Vedi dettaglio</a>
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary">Modifica</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="comicDelete">
                                Elimina
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection