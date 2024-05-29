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
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 color-danger" id="exampleModalLabel">Conferma eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro che vuoi elimnare l'elemento?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Torna indietro</button>
                <button type="button" class="btn btn-danger">Sì elimina!</button>
            </div>
        </div>
    </div>
</div>
@endsection