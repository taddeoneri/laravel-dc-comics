@extends('layouts.layout')

@section('content')
    <div class="main-top row">
        @foreach ($comics as $comic)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex flex-column justify-content-center align-items-center">
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button btn btn-danger mb-3">Delete</button>
                </form>
                <a href="{{ route('comics.show', $comic->id) }}">
                    <div class="mycard m-0">
                        <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="{{$comic['title']}}">
                    </div>
                    <div>
                        <p class="text-uppercase">{{ $comic['title'] }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <a class="btn btn-success" href="{{ route('comics.create')}}">Create a new comic</a>
@endsection
