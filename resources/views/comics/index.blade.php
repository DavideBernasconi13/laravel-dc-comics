@extends('layouts.app')

@section('title', 'Dc Comics')

@section('content')

<div class="container">
    <h1>
        Current Series
    </h1>
    @if(session()->has('error'))
        <div class="alert alert-danger my-5">{{session()->get('error')}}</div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success my-5">{{session()->get('success')}}</div>
    @endif
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
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary gx-2">Vedi dettaglio</a>
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary gx-2">Modifica</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection