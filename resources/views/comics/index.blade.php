@extends('layouts.app')

@section('title', 'Dc Comics')

@section('content')
<main>
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
                            <h5 class="card-title">{{ $comic->series }}</h5>
                            <p>
                                Price: <span>{{ $comic->price }}</span>
                            </p>
                            <p>
                                Type: <span>{{ $comic->type }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
    </div>
</main>

@endsection