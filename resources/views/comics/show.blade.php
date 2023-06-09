@extends('layouts.layout')

@section('content')
    <div class="my-5 container">
        <div>
            <a href="{{ route('comics.index') }}">Comics list</a>
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
        </div>
        <h1 class="py-5 text-center ">{{ $comic['title'] }}</h1>
        <div class="row">
            <div class="col-4">
                <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="">
            </div>
            <div class="col-8">
                <p class="px-5">{{ $comic['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
